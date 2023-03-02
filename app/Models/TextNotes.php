<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextNotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket',
        'notes',
        'users',
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
