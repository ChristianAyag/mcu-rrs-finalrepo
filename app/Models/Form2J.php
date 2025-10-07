<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form2J extends Model
{
    protected $table = 'tbl_form2j';
    protected $primaryKey = 'form2JID';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    protected $fillable = [
        'form2JID',
        'protocol',
    ];
}
