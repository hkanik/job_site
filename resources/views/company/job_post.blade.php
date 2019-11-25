@extends('company.include.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Company Dashboard</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('add.job.post') }}">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="job_title" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>

                                <div class="col-md-6">
                                    <textarea name="job_description"  cols="44" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="salary" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="location" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="country" required>
                                </div>
                            </div>
                            
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Post') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
