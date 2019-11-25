@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Applicant Dashboard</strong></div>

                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="row">
                    <div class="buttons" style="overflow:hidden;padding: 0; margin:0 auto;width: 35%; background-color: #cce3f6; float:left;text-align: center;padding-top: 20px; ">
                        <a href="{{route('profile.update',['id'=>$category->id])}}"><button type="button" class="btn btn-primary"> Update Profile</button></a>
                    </div>

                    <div class="users" style="overflow:hidden; padding: 0;margin:0 auto;width: 60%; background-color: #4dc0b5;float:left;text-align: center; height: 450px;padding-top: 20px;">
                        <h2>Applicants</h2>
                        <table style="text-align: center; font-size: 20px">
                            <tr>
                                <th width="20%">Sr No.</th>
                                <th width="20%">Name</th>
                            </tr>

                            <tr>
                                <td>1.</td>
                                <td>Anik</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
