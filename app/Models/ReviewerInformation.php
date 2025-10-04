<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewerInformation extends Model
{
    protected $table = 'tbl_reviewer_information';
    protected $primaryKey = 'Reviewer_ID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'Reviewer_ID',
        'user_ID',
        'Reviewer_Dept',
        'Reviewer_Prog',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }
}
