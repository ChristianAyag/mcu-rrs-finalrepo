<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocol extends Model
{
    use HasFactory;

    protected $table = 'tbl_protocol';
    protected $primaryKey = 'protocol_ID';
    public $incrementing = false; // since VARCHAR
    protected $keyType = 'string';

    protected $fillable = ['protocol_ID', 'user_ID', 'review_type'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    public function initialReviews()
    {
        return $this->hasMany(InitialReview::class, 'protocol_ID', 'protocol_ID');
    }
    public function researchInformation()
    {
        return $this->hasOne(ResearchInformation::class, 'user_ID', 'user_ID');
    }

    public function form()
    {
        return $this->hasMany(FormsTable::class, 'form_protocol_ID', 'protocol_ID');
    }
    public function evaluatedReviews()
    {
        return $this->hasMany(EvaluatedReviews::class, 'protocol_ID', 'protocol_ID');
    }
}

