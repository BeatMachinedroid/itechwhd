<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    use HasFactory;

    protected $table = 'request_types';

    protected $fillable = [
        'id_request',
        'name',
    ];


    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
