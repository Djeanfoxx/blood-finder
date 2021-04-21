@extends('layouts.main')

@section('content')


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <div class="text-center">
            <h2>Cancel Reservation</h2>
        </div>

        @foreach($cancellations as $cancellation)
            <div class="row row-divider">
                <div class="col-xs-9 col-sm-10 col-md-10 col-lg-11">
                    <div class="">Name: <strong>{{ $cancellation->name }}</strong></div>
                    <div class="">Blood Type: <strong>{{ $cancellation->type }}</strong> &nbsp;&nbsp; - &nbsp;&nbsp; Quantity: <strong>{{ $cancellation->quantity }}</strong></div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-2 col-lg-1">
                    <a href="{{ url('/admin/cancellation/' . $cancellation->id) }}" class="btn btn-grey">
                        Cancel
                    </a>
                </div> 
            </div>
        @endforeach

        <br>

        <div class="text-center">
            <a href="{{ url('/admin/home') }}" class="btn btn-red btn-min-width-150">BACK</a>
        </div>

    </div>
   

@endsection
