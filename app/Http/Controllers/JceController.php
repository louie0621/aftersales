<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Customer;
use App\Models\Dealer;
use App\Models\Equipment;
use App\Models\Jce;
use App\Models\Sysconfig;
use App\Models\Technician;
use App\Models\Typeofissue;
use Illuminate\Http\Request;

class JceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('fas.jce');
    }
    public function contactperson($id)
    {
        //
        $showcustomer = Customer::find($id);
        
        return response()->json(['showcustomer' => $showcustomer]);
    }
    public function vehicletype($type)
    {
        //
        $showmodel = Equipment::where('type', 'LIKE', '%'.$type.'%')
        ->get();
        
        return response()->json(['showmodel' => $showmodel]);
    }
    public function serialno($serial)
    {
        //
        $showserial = Equipment::where('vehiclemodel', 'LIKE', '%'.$serial.'%')
        ->get();
        
        return response()->json(['showserial' => $showserial]);
    }
    public function engineno($engine)
    {
        //
        $showengine = Equipment::where('serialnumber', 'LIKE', '%'.$engine.'%')
        ->get();
        
        return response()->json(['showengineno' => $showengine]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $jobtype = Sysconfig::all();
        $dealer = Dealer::all();
        $components = Component::all();
        $typeofissue = Typeofissue::all();
        $customer = Customer::all();
        $techname = Technician::all();
        $jceno = Jce::all();
        return view('fas.add-jce', ['jobtype' => $jobtype, 'dealer' => $dealer, 'components' => $components, 'typeofissue' => $typeofissue, 'customer' => $customer, 'techname' => $techname, 'jceno' => $jceno]);
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
     * @param  \App\Models\Jce  $jce
     * @return \Illuminate\Http\Response
     */
    public function show(Jce $jce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jce  $jce
     * @return \Illuminate\Http\Response
     */
    public function edit(Jce $jce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jce  $jce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jce $jce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jce  $jce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jce $jce)
    {
        //
    }
}
