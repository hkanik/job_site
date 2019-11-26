@extends('auth.include.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Applicant Dashboard</strong></div>

                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <h3 class="text-center text-danger">{{Session::get('message1')}}</h3>
                <div class="row">
                    <div class="buttons" style="overflow:hidden;padding: 0; margin:0 auto;width: 35%; background-color: #4dc0b5; float:left;text-align: center;padding-top: 20px; ">
                        <a href="{{route('profile.update')}}"><button type="button" class="btn btn-dark"> Update Profile</button></a>
                    </div>

                    <div class="users" style="overflow:hidden; padding: 0;margin:0 auto;width: 60%; background-color:#cce3f6 ;float:left;text-align: center; height: 450px;padding-top: 20px;">
                        <h2><strong>Jobs</strong></h2>
                        <table style="text-align: center; font-size: 20px; width: 100%">
                            <tr>
                                <th width="10%">Sr No.</th>
                                <th width="50%">Job Title</th>
                                <th width="20%">Action</th>
                            </tr>

                            @php($i=1)
                            @foreach($job_post as $value)
                            <tr>
                                <td>{{$i++}}.</td>
                                <td><a href="{{route('jobPostDetails',['id'=>$value->id])}}" style="color: black;">{{$value->job_title}}</a></td>
                                <td>
                                    <form action="{{route('apply')}}">
                                        @csrf
                                        <input type="hidden" name="applicant_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="job_post_id" value="{{$value->id}}">
                                        <button type="submit" class="btn btn-success">Apply</button>
                                    </form>
                                </td>
                            </tr>

                                @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
