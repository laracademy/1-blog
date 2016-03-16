@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                Login
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            @include('layouts.partials.messages')

            <form method="POST" action="{{ URL::route('auth.login.post') }}" autocomplete="off">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Login">
                </div>
            </form>
        </div>
    </div>
@stop