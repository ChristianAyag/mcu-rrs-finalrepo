<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchInformation extends Model
{
    use HasFactory;

    protected $table = 'tbl_research_information';

    protected $primaryKey = 'research_info_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'research_info_ID',
        'user_ID',
        'research_title',
        'research_CoInvestigator',
        'research_college',
        'research_school',
        'research_department',
        'research_Endorsement',
        'research_checkmcu',
    ];

    // Relationship: each research info belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }
}