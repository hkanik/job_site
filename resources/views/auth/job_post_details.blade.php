@extends('company.include.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Job Details</div>

                    <div class="card-body">
                            @foreach($job_post as $value)
                                <p style="color: #ae1c17;"><strong>Jobb Title:</strong> </p><h2>{{$value->job_title}}</h2>
                            <p style="color: #ae1c17;"><strong>Jobb Description: </strong></p><h6>{{$value->job_description}}</h6>
                            <p style="color: #ae1c17;"><strong>Salary: </strong></p><h6>{{$value->salary}}</h6>
                            <p style="color: #ae1c17;"><strong>Location: </strong></p><h6>{{$value->location}}</h6>
                            <p style="color: #ae1c17;"><strong>Country: </strong></p><h6>{{$value->country}}</h6>

                            <form action="{{route('apply')}}">
                                @csrf
                                <input type="hidden" name="applicant_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="job_post_id" value="{{$value->id}}">
                                <button type="submit" class="btn btn-success">Apply</button>
                            </form>

                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
