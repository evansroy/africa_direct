<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'email',
        'contact',
        'freightype',
        'cityofdeparture',
        'incoterm',
        'weight',
        'height',
        'width',
        'length'
    ];
}
