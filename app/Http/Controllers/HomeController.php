<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Contacts;
use App\Models\Team;

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
          // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);
        //  Store data in database
        Contacts::create($request->all());

        return redirect()->back()->with('message','Message Sent Successfully!, Getting Back to You Soon');
    }

    public function sendQuote(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'freighttype' => 'required',
            'city' => 'required|email',
            'inconterms'=>'required',
            'weight' => 'required',
            'height' => 'required',
            'width' => 'required',
            'length' => 'required'         ]);
        //  Store data in database
       quotes::create($request->all());

        //$contacts->save();
        return redirect()->back()->with('message','Message Sent Successfully!, Getting Back to You Soon');
    }

}
