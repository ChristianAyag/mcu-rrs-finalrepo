<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form3E extends Model
{
    protected $table = 'tbl_form3e';
    protected $primaryKey = 'form3EID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form3EID',
        'protocol',
    ];
}
