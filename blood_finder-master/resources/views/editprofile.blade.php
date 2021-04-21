@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <h2 class="text-center">{{ __('EDIT PROFILE') }}</h2>

                @if (Session::has('error'))
                    <div class="alert alert-warning text-center" role="alert">
                        {{ Session::get('error') }}
                    </div> 
                @endif


                <div class="card-body">
                    
                    <form action="{{ url('/user/profile/' . Auth::user()->id . '/update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Full Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address" placeholder="Address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="contact_number" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="contact_number" type="contact_number" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ $user->contact_number }}" required autocomplete="contact_number" placeholder="Contact Number">

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>


                        <div class="form-group row text-center">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <button type="submit" class="btn btn-red btn-min-width-150 btn-margin-tb-15">
                                    {{ __('CHANGE') }}
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <a href="{{ url('/home') }}" class="btn btn-red btn-min-width-150 btn-margin-tb-15">
                                    {{ __('BACK') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
