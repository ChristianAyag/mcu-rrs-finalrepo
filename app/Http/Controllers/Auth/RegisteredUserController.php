<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ResearchInformation;
use App\Notifications\NewRegisteredUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    //Display the registration view.
    public function create(): View
    {
        return view('auth.register');
    }
    public function index(Request $request){
            $users = User::all();

        if ($request->wantsJson()) {
        return response()->json([
            'status' => 'success',
            'count' => $users->count(),
            'data' => $users
        ]);
        }

        return view('superadmin.permission-control', compact(('users')));
    }
    /**
     * Handle an incoming registration request.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $validate = $request->validate([
            'user_Fname' => ['required', 'string', 'max:255'],
            'user_Lname' => ['required', 'string', 'max:255'],
            'user_MI' => ['nullable', 'string', 'max:2'], 
            'user_Password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
            'user_Email' => 'required|email|unique:tbl_users,user_Email',
            'user_Access' => ['nullable'],

            'research_CoInvestigator' => ['nullable', 'string', 'max:255'],
            'research_title' => ['required', 'string', 'max:255'],

    // ✅ School required only if checkmcu IS present
    'research_college' => [Rule::requiredIf(!$request->has('research_checkmcu')), 'nullable', 'string', 'max:255'],
    'research_department' => [Rule::requiredIf(!$request->has('research_checkmcu')), 'nullable', 'string', 'max:255'],
    'research_school' => [Rule::requiredIf($request->has('research_checkmcu')), 'nullable', 'string', 'max:255'],
        ]);

        DB::beginTransaction();

        try {
            // ✅ Save user
            $user_Access = $request->input('user_Access', 'Principal Investigator');
            $user = User::create([
                'user_ID'       => $this->generateCustomID($user_Access),
                'user_Access'   => $user_Access,
                'user_Lname'    => $validate['user_Lname'],
                'user_Fname'    => $validate['user_Fname'],
                'user_MI'       => $validate['user_MI'] ?? null,
                'user_Password' => Hash::make($validate['user_Password']),
                'user_Email'    => $validate['user_Email'],
            ]);

            // ✅ Folder for uploads
            $folderPath = 'researchFolder/' . $user->user_ID;
            Storage::makeDirectory($folderPath);

            // ✅ Handle file upload
            $research_Endorsement = null;
            if ($request->hasFile('research_Endorsement')) {
                $file = $request->file('research_Endorsement');
                $filename = $user->user_ID . '_' . time() . '.' . $file->getClientOriginalExtension();
                $research_Endorsement = $file->storeAs($folderPath, $filename, 'public');
            }

            // ✅ Determine school value
            if ($request->has('research_checkmcu')) {
    // Not MCU student
                $research_college = null;
                $research_department = null;
                $research_school = $request->input('research_school');
            } else {
                // MCU student
                $research_college = $request->input('research_college');
                $research_department = $request->input('research_department');
                $research_school = "Manila Central University";
            }

            // ✅ Save Research Information
            ResearchInformation::create([
                'research_info_ID'      => $this->generateResearchInfoID(),
                'user_ID'               => $user->user_ID,
                'research_CoInvestigator'=> $validate['research_CoInvestigator'] ?? null,
                'research_title'        => $validate['research_title'],
                'research_college'       => $research_college,
                'research_department'    => $research_department,
                'research_school'       => $research_school,
                'research_Endorsement'  => $research_Endorsement,
            ]);

            DB::commit();

            event(new Registered($user));

            $superadmin = User::where('user_Access','Superadmin')->get();

            foreach ($superadmin as $admin) {
                $admin->notify(new NewRegisteredUser($user));
            }

            return redirect()->route('login')->with('success', 'Registration completed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Registration failed: ' . $e->getMessage()]);
        }
    }

    public function addUser(Request $request)
    {
        $validate = $request->validate([
        'user_Fname' => ['required', 'string', 'max:255'],
        'user_Lname' => ['required', 'string', 'max:255'],
        'user_MI' => ['nullable', 'string', 'max:2'], 
        'user_Password' => [
            'required',
            'string',
            'min:8',
            'confirmed',
            ],
        'user_Email' => 'required|email|unique:tbl_users,user_Email',
        'user_Access' => ['nullable'],
        ]);

        $user = new User();
        
        $user_Access = $request->input('user_Access', 'Principal Investigator');
        if (empty($user_Access)) {
            $user_Access = 'Principal Investigator';
        }
        $user->user_Access = $user_Access;
        $user->user_ID = $this->generateCustomID($user_Access);
        $user->user_Lname = $validate['user_Lname'];
        $user->user_Fname = $validate['user_Fname'];
        $user->user_MI = $validate['user_MI'] ?? null; // optional: fallback if null
        $user->user_Password = Hash::make($validate['user_Password']);
        $user->user_Email = $validate['user_Email'];
        $user->save();

        if ($request->wantsJson()) {
        return response()->json([
            'status'  => 'success',
            'message' => 'New user added successfully.',
            'data'    => $user
        ], 201);
    }

    return redirect()->route('permission-control')
                     ->with('success', 'New user added successfully.');
        /*
        // Create user folder
        $folderPath = 'piFolder/' . $user->pi_ID;
        Storage::makeDirectory($folderPath);

        if ($request->hasFile('pi_LetterOfIntent')) {
            $file = $request->file('pi_LetterOfIntent');
            $filename = $user->pi_ID . '_' . time() . '.' . $file->getClientOriginalExtension(); // optional: unique filename
            $path = $file->storeAs($folderPath, $filename, 'public');

            // Save only the file path in DB
            $user->pi_LetterOfIntent = $path;
            $user->save();
        }
        */

        //$plainPassword = $validate['pi_Password']; // store plain password before hashing
        //Mail::to($user->pi_Email)->send(new UserCredentialMail($user, $plainPassword));
        /*
        $request->validate([
            'userLname' => ['required', 'string', 'max:255'],
            'pi_fname' => ['required', 'string', 'max:255'],
            'userMI' => ['nullable|string|max:4'],
            //'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            //'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            //'email' => $request->email,
            //'password' => Hash::make($request->password),
        ]); */
    }
    private function generateCustomID(?string $user_Access): string
    {
        $user_Access = $user_Access ?: 'Principal Investigator';

        $prefixMap = [
            'Reviewer' => 'r',
            'IACUC Admin' => 'i',
            'ERB Admin' => 'e',
            'Superadmin' => 's',
            'Principal Investigator' => 'p'
        ];

        $prefix = $prefixMap[$user_Access] ?? 'x';

        $latest = User::where('user_Access', $user_Access)
            ->where('user_ID', 'like', $prefix . '%')
            ->orderByDesc('user_ID')
            ->first();

        if (!$latest) {
            return $prefix . '000001';
        }

    // ✅ use user_ID instead of user_Access
        $number = (int) substr($latest->user_ID, 1);
        $next = $number + 1;

        return $prefix . str_pad($next, 6, '0', STR_PAD_LEFT);
    }
    private function generateResearchInfoID()
    {
        // Get the latest research_info_ID
        $lastRecord = ResearchInformation::orderBy('research_info_ID', 'desc')->first();

        if (!$lastRecord) {
            // If no record exists, start at 00001
            $nextNumber = 1;
        } else {
            // Extract the numeric part (after RES-)
            $lastNumber = (int) str_replace('RES-', '', $lastRecord->research_info_ID);
            $nextNumber = $lastNumber + 1;
        }

        // Format with leading zeros (5 digits)
        return 'RES-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
    }
}
