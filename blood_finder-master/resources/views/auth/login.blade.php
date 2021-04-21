@extends('layouts.main')

@section('content')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <div class="logo-admin">
            <a href="{{ url('/admin') }}"><img src="{{ asset(config('app.asset').'images/logo.png' ) }}"></a>
        </div>

        @if (Session::has('error'))
            <div class="alert alert-warning text-center" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf 
            
            <div>
                <input type="text" name="email" class="textfield-admin" placeholder="Email">    
            </div>
            <div>
                <input type="password" name="password" class="textfield-admin" placeholder="Password">
            </div>
        
            <div class="text-center">
                <button type="submit" class="btn-admin">LOGIN</button>
                <span class="btn-admin-a">
                    <a href="{{ url('/register') }}">REGISTER</a>
                </span>
            </div>

        </form>
    </div>

@endsection
