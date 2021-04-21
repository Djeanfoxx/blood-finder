@extends('layouts.main')

@section('content')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <div class="logo-admin">
            <img src="{{ asset(config('app.asset').'images/logo.png' ) }}">
        </div>

        @if (Session::has('error'))
            <div class="alert alert-warning text-center" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf 
            
            <div>
                <input type="text" name="email" class="textfield-admin" placeholder="Email">    
            </div>
            <div>
                <input type="password" name="password" class="textfield-admin" placeholder="Password">
            </div>
        
            <div class="text-center">
                <button type="submit" class="btn-admin">LOGIN AS ADMIN</button>
            </div>

        </form>
    </div>

@endsection
