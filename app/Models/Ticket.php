<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tbl_tickets_table';
    protected $primaryKey = 'Ticket_ID';

    protected $fillable = [
        'User_ID',
        'Ticket_Subject',
        'User_Concern',
        'Ticket_Description',
    ];
}

