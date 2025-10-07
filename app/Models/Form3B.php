<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form3B extends Model
{
    protected $table = 'tbl_form3b';
    protected $primaryKey = 'form3BID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form3BID',
        'protocol',
    ];
}
