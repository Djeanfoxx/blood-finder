@extends('layouts.main')

@section('content')
 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           
        <div class="text-center">
            <h2>Admin Controls</h2>
        </div>

        <div class="text-center">
            <!-- <a href="{{ url('/admin/cancelreservation') }}" class="btn btn-red btn-width-100p btn-margin-tb-15">CANCEL RESERVATIONS</a> -->
            <a href="{{ url('/admin/cancelreservation') }}" class="btn btn-red btn-width-100p btn-margin-tb-15">MANAGE RESERVATIONS</a>
        </div>

        <div class="text-center">
            <a href="{{ url('/admin/register') }}" class="btn btn-red btn-width-100p btn-margin-tb-15">ADD ADMIN ACCOUNT</a>
        </div>

        <div class="text-center">
            <a href="{{ url('/admin/bloodrecord') }}" class="btn btn-red btn-width-100p btn-margin-tb-15">UPDATE BLOOD RECORDS</a>
        </div>

        <!-- <div class="text-center">
            <a href="{{ url('/admin/location') }}" class="btn btn-red btn-width-100p btn-margin-tb-15">ADD LOCATION</a>
        </div> -->

        <div class="text-center">
            <a href="{{ route('logout') }}" class="btn btn-grey btn-min-width-150 btn-margin-tb-15" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('LOG OUT') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </div>

@endsection
