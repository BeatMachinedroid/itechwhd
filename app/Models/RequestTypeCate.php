<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestType;


class RequestTypeCate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

    ];

    public function requesttype()
    {
        return $this->belongsTo(RequestType::class,'id_request');
    }

    public function requesttypelocal()
    {
        return $this->hasMany(RequestTypeLocal::class);
    }

}
