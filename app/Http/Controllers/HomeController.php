<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.home');
    }


    public function profileUpdate()
    {
        return view('auth.profile_update');
    }


    public function profileUpdated(Request $request){



        $profilePic = $request->file('profilePic');
        $imgName = $profilePic->getClientOriginalName();
        $directory = 'profile-pic/';
        $imgeUrl = $directory.$imgName;
        $profilePic->move($directory,$imgName);


        $resume = $request->file('resume');
        $resName = $resume->getClientOriginalName();
        $resdirectory = 'resume/';
        $resumeUrl = $resdirectory.$resName;
        $resume->move($resdirectory,$resName);


        $profile_up = new User();
        $profile_up->skills = $request->skills;
        $profile_up->profilePic = $imgeUrl;
        $profile_up->resume = $resumeUrl;
        $profile_up->save();

        return redirect('/home')->with('message','Profile Updated Successfully');

    }
}
