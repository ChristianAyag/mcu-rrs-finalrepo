<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchFiles extends Model
{
    protected $table = 'tbl_research_files';

    public $timestamps = true;
    protected $fillable = [
        'user_ID',
        'form_id',
        'file_name',
        'file_path',
        'submitted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    public function form()
    {
        return $this->belongsTo(FormsTable::class, 'form_id', 'form_id');
    }
}
