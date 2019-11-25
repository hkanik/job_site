<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:company');
    }

    public function index(){
        return view('company.job_post');
    }

    public function addJobPost(Request $request){
        $job = new JobPost();
        $job->job_title = $request->job_title;
        $job->job_description = $request->job_description;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->country = $request->country;

        $job->save();



        $categoryImage = $request->file('category_image');
        $imgName = $categoryImage->getClientOriginalName();
        $directory = 'category-image/';
        $imgeUrl = $directory.$imgName;
        $categoryImage->move($directory,$imgName);

        return redirect('/company/home')->with('message','Job Posted Successfully');
    }


}
