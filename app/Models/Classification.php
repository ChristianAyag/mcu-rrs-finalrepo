<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Make sure this points to your PI/User model

class Classification extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'tbl_classification_review';
    protected $primaryKey = 'classifyID';
    public $timestamps = true;

    // Fillable fields
    protected $fillable = [
        'user_ID',
        'reviewClassification',
        'classificationDate',
        'classificationStatus'
    ];

    // Timestamps

    /**
     * Relationship to PI/User
     */
    protected $casts = [
        'classificationDate' => 'datetime',
    ];
    public function user()
    {
        // Assuming tbl_users has user_ID as primary key
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }
}
