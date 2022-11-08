<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

use Illuminate\Support\Facades\Auth;


use App\Mail\QuoteMail;

class QuoteController extends Controller
{
    //
    public function sendQuote(Request $request)
    {

        $this->validate($request, [
            'name' => '',
            'email' => 'email',
            'contact'=>'',
            'freightype' => '',
            'cityofdeparture' => '',
            'incoterms'=>'',
            'weight' => '',
            'height' => '',
            'width' => '',
            'length' => '',

        ]);

        $request = $request->all();


            $quote = [
                'name' => $request['name'],
                'email' => $request['email'],
                'contact' => $request['contact'],
                'freightype' => $request['freightype'],
                'cityofdeparture' => $request['cityofdeparture'],
                'incoterm' => $request['incoterm'],
                'weight' => $request['weight'],
                'height' => $request['height'],
                'width' => $request['width'],
                'length' => $request['length'],

            ];
            //dd($quote);
            //  Store data in database
             Quote::create($request);



            \Mail::to('info@africadirect.net')->send(new QuoteMail($request));

            // info@africadirect.net
        return redirect()->back()->with('message','Your Qoute Request has been Recieved!, Getting Back to You Soon');
    }

    public function viewQuote()
    {
        $data = Quote::all();

        return view('admin.view_quote',compact('data'));
    }

}
