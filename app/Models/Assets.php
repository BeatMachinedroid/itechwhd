<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial',
        'type',
        'model',
        'location',
        'status',
        'area',
        'file',
        'jumlah',
    ];
}
