@extends('layouts.main')

@section('content')

    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="text-center">
            <h2>Update Blood</h2>
        </div>

        @if (Session::has('error'))
            <div class="alert alert-warning text-center" role="alert">
                {{ Session::get('error') }}
            </div> 
        @endif

            <!-- option alert from js -->
            <div class="alert alert-warning text-center" id="js-alert" style="display:none"></div>



        <form action="{{ url('/admin/bloodrecord/add') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-6">
                    <h3>Blood Type</h3>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-6">
                    <select name="bloodtype" id="bloodtype" onchange="update_quantity()" class="blood-type-selector">
                        @foreach($bloodtypes as $bloodtype)
                            <option value="{{ $bloodtype->id }}">{{ $bloodtype->type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <h3 class="facility">Red Cross Branch</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 update-blood-record-select">
                    <select name="location" id="location" onchange="update_quantity()"> 
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->address }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-6">
                    <h3 class="quantity">Quantity</h3>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-6">
                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Qty. Packs">
                </div>
            </div>

            <div class="text-center">
                <span>
                    <button type="submit" class="btn btn-red btn-min-width-150">ADD </button>
                    <a href="#" onclick="delete_bloodrecord()" class="btn btn-red btn-min-width-150">DELETE</a>
                </span>
            </div>

        </form>

    </div>


@endsection

@section('js')
    <script>
        function update_quantity() {
            var bloodtype = document.getElementById('bloodtype').value;
            var location = document.getElementById('location').value;
            // console.log(location);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'get',
                url: "{{ url('/admin/live/quantity/') }}" + "/" + location + "/" + bloodtype,
                dataType:'json',
                // data: { // no longer needed because the location and bloodtype is already passed at the URL.. kih na?
                //     'location_id': location,
                //     'bloodtype_id': bloodtype
                // },
                success: function(data) {
                    
                    // console.log(data);

                    if(data) {
                        // $('#quantity').val(data.quantity);
                        $('#quantity').attr('placeholder', data.quantity + ' pack(s) remaining');
                    } else if (data == null) {
                        $('#quantity').attr('placeholder', 'No record found');
                    } else {
                        // $('#quantity').val('0');
                        $('#quantity').attr('placeholder', '0 pack remaining');
                    }
                }
            });
        }



        function delete_bloodrecord() {
            // get current selected value to delete
            var sel_bloodtype = document.getElementById('bloodtype');
            var sel_location = document.getElementById('location');

            var sel_bt = sel_bloodtype.options[sel_bloodtype.selectedIndex].value;
            var sel_loc = sel_location.options[sel_location.selectedIndex].value;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'get',
                url: "{{ url('/admin/bloodrecord/delete/') }}" + "/" + sel_loc + "/" + sel_bt,
                dataType:'json',
                // data: { // no longer needed because the location and bloodtype is already passed at the URL.. kih na?
                //     'location_id': location,
                //     'bloodtype_id': bloodtype
                // },
                success: function(data) {
                    // console.log(data);
                    var messages = $('#js-alert');

                    var successHtml = data.status;

                    document.getElementById("js-alert").style.display = "block";
                    
                    $(messages).html(successHtml);

                    //location.reload(true);

                    setTimeout("location.reload(true);",2000);

                }
            });
        }
        

    </script>
@endsection