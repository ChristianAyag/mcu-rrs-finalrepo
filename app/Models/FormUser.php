<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class FormUser extends Model
{
    use HasFactory;

    protected $table = 'tbl_form_user';   // ✅ pivot table name
    protected $primaryKey = 'id';         // ✅ from $table->id()
    public $incrementing = true;          // ✅ auto-increment
    protected $keyType = 'int';

    public $timestamps = false;  
    protected $fillable = [
        'user_ID',
        'form_id',
    ];

    // Relationships back to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    // Relationships back to Form
    public function form()
    {
        return $this->belongsTo(FormsTable::class, 'form_id', 'form_id');
    }
}
