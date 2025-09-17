<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form3C extends Model
{
    protected $table = 'tbl_form3c';
    protected $primaryKey = 'form3CID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form3CID',
        'protocol',
    ];
}
