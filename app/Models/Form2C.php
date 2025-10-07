<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2C extends Model
{
    protected $table = 'tbl_form2c';
    protected $primaryKey = 'form2CID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form2CID',
        'protocol',
    ];
}
