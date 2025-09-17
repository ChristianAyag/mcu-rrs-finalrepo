<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form3D extends Model
{
    protected $table = 'tbl_form3d';
    protected $primaryKey = 'form3DID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form3DID',
        'protocol',
    ];
}
