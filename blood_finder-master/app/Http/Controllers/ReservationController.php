<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

use App\Location;
use App\BloodType;
use App\BloodTypeLocation;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($location_id, $bloodtype_id)
    {
        // dd($location_id, $bloodtype_id);
        if($location_id && $bloodtype_id){
            $location = Location::where('id', $location_id)->first();
            $bloodtype = BloodType::where('id', $bloodtype_id)->first();
            $bloodtype_location = BloodTypeLocation::where('location_id', $location_id)->where('bloodtype_id', $bloodtype_id)->first();
            // dd($bloodtype_location);
            return view('reservationpage', compact('location', 'bloodtype', 'bloodtype_location'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Auth::user()->id);
        $reserve = new Reservation;

        if($request && $request->reserved_quantity != 0) {
            $reserve->user_id = Auth::user()->id;
            $reserve->bloodtype_id = $request->bloodtype_id;
            $reserve->location_id = $request->location_id;
            $reserve->quantity = $request->reserved_quantity;


            // we must reduce the quanity reserved to the blood_type_locations table
            $remaining_quantity = BloodTypeLocation::where('location_id', $request->location_id)
                                ->where('bloodtype_id', $request->bloodtype_id)
                                ->first();
            
            // dd($remaining_quantity->quantity);

            if($remaining_quantity->quantity >= $request->reserved_quantity) {
                if($reserve->save()) {
                    // reduce the quantity
                    $updated_quantity = $remaining_quantity->quantity - $request->reserved_quantity;
                    
                    // update the blood_type_location table
                    $remaining_quantity->quantity = $updated_quantity;
                    $remaining_quantity->update();

                    // return success
                    return view('success');
                }
            } else {
                session()->flash('error', 'Insufficient: ' . $remaining_quantity->quantity . ' pack(s) remaining');
                return redirect()->back();    
            }
        } else {
            session()->flash('error', 'Quantity must not be empty or 0 (zero)');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
