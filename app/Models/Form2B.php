<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2B extends Model
{
    protected $table = 'tbl_form2b';
    protected $primaryKey = 'form2BID';
    public $incrementing = false;   // custom string IDs
    protected $keyType = 'string';

    protected $fillable = [
        'form2BID',
        'user_ID',
        'protocol',
        'pi_name',
        'pi_contact',
        'pi_email',
        'investigator_type',
        'college_institution',
        'submitted_by',
        'study_type',
        'study_type_text',
        'protocol_description',
        'start_date',
        'end_date',
        'settings_site',
        'study_participants',
        'funds',
        'funds_details',
        'tech_review',
        'erb_submit',
        'information_confidentiality',
        'participants_vulnerability',
        'study_risks',
        'study_benefits',
        'patient_related',
        'informed_consent_process',
        'community_considerations',
        'dissemination',
        'collaborative_terms',
        'special_population',
        'special_population_others',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    public function researchInfo()
    {
    return $this->hasOne(ResearchInformation::class, 'user_ID', 'user_ID');
    }
}
