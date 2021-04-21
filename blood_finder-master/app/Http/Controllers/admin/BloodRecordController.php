<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BloodType;
use App\Location;
use App\BloodTypeLocation;

class BloodRecordController extends Controller
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
        $bloodtypes = BloodType::all();
        $locations = Location::all();
        // $bloodtype_location = BloodTypeLocation::where('location_id', $location_id)->where('bloodtype_id', $bloodtype_id)->first();
        return view('admin.bloodrecord', compact('bloodtypes', 'locations'));
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
        if($request->quantity != ''){

            $current_value = BloodTypeLocation::where('location_id', $request->location)
                            ->where('bloodtype_id', $request->bloodtype)
                            ->first();   

            if($current_value != '') {                  
                $new_value = $current_value->quantity + $request->quantity;

                BloodTypeLocation::where('location_id', $request->location)
                    ->where('bloodtype_id', $request->bloodtype)
                    ->update(['quantity' => $new_value]);
            } else {
                $add_btl = new BloodTypeLocation;
                
                $add_btl->location_id = $request->location;
                $add_btl->bloodtype_id = $request->bloodtype;
                $add_btl->quantity = $request->quantity;

                $add_btl->save();
            }
            session()->flash('error', $request->quantity . ' pack(s) has been added');
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

    public function live_count($location_id, $bloodtype_id)
    {
        if($location_id && $bloodtype_id){
            $live_count = BloodTypeLocation::where('location_id', $location_id)
                        ->where('bloodtype_id', $bloodtype_id)
                        ->first();
            return json_encode($live_count);
        }
    }

    public function custom_destroy($location_id, $bloodtype_id)
    {
        // dump($location_id);
        // dd($bloodtype_id);

        if($location_id && $bloodtype_id){
            BloodTypeLocation::where('location_id', $location_id)
                ->where('bloodtype_id', $bloodtype_id)
                ->delete();
            return response()->json(['status'=>'Blood Record Deleted']);
        }

    }
}
