<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Company;
use App\Models\GetInTouch;
use App\Models\NewsLetter;
use App\Models\OurTeam;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->count();
        return view('admin.index', compact('users'));
    }
    public function register()
    {
        return view('admin.auth.register');
    }
    public function signin()
    {
        return view('admin.auth.signin');
    }
    public function users()
    {
        $user = OurTeam::get();
        return view('admin.team.users', compact('user'));
    }
    public function activeteam()
    {
        $user = OurTeam::where('status', '1')->get();
        return view('admin.team.users', compact('user'));
    }
    public function blockedteam()
    {
        $user = OurTeam::where('status', '0')->get();
        return view('admin.team.users', compact('user'));
    }
    public function messages()
    {
        $message = GetInTouch::get();
        return view('admin.getintouch', compact('message'));
    }
    public function NewsLetter()
    {
        $message = NewsLetter::get();
        return view('admin.NewsLetter', compact('message'));
    }

    public function teammember()
    {
        return view('admin.team.storeteam');
    }
    public function savemember(Request $request)
    {
        $request->validate([
            'name' => 'required|max:35',
            'designation' => 'required|max:250',
            'Image' => 'mimes:jpeg,jpg,png,gif|required|max:3072',

        ]);

        $user = new OurTeam();
        if ($request->hasfile('Image')) {
            $imageName = time() . '.' . $request->Image->extension();
            $user->Image = $imageName;
            $request->Image->move(public_path('images'), $imageName);
        }
        $user->name = $request->name;
        $user->designation = $request->designation;
        $user->save();
        return redirect()->back()->with('success', 'Team Member Added Successfully!');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/admin/login');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:35',
            'email' => 'required|unique:admins|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->back()->with('message', 'Account Created Successfully!');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with('error', 'Email or Password is Invalid!');
    }
    public function status0(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = OurTeam::find($update_id);
            $userr->status = 0;
            $userr->save();
            return redirect()->back()->with('message', 'Status Updated Successfully!');
        }
    }
    public function status1(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = OurTeam::find($update_id);
            $userr->status = 1;
            $userr->save();
            return redirect()->back()->with('message', 'Status Updated Successfully!');
        }
    }
    public function profile0(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = User::find($update_id);
            $userr->response = 0;
            $userr->save();
            return redirect()->back()->with('message', 'Status Updated Successfully!');
        }
    }
    public function profile1(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = User::find($update_id);
            $userr->response = 1;
            $userr->save();
            return redirect()->back()->with('message', 'Status Updated Successfully!');
        }
    }
    public function delete($id)
    {
        $company = OurTeam::find($id);
        $company->delete();
        return redirect()->back()->with('success', 'Member Deleted Successfully!');
    }
}
