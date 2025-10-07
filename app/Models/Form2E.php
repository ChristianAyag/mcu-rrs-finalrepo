<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2E extends Model
{
    protected $table = 'tbl_form2e';
    protected $primaryKey = 'form2EID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form2EID',
        'protocol',
    ];
}
