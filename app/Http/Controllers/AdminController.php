<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Partners;
use App\Models\Team;


class AdminController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                $team = team::all();
                return view('admin.index',compact('team'));
            }
            else
            {
                return view('user.index');
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
            return redirect('index');
        }
        else
        {
                //Fetch all the Team members  from the teams Table
            $team = team::all();
            return view ('admin.index',compact('team'));
        }

    }

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

    public function delete($id)
    {
        $data = contacts::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function partner()
    {
        return view('admin.partners');
    }

    public function addPartner(Request $request)
    {
        $partner = new Partners();

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('parnerslogo',$imagename);
        $partner->logo=$imagename;

        $partner->name=$request->name;
        $partner->contacts=$request->contacts;
        $partner->email=$request->email;

        $partner->save();

        return redirect()->back()->with('message','Partner Successfully Added!');
    }

}
