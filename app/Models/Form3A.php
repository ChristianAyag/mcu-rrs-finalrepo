<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form3A extends Model
{
    protected $table = 'tbl_form3a';
    protected $primaryKey = 'form3AID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form3AID',
        'protocol',
    ];
}
