@extends('layouts.main')

@section('content')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="logo-admin">
            <img src="bloodfindr-logo.jpg" style="width:100%;">
        </div>

        <form action="">
            <div>
                <input type="text" name="email" class="textfield-admin" placeholder="Email">    
            </div>
            <div>
                <input type="text" name="password" class="textfield-admin" placeholder="Password">
            </div>
        </form>

        <div class="btn-admin">
            <button type="button" class="btn">LOGIN</button>
        </div>
        <div class="btn-admin">
            <button type="button" class="btn">REGISTER</button>
        </div>
        
    </div>  

@endsection