<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
            'category',
            'area',
            'sub_category',
            'sub_category_type',
            'request_detail',
            'subject',
            'petugas_teknisi',
            'devisi',
            'regu',
            'problem',
            'pelapor',
            'location',
            'status',
            'device',
            'image',
    ];

    // public $timestamps = false;

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($ticket){
    //         $ticket->created_at = Carbon::now();
    //         $ticket->updated_at = Carbon::now();
    //     });

    //     static::updating(function ($ticket)
    //     {
    //         $ticket->update_at = Carbon::now();
    //     });
    // }

    public function requesttype()
    {
        return $this->belongsTo(RequestType::class,'category');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function textnotes()
    {
        return $this->hasMany(TextNotes::class);
    }

}
