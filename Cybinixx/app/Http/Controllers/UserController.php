<?php

namespace App\Http\Controllers;

use App\Models\GetInTouch;
use App\Models\NewsLetter;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $team = OurTeam::where('status', '1')->get();
        return view('front.index', compact('team'));
    }
    public function getintouch(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:35',
            'email' => 'required|max:250',
            'message' => 'required|max:250',
        ]);

        $get = new GetInTouch();
        $get->name = $request->name;
        $get->email = $request->email;
        $get->message = $request->message;
        $get->save();
        return redirect()->route('index')->with('success','Message Send Successfully!');
    }
    public function newsletter(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|max:250',
        ]);

        $get = new NewsLetter();
        $get->email = $request->email;
        $get->save();
        return redirect()->route('index')->with('success','Email Added Successfully!');
    }

}
