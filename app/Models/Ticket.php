<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
            'category',
            'sub_category',
            'sub_category_type',
            'request_detail',
            'area',
            'subject',
            'petugas_teknisi',
            'devisi',
            'regu',
            'problem',
            'pelapor',
            'location',
            'status',
    ];

    public function requesttype()
    {
        return $this->belongsTo(RequestType::class,'category');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
}
