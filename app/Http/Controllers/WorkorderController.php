<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Equipment;
use App\Models\Jce;
use App\Models\JceTechnicianentry;
use App\Models\Workorder;
use App\Models\Workorderstatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkorderController extends Controller
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
        return view('fas.work-order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jceno = Jce::all();
        $jcewos = Workorderstatus::all();
        return view('fas.add-workorder',['jceno' => $jceno, 'jcewos' => $jcewos]);
    }
    public function workorderjceno($id)
    {
        //
        $jceno = Jce::find($id);
        $viewcustomer = Customer::find($jceno->customer_id);
        $viewequipment = Equipment::find($jceno->equipment_id);
        $viewtech = DB::table('jce_techicianentry')
            ->where('techentry_no', $jceno->techentry_no)
            ->join('technician', 'jce_techicianentry.tech_id', '=', 'technician.id')
            ->get();

        return response()->json(['viewtech'=>$viewtech,'jceno'=>$jceno, 'viewcustomer'=>$viewcustomer,'viewequipment'=> $viewequipment]);
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
     * @param  \App\Models\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function show(Workorder $workorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Workorder $workorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workorder $workorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workorder $workorder)
    {
        //
    }
}
