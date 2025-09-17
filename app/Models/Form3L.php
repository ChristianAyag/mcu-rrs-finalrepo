<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form3L extends Model
{
    protected $table = 'tbl_form3l';
    protected $primaryKey = 'form3LID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form3LID',
        'protocol',
    ];
}
