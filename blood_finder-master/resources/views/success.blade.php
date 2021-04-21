@extends('layouts.main')

@section('content')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="reservation-icon">
            <i class="fa fa-check-circle"></i>
        </div>

        <div class="text-center">
            <h3>Reservation is Successful!</h3>
        </div>

        <br>

        <div class="text-center">
            <h5>You will receive reservation code via SMS.</h5>
        </div>

        <br>

        <div class="text-center">
            <a href="{{ url('/home') }}" class="btn btn-red btn-min-width-150">OK</a>
        </div>

    </div>

@endsection
