<?php

namespace App\Http\Controllers;

use App\Models\Form2A;
use Illuminate\Http\Request;

class Form2AController extends Controller
{
    public function index(Request $request)
    {
    $form2a = Form2A::all();

    if ($request->wantsJson()) {
        return response()->json([
            'status' => 'success',
            'count' => $form2a->count(),
            'data' => $form2a
        ]);
    }

    return view('student.download-forms', compact('form2a'));
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'protocol' => 'required|string|max:255',
            'pi_name' => 'required|string|max:255',
            'coi_name' => 'nullable|string|max:255',
            
            //Seniors
            'informed_consent' => 'nullable|string',
            'cognitive_assessment' => 'nullable|string',
            'physical_risks' => 'nullable|string',
            'respect_autonomy' => 'nullable|string',
            'privacy_confidentiality' => 'nullable|string',
            'intervention_suitability' => 'nullable|string', 

            //Minors
            'parent_consent' => 'nullable|string',
            'assent_process' => 'nullable|string',
            'harm_protection' => 'nullable|string',
            'educational_balance' => 'nullable|string',
            'mandatory_reporting' => 'nullable|string',
            'equitable_inclusion' => 'nullable|string', 

            //Persons with Disabilities
            'accessible_comm' => 'nullable|string',
            'consent_capacity' => 'nullable|string',
            'risk_mitigation' => 'nullable|string',
            'non_discrimination' => 'nullable|string',
            'reasonable_accommodations' => 'nullable|string',
            'monitoring' => 'nullable|string', 

            //Person Deprived of Liberty
            'voluntary_participation' => 'nullable|string',
            'equitable_selection' => 'nullable|string',
            'privacy_confidentiality_2' => 'nullable|string',
            'benefit_risk_analysis' => 'nullable|string',
            'independent_oversight' => 'nullable|string',
            'post_study_support' => 'nullable|string', 

            //General Principles for All Groups
            'ethical_justification' => 'nullable|string',
            'scientific_validity' => 'nullable|string',
            'risk_benefit_assessment' => 'nullable|string',
            'cultural_sensitivity' => 'nullable|string',
            'compensation' => 'nullable|string',
            
            //Process of Participant Recruitment
            'potential_participants' => 'nullable|string',
            'conditions_characteristics' => 'nullable|string',
            'susceptible_to_risks' => 'nullable|string',
            'special_vulnerability' => 'nullable|string',
            'possible_indication' => 'nullable|string',
            'procedure' => 'nullable|string', 

            //Sample size and suitable determination procedure
            'sample_size_1' => 'nullable|string',
            'sample_size_2' => 'nullable|string',
            
            //Site of data collection
            'anonymity_confidentiality' => 'nullable|string',
            'procedures_confidentiality' => 'nullable|string',
            'final_disposition' => 'nullable|string', 
            //Last Part
            'thesisadviser' => 'required|string|max:255',
            'notedby' => 'required|string|max:255',
            'coordinator' => 'required|string|max:255', 
        ]);

        $form2a = new Form2A();
        $form2a->form2AID = $this->generateCustomID();
        $form2a->protocol = $validate['protocol'];
        $form2a->pi_name = $validate['pi_name'];
        $form2a->coi_name = $validate['coi_name']; 

        //Basic Documents
        $form2a->cover_letter = $request->has('cover_letter');
        $form2a->enrollment_proof = $request->has('enrollment_proof');
        $form2a->letter = $request->has('letter');
        $form2a->complete_form2b = $request->has('complete_form2b');
        $form2a->complete_form2a = $request->has('complete_form2a');
        $form2a->complete_form2d = $request->has('complete_form2d'); 

        //Protocol Package
        $form2a->study_protocol = $request->has('study_protocol');
        $form2a->form2c_eng = $request->has('form2c_eng');
        $form2a->form2c_fil = $request->has('form2c_fil');
        $form2a->data_collection = $request->has('data_collection');
        $form2a->cert_validator = $request->has('cert_validator');
        $form2a->eng_7_12_yrs = $request->has('eng_7_12_yrs');
        $form2a->fil_7_12_yrs = $request->has('fil_7_12_yrs');
        $form2a->eng_13_17_yrs = $request->has('eng_13_17_yrs');
        $form2a->fil_13_17_yrs = $request->has('fil_13_17_yrs');
        $form2a->advertisement = $request->has('advertisement');
        $form2a->vitae = $request->has('vitae');
        $form2a->gcp = $request->has('gcp');
        $form2a->gantt_chart = $request->has('gantt_chart'); 

        //Seniors
        $form2a->sen_ic = $request->has('sen_ic');
        $form2a->informed_consent = $validate['informed_consent'];
        $form2a->sen_ca = $request->has('sen_ca');
        $form2a->cognitive_assessment = $validate['cognitive_assessment'];
        $form2a->sen_phr = $request->has('sen_phr');
        $form2a->physical_risks = $validate['physical_risks'];
        $form2a->sen_raa = $request->has('sen_raa');
        $form2a->respect_autonomy = $validate['respect_autonomy'];
        $form2a->sen_pac = $request->has('sen_pac');
        $form2a->privacy_confidentiality = $validate['privacy_confidentiality'];
        $form2a->sen_is = $request->has('sen_is');
        $form2a->intervention_suitability = $validate['intervention_suitability']; 

        //Minors
        $form2a->min_pgc = $request->has('min_pgc');
        $form2a->parent_consent = $validate['parent_consent'];
        $form2a->min_ap = $request->has('min_ap');
        $form2a->assent_process = $validate['assent_process'];
        $form2a->min_pfh = $request->has('min_pfh');
        $form2a->harm_protection = $validate['harm_protection'];
        $form2a->min_eb = $request->has('min_eb');
        $form2a->educational_balance = $validate['educational_balance'];
        $form2a->min_mr = $request->has('min_mr');
        $form2a->mandatory_reporting = $validate['mandatory_reporting'];
        $form2a->min_ei = $request->has('min_ei');
        $form2a->equitable_inclusion = $validate['equitable_inclusion']; 

        //Persons with Disabilities
        $form2a->pwd_ac = $request->has('pwd_ac');
        $form2a->accessible_comm = $validate['accessible_comm'];
        $form2a->pwd_cc = $request->has('pwd_cc');
        $form2a->consent_capacity = $validate['consent_capacity'];
        $form2a->pwd_rm = $request->has('pwd_rm');
        $form2a->risk_mitigation = $validate['risk_mitigation'];
        $form2a->pwd_nd = $request->has('pwd_nd');
        $form2a->non_discrimination = $validate['non_discrimination'];
        $form2a->pwd_ra = $request->has('pwd_ra');
        $form2a->reasonable_accommodations = $validate['reasonable_accommodations'];
        $form2a->pwd_m = $request->has('pwd_m');
        $form2a->monitoring = $validate['monitoring']; 

        //Person Deprived of Liberty
        $form2a->pdol_vp = $request->has('pdol_vp');
        $form2a->voluntary_participation = $validate['voluntary_participation'];
        $form2a->pdol_es = $request->has('pdol_es');
        $form2a->equitable_selection = $validate['equitable_selection'];
        $form2a->pdol_pac2 = $request->has('pdol_pac2');
        $form2a->privacy_confidentiality_2 = $validate['privacy_confidentiality_2'];
        $form2a->pdol_bara = $request->has('pdol_bara');
        $form2a->benefit_risk_analysis = $validate['benefit_risk_analysis'];
        $form2a->pdol_io = $request->has('pdol_io');
        $form2a->independent_oversight = $validate['independent_oversight'];
        $form2a->pdol_pss = $request->has('pdol_pss');
        $form2a->post_study_support = $validate['post_study_support']; 

        //General Principles for All Groups
        $form2a->gpfag_ej = $request->has('gpfag_ej');
        $form2a->ethical_justification = $validate['ethical_justification'];
        $form2a->gpfag_sv = $request->has('gpfag_sv');
        $form2a->scientific_validity = $validate['scientific_validity'];
        $form2a->gpfag_rba = $request->has('gpfag_rba');
        $form2a->risk_benefit_assessment = $validate['risk_benefit_assessment'];
        $form2a->gpfag_cs = $request->has('gpfag_cs');
        $form2a->cultural_sensitivity = $validate['cultural_sensitivity'];
        $form2a->gpfag_c = $request->has('gpfag_c');
        $form2a->compensation = $validate['compensation']; 

        //Process of Participant Recruitment
        $form2a->popr_pp = $request->has('popr_pp');
        $form2a->potential_participants = $validate['potential_participants'];
        $form2a->popr_cc = $request->has('popr_cc');
        $form2a->conditions_characteristics = $validate['conditions_characteristics'];
        $form2a->popr_str = $request->has('popr_str');
        $form2a->susceptible_to_risks = $validate['susceptible_to_risks'];
        $form2a->popr_sv = $request->has('popr_sv');
        $form2a->special_vulnerability = $validate['special_vulnerability'];
        $form2a->popr_pi = $request->has('popr_pi');
        $form2a->possible_indication = $validate['possible_indication'];
        $form2a->popr_p = $request->has('popr_p');
        $form2a->procedure = $validate['procedure'];
        
        //Sample size and suitable determination procedure
        $form2a->sample_size_1 = $validate['sample_size_1'];
        $form2a->sample_size_2 = $validate['sample_size_2'];

        //Site of data collection
        $form2a->sodc_ac = $request->has('sodc_ac');
        $form2a->anonymity_confidentiality = $validate['anonymity_confidentiality'];
        $form2a->sodc_pc = $request->has('sodc_pc');
        $form2a->procedures_confidentiality = $validate['procedures_confidentiality'];
        $form2a->sodc_fd = $request->has('sodc_fd');
        $form2a->final_disposition = $validate['final_disposition'];
        
        //Last Part
        $form2a->thesisadviser = $validate['thesisadviser'];
        $form2a->notedby = $validate['notedby'];
        $form2a->coordinator = $validate['coordinator'];
        
        $form2a->save();
        return redirect()->route('download-forms');
    }


    private function generateCustomID(): string
    {
    $prefix = 'f2a';

    $latest = Form2A::where('form2AID', 'like', $prefix . '%')
        ->orderByDesc('form2AID')
        ->first();

    if (!$latest) {
        return $prefix . '000001';
    }

    // Remove "f2a" prefix (length = 3)
    $number = (int) substr($latest->form2AID, strlen($prefix));
    $next = $number + 1;

    return $prefix . str_pad($next, 6, '0', STR_PAD_LEFT);
    }
}
