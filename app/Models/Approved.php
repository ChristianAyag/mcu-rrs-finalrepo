<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approved extends Model
{
    use HasFactory;

    protected $table = 'tbl_approved';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_ID',
        'Protocol_ID',
        'Decision',
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_ID', 'user_ID');
    }

    public function protocol()
    {
        return $this->belongsTo(Protocol::class, 'Protocol_ID', 'protocol_ID');
    }
}
