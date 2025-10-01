<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormsTable extends Model
{
    use HasFactory;

    protected $table = 'tbl_forms';
    protected $primaryKey = 'form_id';  // ✅ bigint unsigned
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'form_code',
        'form_name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'tbl_form_user', 'form_id', 'user_ID')
                    ->withTimestamps();
    }

    public function researchFiles()
    {
        return $this->hasMany(ResearchFiles::class, 'form_id', 'form_id');
    }
}
