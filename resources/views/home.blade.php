@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        {{-- {{ $companies->Name }} --}}
                        <div>Companies</div>
                        <div class="text-right">
                            <a href="/newcompany" class="btn btn-primary fa fa-plus"></a>
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Website URL</th>
                                    <th scope="col">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <th scope="row">
                                            {{ $company->ID }}
                                        </th>
                                        <th scope="row">
                                            <a target="_blank"
                                                href="/employees/{{ $company->ID }}">{{ $company->Name }}</a>
                                        </th>
                                        <th scope="row">
                                            {{ $company->Email }}
                                        </th>
                                        <th scope="row">
                                            @if (empty($company->Logo))
                                                <img style="height:25px;"
                                                    src="{{ asset('/storage/logo/defaulticon.png') }}">
                                            @else
                                                <img style="height:25px;"
                                                    src="{{ asset('/storage/logo/' . $company->Logo) }}">
                                            @endif
                                        </th>
                                        <th scope="row">
                                            {{ $company->Website_URL }}
                                        </th>
                                        <th>
                                            {!! Form::open(['method' => 'Delete', 'route' => ['newcompany.destroy', $company->ID], 'onsubmit' => 'return ConfirmDelete()']) !!}
                                            <button type="submit" class="btn btn-danger fa fa-close" ></button>
                                            {!! Form::close() !!}
                                        </th>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        
                        <span class="text-right">
                                    
                            {{ $companies->links() }}
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
