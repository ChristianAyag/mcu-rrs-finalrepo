<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2A extends Model
{
    protected $table = 'tbl_form2a';
    protected $primaryKey = 'form2AID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form2AID',
        'protocol',
        'pi_name',
        'coi_name',
        
        //Basic Documents
        'cover_letter',
        'enrollment_proof',
        'letter',
        'complete_form2b',
        'complete_form2a',
        'complete_form2d', 

        //Protocol Package
        'study_protocol',
        'form2c_eng',
        'form2c_fil',
        'data_collection',
        'cert_validator',
        'eng_7_12_yrs',
        'fil_7_12_yrs',
        'eng_13_17_yrs',
        'fil_13_17_yrs',
        'advertisement',
        'vitae',
        'gcp',
        'gantt_chart', 

        //Seniors
        'informed_consent',
        'cognitive_assessment',
        'physical_risks',
        'respect_autonomy',
        'privacy_confidentiality',
        'intervention_suitability',
        'sen_ic', //Checkbox
        'sen_ca',
        'sen_phr',
        'sen_raa',
        'sen_pac',
        'sen_is', 

        //Minors
        'parent_consent',
        'assent_process',
        'harm_protection',
        'educational_balance',
        'mandatory_reporting',
        'equitable_inclusion',
        'min_pgc',
        'min_ap',
        'min_pfh',
        'min_eb',
        'min_mr',
        'min_ei', 

        //Persons with Disabilities
        'accessible_comm',
        'consent_capacity',
        'risk_mitigation',
        'non_discrimination',
        'reasonable_accommodations',
        'monitoring',
        'pwd_ac',
        'pwd_cc',
        'pwd_rm',
        'pwd_nd',
        'pwd_ra',
        'pwd_m', 

        //Person Deprived of Liberty
        'voluntary_participation',
        'equitable_selection',
        'privacy_confidentiality_2',
        'benefit_risk_analysis',
        'independent_oversight',
        'post_study_support',
        'pdol_vp',
        'pdol_es',
        'pdol_pac2',
        'pdol_bara',
        'pdol_io',
        'pdol_pss', 

        //General Principles for All Groups
        'ethical_justification',
        'scientific_validity',
        'risk_benefit_assessment',
        'cultural_sensitivity',
        'compensation',
        'gpfag_ej',
        'gpfag_sv',
        'gpfag_rba',
        'gpfag_cs',
        'gpfag_c', 

        //Process of Participant Recruitment
        'potential_participants',
        'conditions_characteristics',
        'susceptible_to_risks',
        'special_vulnerability',
        'possible_indication',
        'procedure',
        'popr_pp',
        'popr_cc',
        'popr_str',
        'popr_sv',
        'popr_pi',
        'popr_p', 
        
        //Sample size and suitable determination procedure
        'sample_size_1',
        'sample_size_2',

        //Site of data collection
        'anonymity_confidentiality',
        'procedures_confidentiality',
        'final_disposition',
        'sodc_ac',
        'sodc_pc',
        'sodc_fd',

        //Last Part
        'thesisadviser',
        'notedby',
        'coordinator', 
    ];

    protected $casts = [
        
        //Basic Documents
        'cover_letter' => 'boolean',
        'enrollment_proof' => 'boolean',
        'letter' => 'boolean',
        'complete_form2b' => 'boolean',
        'complete_form2a' => 'boolean',
        'complete_form2d' => 'boolean', 

        //Protocol Package
        'study_protocol' => 'boolean',
        'form2c_eng' => 'boolean',
        'form2c_fil' => 'boolean',
        'data_collection' => 'boolean',
        'cert_validator' => 'boolean',
        'eng_7_12_yrs' => 'boolean',
        'fil_7_12_yrs' => 'boolean',
        'eng_13_17_yrs' => 'boolean',
        'fil_13_17_yrs' => 'boolean',
        'advertisement' => 'boolean',
        'vitae' => 'boolean',
        'gcp' => 'boolean',
        'gantt_chart' => 'boolean', 

        //Seniors
        'informed_consent',
        'cognitive_assessment',
        'physical_risks',
        'respect_autonomy',
        'privacy_confidentiality',
        'intervention_suitability',
        'sen_ic' => 'boolean', //Checkbox
        'sen_ca' => 'boolean',
        'sen_phr' => 'boolean',
        'sen_raa' => 'boolean',
        'sen_pac' => 'boolean',
        'sen_is' => 'boolean', 

        //Minors
        'parent_consent',
        'assent_process',
        'harm_protection',
        'educational_balance',
        'mandatory_reporting',
        'equitable_inclusion',
        'min_pgc' => 'boolean', //Checkbox
        'min_ap' => 'boolean',
        'min_pfh' => 'boolean',
        'min_eb' => 'boolean',
        'min_mr' => 'boolean',
        'min_ei' => 'boolean', 

        //Persons with Disabilities
        'accessible_comm',
        'consent_capacity',
        'risk_mitigation',
        'non_discrimination',
        'reasonable_accommodations',
        'monitoring',
        'pwd_ac' => 'boolean', //Checkbox
        'pwd_cc' => 'boolean',
        'pwd_rm' => 'boolean',
        'pwd_nd' => 'boolean',
        'pwd_ra' => 'boolean',
        'pwd_m' => 'boolean', 

        //Person Deprived of Liberty
        'voluntary_participation',
        'equitable_selection',
        'privacy_confidentiality_2',
        'benefit_risk_analysis',
        'independent_oversight',
        'post_study_support',
        'pdol_ac' => 'boolean',
        'pdol_cc' => 'boolean',
        'pdol_rm' => 'boolean',
        'pdol_nd' => 'boolean',
        'pdol_ra' => 'boolean',
        'pdol_m' => 'boolean', 

        //General Principles for All Groups
        'ethical_justification',
        'scientific_validity',
        'risk_benefit_assessment',
        'cultural_sensitivity',
        'compensation',
        'gpfag_ej' => 'boolean',
        'gpfag_sv' => 'boolean',
        'gpfag_rba' => 'boolean',
        'gpfag_cs' => 'boolean',
        'gpfag_c' => 'boolean', 

        //Process of Participant Recruitment
        'potential_participants',
        'conditions_characteristics',
        'susceptible_to_risks',
        'special_vulnerability',
        'possible_indication',
        'procedure',
        'popr_pp' => 'boolean',
        'popr_cc' => 'boolean',
        'popr_str' => 'boolean',
        'popr_sv' => 'boolean',
        'popr_pi' => 'boolean',
        'popr_p' => 'boolean',

        //Sample size and suitable determination procedure
        'sample_size_1',
        'sample_size_2',
        
        //Site of data collection
        'anonymity_confidentiality',
        'procedures_confidentiality',
        'final_disposition',
        'sodc_ac' => 'boolean',
        'sodc_pc' => 'boolean',
        'sodc_fd' => 'boolean',

        //Last Part
        'thesisadviser',
        'notedby',
        'coordinator', 
    ];

}
