<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2D extends Model
{
    protected $table = 'tbl_form2d';
    protected $primaryKey = 'form2DID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form2DID',
        'protocol',
    ];
}
