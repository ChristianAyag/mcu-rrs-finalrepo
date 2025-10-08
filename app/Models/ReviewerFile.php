<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewerFile extends Model
{
    use HasFactory;

    protected $table = 'tbl_reviewer_files';

    protected $fillable = [
        'form_id',
        'protocol_ID',
        'reviewer_ID',
        'file_name',
        'file_path',
    ];

    public function form()
    {
        return $this->belongsTo(FormsTable::class, 'form_id', 'form_id');
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_ID', 'user_ID');
    }

    public function protocol()
    {
        return $this->belongsTo(Protocol::class, 'protocol_ID', 'protocol_ID');
    }
}
