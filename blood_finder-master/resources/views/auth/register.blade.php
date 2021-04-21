@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="text-center">
                    <h2 class="card-header">{{ __('Register') }}</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror textfield-admin" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

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
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror textfield-admin" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

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
                                <input id="address" type="address" class=" @error('address') is-invalid @enderror textfield-admin" name="address" required autocomplete="address" placeholder="Address">

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
                                <input id="contact_number" type="contact_number" class=" @error('contact_number') is-invalid @enderror textfield-admin" name="contact_number" required autocomplete="contact_number" placeholder="Contact Number">

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
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror textfield-admin" name="password" required autocomplete="new-password" placeholder="Password">

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
                                <input id="password-confirm" type="password" class=" textfield-admin" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <!-- <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label> -->

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="radio" class="btn-radio" name="user_type" id="" value="1"><span class="btn-radio-label">{{ __('Individual') }}</span>
                                <input type="radio" class="btn-radio" name="user_type" id="" value="2"><span class="btn-radio-label">{{ __('Hospital') }}</span>
                            </div>

                        </div>

                        <div class="form-group row text-center">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn-admin">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

