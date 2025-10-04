<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewerInformation;

class CheckReviewerInformation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user) {
            if ($user->user_Access === 'IACUC Reviewer') {
                $info = ReviewerInformation::where('user_ID', $user->user_ID)->first();
                if (!$info) {
                    return redirect()->route('iacuc-reviewer.college-dept');
                }
            } elseif ($user->user_Access === 'ERB Reviewer') {
                $info = ReviewerInformation::where('user_ID', $user->user_ID)->first();
                if (!$info) {
                    return redirect()->route('erb-reviewer.college-dept');
                }
            }
        }

        return $next($request);
    }
}
