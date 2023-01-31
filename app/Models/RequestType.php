<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    use HasFactory;

    protected $table = 'request_types';

    protected $fillable = [
        'name',
    ];

    public function requesttypecate()
    {
        return $this->hasMany(RequestTypeCate::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
