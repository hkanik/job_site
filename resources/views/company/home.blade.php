@extends('company.include.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Company Dashboard</strong></div>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="row">
                    <div class="buttons" style="overflow:hidden;padding: 0; margin:0 auto;width: 35%; background-color: #cce3f6; float:left;text-align: center;padding-top: 20px; ">
                        <a href="{{route('job.post')}}"><button type="button" class="btn btn-primary"> POST A JOB</button></a>
                    </div>

                    <div class="users" style="overflow:hidden; padding: 0;margin:0 auto;width: 60%; background-color: #4dc0b5;float:left;text-align: center; height: 450px;padding-top: 20px;">
                        <h2>Applicants</h2>
                        <table style="text-align: center; font-size: 20px; width: 100%;color: white">
                            <tr style="color: black">
                                <th width="40%">Sr No.</th>
                                <th width="60%">Name</th>
                            </tr>

                            @php($i=1)
                            @foreach($applicant as $value)
                            <tr>
                                <td>{{$i++}}.</td>
                                <td>{{$value->firstName.' '.$value->lastName}}</td>
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
