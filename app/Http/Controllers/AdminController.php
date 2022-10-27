<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Team;


class AdminController extends Controller
{
    //
    public function contactRecieved()
    {
        $data = contacts::all();
        return view('admin.contacts',compact('data'));
    }

    public function addTeamMember()
    {
        return view('admin.team');
    }

    public function createStaff(Request $request)
    {
        $team = new team;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('teamimage',$imagename);
        $team->image=$imagename;

        $team->name=$request->name;
        $team->designation=$request->designation;
        $team->description=$request->description;

        $team->save();

        //$contacts->save();
        return redirect()->back()->with('message','Team Member Successfully Added!');
    }

   
}
