@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="{{ url('/reservation/confirm_reservation') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="bloodtype_id" value="{{ $bloodtype->id }}">
                <input type="hidden" name="location_id" value="{{ $location->id }}">

                <div class="card">
                    <h2 class="text-center">{{ __('RESERVATION PAGE') }}</h2>

                    @if (Session::has('error'))
                        <div class="alert alert-warning text-center" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <h3>Blood Type: {{ $bloodtype->type }}</h3>

                    <br>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <span class="facility">Red Cross Facility:</span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <span class="">{{ $location->address }}</span>
                        </div>
                    </div>
                    
                    <br>

                    <div class="row">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-6">
                            <h3 class="quantity">Quantity</h3>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-6">
                            <input type="number" class="form-control" name="reserved_quantity" id="reserved_quantity" placeholder="{{ $bloodtype_location->quantity }} Pack(s) Remaining" min="0" max="{{ $bloodtype_location->quantity }}">
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="form-group row text-center">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn-red btn-fw">RESERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>    
    </div>
</div>
@endsection

@section('js')
    <script>
        document.getElementById('reserved_quantity').onkeypress =
        function (e) {
            var ev = e || window.event;
            if(ev.charCode < 48 || ev.charCode > 57) {
                return false; // not a digit
            } else if(this.value * 10 + ev.charCode - 48 > this.max) {
                return false;
            } else {
                return true;
            }
        }
    </script>
@endsection
