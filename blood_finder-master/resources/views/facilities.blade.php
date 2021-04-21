@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <h2 class="text-center">{{ __('RED CROSS FACILITIES') }}</h2>

                <h5 class="text-center">Blood Type: {{ $blood_type }}</h5>

                <br>
                <br>

                <div class="card-body">
                    @if(count($bloodtypes) <= 0)
                        <h5 class="text-center">No stock at all facilities</h5>
                    @else
                        @foreach($bloodtypes as $bloodtype)
                            <div class="form-group row text-center">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <a href="{{ url('reservation/' . $bloodtype->location_id . '/' . $bloodtype->bloodtype_id ) }}" class="btn btn-grey btn-fw">{{ $bloodtype->address }}</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
