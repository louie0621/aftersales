<?php

namespace App\Http\Controllers;

use App\Http\Requests\Equipmentrequest;
use App\Models\Equipment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EquipmentController extends Controller
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
        $equipment = Equipment::all();
        return view('fas.equipment', ['equipment' => $equipment]);
    }
    
    // public function display()
    // {
    //     //

    //     $equipment = Equipment::all();
    //     return response()->json(['equipment' => $equipment]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fas.add-equipment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Equipmentrequest $request)
    {
        //

        $data = $request->validated();

        Equipment::create([
            'serialnumber' => $data['serialnumber'],
            'vehiclemodel' => $data['vehiclemodel'],
            'engineno' => $data['engineno'],
            'brand' => $data['brand'],
            'description' => $data['description'],
            'branch' => $data['branch'],
            'warrantystart' => $data['warrantystart'],
            'warrantyend' => $data['warrantyend'],
            'endcustomer' => $data['endcustomer'],
            'registrationnumber' => $data['registrationnumber'],
            'endcustomername' => $data['endcustomername'],
            'endcustomeraddress' => $data['endcustomeraddress'],
            'endcustomercity' => $data['endcustomercity'],
            'endcustomerstate' => $data['endcustomerstate'],
            'endcustomercountry' => $data['endcustomercountry'],
            'navcustomercode' => $data['navcustomercode'],
        ]);

        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('/FAS/add-equipment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment, $id)
    {
        //
        $viewequipment = Equipment::find($id);
        return response()->json(['viewequipment' => $viewequipment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment, $id)
    {
        //
        $equipment = Equipment::find($id);
        return response()->json(['editequipment' => $equipment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment, $id)
    {
        //

        $edit = Equipment::find($id);
        $edit->serialnumber = $request->serialnumber;
        $edit->vehiclemodel = $request->vehiclemodel;
        $edit->description = $request->description;
        $edit->branch = $request->branch;
        $edit->warrantystart = $request->warrantystart;
        $edit->warrantyend = $request->warrantyend;
        $edit->endcustomer = $request->endcustomer;
        $edit->registrationnumber = $request->registrationnumber;
        $edit->endcustomername = $request->endcustomername;
        $edit->endcustomeraddress = $request->endcustomeraddress;
        $edit->endcustomercity = $request->endcustomercity;
        $edit->endcustomerstate = $request->endcustomerstate;
        $edit->endcustomercountry = $request->endcustomercountry;
        $edit->navcustomercode = $request->navcustomercode;
        $edit->save();
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment, $id)
    {
        //
        Equipment::find($id)->delete();

        return response()->json();
    }
}
