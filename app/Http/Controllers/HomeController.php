<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Contacts;
use App\Models\Team;
use App\Models\Quote;

// use Illuminate\Support\Facades\Mail;
use Mail;

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
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);

        $contact = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],

        ];


        //  Store data in database
        Contacts::create($request->all());

        // \Mail::send('user.contact_email',
        //      array(
        //          'name' => $request->get('name'),
        //          'email'  => $request->get('email'),
        //          'subject'  => $request->get('subject'),
        //          'message' => $request->get('message'),
        //      ), function($message) use ($request)
        //        {
        //           $message->from($request->email);
        //           $message->to('evansroysir@gmail.com');
        //        });

        Mail::to('evansroysir@gmail.com')->send(new ContactMail($contact));

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

            $quote = [
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'freightype' => $request['freightype'],
                'city' => $request['city'],
                'inconterms' => $request['inconterms'],
                'weight' => $request['weight'],
                'height' => $request['height'],
                'width' => $request['width'],
                'length' => $request['length'],

            ];
            //  Store data in database
            quotes::create($request->all());

            // dd($quote);

            \Mail::send('user.quote_email',
            array(
                'name' => $request->get('name'),
                'email'  => $request->get('email'),
                'phone'  => $request->get('phone'),
                'freighttype' => $request->get('freighttype'),
                'city' => $request->get('city'),
                'inconterm'  => $request->get('inconterm'),
                'weight'  => $request->get('weight'),
                'height' => $request->get('height'),
                'length'  => $request->get('length'),

            ), function($message) use ($request)
              {
                 $message->from($request->email);
                 $message->to('evansroysir@gmail.com');
              });

        return redirect()->back()->with('message','Message Sent Successfully!, Getting Back to You Soon');
    }


}
