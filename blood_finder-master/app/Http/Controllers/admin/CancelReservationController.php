<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Reservation;
use App\Location;
use App\BloodType;
use App\User;

class CancelReservationController extends Controller
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
        $cancellations = Reservation::query()
                        ->leftJoin('users', 'users.id', '=', 'reservations.user_id')
                        ->leftJoin('blood_types as bt', 'bt.id', '=', 'reservations.bloodtype_id')
                        ->leftJoin('locations as loc', 'loc.id', '=', 'reservations.location_id')
                        ->get(
                            [
                                'reservations.*',
                                'users.name',
                                'bt.type',
                                'loc.address'
                            ]
                        );
        // dd($cancellations);

        return view('admin.cancelreservation', compact('cancellations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function custom_destroy($id)
    {
        //dd($id);
        if($id) {
            $cancellation = Reservation::where('id', $id)->first();
            $cancellation->delete();

            return redirect()->back();
        }
    }
}
