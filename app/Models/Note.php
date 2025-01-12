<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket',
        'users',
        'tgl_done',
        'jam',
        'sampai_lokasi',
        'tingkat_kondisi',
        'tingkat_gangguan',
        'lama_penanganan',
        'perangkat',
        'deskripsi',
        'perbaikan',
        'penyebab',
        'solusi',
    ];

    public function tickets()
    {
        return $this->belongsTo(Ticket::class,'ticket');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users');
    }

}
