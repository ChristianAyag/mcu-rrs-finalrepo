<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2B extends Model
{
    protected $table = 'tbl_form2b';
    protected $primaryKey = 'form2BID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form2BID',
        'protocol',
    ];
}
