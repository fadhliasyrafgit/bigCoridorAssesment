@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        {{-- {{ $companies->Name }} --}}
                        <div class="mb-2">
                            @if (empty($companies->Logo))
                                <img style="height:25px;" src="{{ asset('/storage/logo/defaulticon.png') }}">
                            @else
                                <img style="height:25px;" src="{{ asset('/storage/logo/' . $companies->Logo) }}">
                            @endif

                        </div>
                        <div>
                            Employees
                        </div>
                        <div>
                            Company : {{ $companies->Name }}
                        </div>
                        <div class="text-right">
                            <a href="/newemployee/{{ $companies->ID }}" class="btn btn-primary fa fa-plus"></a>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <th scope="row">
                                            {{ $employee->ID }}
                                        </th>
                                        <th scope="row">
                                            {{ $employee->First_Name }}
                                        </th>
                                        <th scope="row">
                                            {{ $employee->Last_Name }}
                                        </th>
                                        <th scope="row">
                                            {{ $employee->Email }}
                                        </th>
                                        <th scope="row">
                                            {{ $employee->Phone }}
                                        </th>
                                        <th>
                                            {!! Form::open(['method' => 'Delete', 'route' => ['newemployee.destroy', $employee->ID], 'onsubmit' => 'return ConfirmDelete()']) !!}
                                            <button type="submit" class="btn btn-danger fa fa-close" ></button>
                                            {!! Form::close() !!}
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <span class="text-right">
                                    
                            {{ $employees->links() }}
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
