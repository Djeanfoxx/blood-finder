@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="text-center">
                <h5>What are you looking for?</h5>
            
                <h2>Blood Types</h2>

                
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/A+') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">A POSITIVE</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/A-') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">A NEGATIVE</a>
                        </div>
                    </div>
                
                
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/B+') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">B POSITIVE</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/B-') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">B NEGATIVE</a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/AB+') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">AB POSITIVE</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/AB-') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">AB NEGATIVE</a>
                        </div>
                    </div>
                
                
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/O+') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">O POSITIVE</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('blood-type/O-') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">O NEGATIVE</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a href="{{ url('/user/profile/' .  Auth::user()->id) }}" class="btn btn-grey btn-min-width-150 btn-margin-tb-15">ACCOUNT SETTINGS</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
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

            </div>
        </div>
    </div>
</div>
@endsection
