<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
            'id_request',
            'id_request_cate',
            'id_request_local',
            'request_detail',
            'subject',
            'petugas_teknisi',
            'devisi',
            'regu',
            'problem',
            'pelapor',
            'location',
            'notes',
            'status',
    ];

    public function requesttypecate()
    {
        return $this->belongsTo(RequestTypeCate::class,'id_request_cate');
    }

    public function requesttype()
    {
        return $this->belongsTo(RequestType::class,'id_request');
    }

    public function requesttypelocal()
    {
        return $this->belongsTo(RequestTypeLocal::class,'id_request_local');
    }
}
