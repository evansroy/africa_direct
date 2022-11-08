<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $fillable = [
        'company_name',
        'slogan',
        'contacts',
        'address',
        'email',
        'logo'
    ];
}
