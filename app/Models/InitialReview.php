<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitialReview extends Model
{
    use HasFactory;

    protected $table = 'tbl_initial_review';
    protected $fillable = [
        'protocol_ID', 'user_ID', 'reviewer1_ID', 'reviewer2_ID', 'form_ID'
    ];

    public function protocol()
    {
        return $this->belongsTo(Protocol::class, 'protocol_ID', 'protocol_ID');
    }

    public function pi()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    public function reviewer1()
    {
        return $this->belongsTo(User::class, 'reviewer1_ID', 'user_ID');
    }

    public function reviewer2()
    {
        return $this->belongsTo(User::class, 'reviewer2_ID', 'user_ID');
    }

    public function form()
    {
        return $this->belongsTo(FormsTable::class, 'form_ID', 'form_id');
    }
}
