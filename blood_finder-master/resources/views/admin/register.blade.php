@extends('layouts.main')

@section('content')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="text-center">
            <h2>Add Admin</h2>
        </div>

        @if (Session::has('error'))
            <div class="alert alert-warning text-center" role="alert">
                {{ Session::get('error') }}
            </div> 
        @endif

        <form action="{{ url('/admin/confirm_registration') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div>
                <input type="text" name="name" value="{{ old('name') }}" class="textfield-admin" placeholder="Full Name">    
            </div>

            <div>
                <input type="text" name="email" value="{{ old('email') }}"class="textfield-admin" placeholder="Email">
            </div>

            <!-- <div>
                <input type="text" name="redcrossbranch" class="textfield-admin" placeholder="Red Cros Branch">
            </div> -->

            <div class="text-center add-admin-select-address">
                <select name="address" id="address">
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->address }}</option>
                    @endforeach
                </select>
            </div>


            <div>
                <input type="text" name="contact_number" value="{{ old('contact_number') }}"class="textfield-admin" placeholder="Contact Number">
            </div>
            
            <div>
                <input type="password" name="password" class="textfield-admin" placeholder="Password">
            </div>

            <div>
                <input type="password" name="password_confirmation" class="textfield-admin" placeholder="Confirm Password">
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-red btn-min-width-150">ADD ADMIN</button>
            </div>

        </form>

        

    </div>

@endsection
