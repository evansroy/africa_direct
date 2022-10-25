<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Contacts;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('user.home');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about_detail');
    }

    public function services()
    {
        return view('user.service');
    }

    public function contact()
    {
        return view('user.contacts');
    }

    public function quote()
    {
        return view('user.getquote');
    }

    public function sendContact(Request $request)
    {
        $contacts = new contacts;

        $contacts->name = $request->name;
        $contacts->massage = $request->message;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;

        $contacts->save();
        return redirect()->back()->with('message','Message Sent Successfully!, Getting Back to You Soon');
    }
}
