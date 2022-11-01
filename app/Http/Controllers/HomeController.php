<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Contacts;
use App\Models\Team;




use App\Mail\ContactMail;


class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $team = team::all();
                return view('user.home',compact('team'));
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
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
                //Fetch all the Team members  from the teams Table
            $team = team::all();
            return view ('user.home',compact('team'));
        }

    }

    public function about()
    {
       //Fetch all the Team members  from the teams Table
            $team = team::all();
            return view ('user.about_detail',compact('team'));

        //return view('user.about_detail');
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
          // Form validation
        $this->validate($request, [
            'name' => '',
            'email' => 'email',
            'subject'=>'',
            'message' => ''
         ]);

         $request = $request->all();

        $contact = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],

        ];

        // dd($contact);

        //  Store data in database
        Contacts::create($contact);


        \Mail::to('info@africadirect.net')->send(new ContactMail($contact));

        return redirect()->back()->with('message','Message Sent Successfully!, Getting Back to You Soon');
    }



}
