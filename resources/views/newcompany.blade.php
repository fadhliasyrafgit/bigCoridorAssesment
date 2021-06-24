@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Company</div>

                <div class="card-body">
                    <form method="POST" action="/newcompany" enctype="multipart/form-data">
                        @csrf


                        
                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="Name" 
                                type="text" 
                                class="form-control 
                                @error('Name') is-invalid @enderror" 
                                name="Name" 
                                value="{{ old('Name') }}" required 
                                autocomplete="Name" 
                                autofocus>

                                @error('Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="Email" type="email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}" autocomplete="Email" autofocus>

                                @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Logo" class="col-md-4 col-form-label text-md-right">Logo</label>

                            <div class="col-md-6">
                                <input id="Logo" type="file" class="form-control-file @error('Logo') is-invalid @enderror" name="Logo" value="{{ old('Logo') }}" autocomplete="Logo" autofocus>

                                @error('Logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Website_URL" class="col-md-4 col-form-label text-md-right">Website URL</label>

                            <div class="col-md-6">
                                <input id="Website_URL" type="text" class="form-control @error('Website_URL') is-invalid @enderror" name="Website_URL" value="{{ old('Website_URL') }}" autocomplete="Website_URL" autofocus>

                                @error('Website_URL')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
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
