<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTypeLocal extends Model
{
    use HasFactory;

    protected $table = 'request_type_locals';

    protected $fillable = [
        'name',
    ];

    public function requesttypecate()
    {
        return $this->belongsTo(RequestTypeCate::class,'id_request_cate');
    }



    // public function RequestTypeLocal()
    // {
    //     return $this->hasMany(RequestTypeLocal::class);
    // }
}
