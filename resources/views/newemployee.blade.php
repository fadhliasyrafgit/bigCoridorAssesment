@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Employee for {{ $companies->Name }}</div>

                <div class="card-body">
                    <form method="POST" action="/newemployee">
                        @csrf


                        
                        <div class="form-group row">
                            <label for="First_Name" class="col-md-4 col-form-label text-md-right">{{ __('First_Name') }}</label>

                            <div class="col-md-6">
                                <input id="First_Name" 
                                type="text" 
                                class="form-control 
                                @error('First_Name') is-invalid @enderror" 
                                name="First_Name" 
                                value="{{ old('First_Name') }}" required 
                                autocomplete="First_Name" 
                                autofocus>

                                @error('First_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Last_Name" class="col-md-4 col-form-label text-md-right">{{ __('Last_Name') }}</label>

                            <div class="col-md-6">
                                <input id="Last_Name" 
                                type="text" 
                                class="form-control 
                                @error('Last_Name') is-invalid @enderror" 
                                name="Last_Name" 
                                value="{{ old('Last_Name') }}" required 
                                autocomplete="Last_Name" 
                                autofocus>

                                @error('Last_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <input id="Company" type="hidden" name="Company" value="{{ $companies->ID }}">

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
                            <label for="Phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="Phone" type="text" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" autocomplete="Phone" autofocus>

                                @error('Phone')
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
