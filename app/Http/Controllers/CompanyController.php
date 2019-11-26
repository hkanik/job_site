<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $applied = AppliedJob::where('status',1)->get('applicant_id');

        foreach ($applied as $item) {
            $applicant = $item->applicant_id;
        }
        $applicant = User::where('id',$applicant)->get();
        return view('company.home',[
            'applied' => $applied,
            'applicant' => $applicant
        ]);
    }
}
