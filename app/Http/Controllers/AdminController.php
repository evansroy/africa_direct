<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class AdminController extends Controller
{
    //
    public function contactRecieved()
    {
        return view('admin.contacts');
    }
}
