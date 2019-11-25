@extends('auth.include.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Company Dashboard</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.updated') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="skills" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input type="file" name="profilePic" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Resume') }}</label>

                                <div class="col-md-6">
                                    <input type="file" name="resume" required>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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
