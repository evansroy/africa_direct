<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mail;
use App\Mail\ContactMail;

class Contacts extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'subject', 'message'];

    
}
