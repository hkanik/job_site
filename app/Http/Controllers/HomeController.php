<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\JobPost;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


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
        $job_post = JobPost::get();
        return view('auth.home',[
            'job_post' => $job_post
        ]);
    }

    public function jobPostDetails($id)
    {
        $job_post = JobPost::where('id',$id)->get();
        return view('auth.job_post_details',[
            'job_post' => $job_post
        ]);
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

        $id = $request->uid;
        $profile_up = User::find($id);
        $profile_up->skills = $request->skills;
        $profile_up->profilePic = $imgeUrl;
        $profile_up->resume = $resumeUrl;
        $profile_up->save();

        return redirect('/home')->with('message','Profile Updated Successfully');

    }

    public function apply(Request $request){
        if(Auth::user()->resume != null) {


            $apply = new AppliedJob();
            $apply->applicant_id = $request->applicant_id;
            $apply->job_post_id = $request->job_post_id;
            $apply->status = 1;
            $apply->save();

            return redirect('/home')->with('message', 'Job Applied Successfully');
        }else{
            return redirect('/home')->with('message1', 'Your Resume Is Not Uploaded Yet....!!!');
        }
    }
}
