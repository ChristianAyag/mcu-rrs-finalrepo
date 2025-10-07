<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form5E extends Model
{
    protected $table = 'tbl_form5e';
    protected $primaryKey = 'form5EID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form5EID',
        'protocol',
    ];
}
