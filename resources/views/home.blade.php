@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>
                    {{--TODO - Below link accesses Laralum... remove link if broken site--}}
                    <a href="{{route('laralum::dashboard')}}">Go to Admin Panel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
