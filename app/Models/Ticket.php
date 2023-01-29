<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
            'request_type',
            'request_detail',
            'subject',
            'petugas_teknisi',
            'devisi',
            'regu',
            'problem',
            'pelapor',
            'image',
            'location',
            'notes',
            'status',
    ];
}
