<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Defectcode;
use App\Models\Equipment;
use App\Models\Failurecode;
use App\Models\Jce;
use App\Models\JceTechnicianentry;
use App\Models\Parts;
use App\Models\Techactivity;
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
    public function workorderno()
    {
        $wos = Workorder::all();

        return response()->json(['wos' => $wos]);
    }
    public function create()
    {
        //
        $jceno = Jce::all();
        $jcewos = Workorderstatus::all();
        $dc = Defectcode::all();
        $fc = Failurecode::all();
        $parts = Parts::all();
        $techactivity = Techactivity::all();
        return view('fas.add-workorder', ['techactivity' => $techactivity, 'parts' => $parts, 'fc' => $fc, 'dc' => $dc, 'jceno' => $jceno, 'jcewos' => $jcewos]);
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
        return response()->json(['viewtech' => $viewtech, 'jceno' => $jceno, 'viewcustomer' => $viewcustomer, 'viewequipment' => $viewequipment]);
    }

    public function workorderpartscode($id)
    {
        //
        $parts = Parts::find($id);

        return response()->json(['parts' => $parts]);
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
        $wo = new Workorder();
        $wo->workorder_date = $request->workorder_date;
        $wo->jce_no = $request->jce_no;
        $wo->workorder_no = $request->workorder_no;
        $wo->workorder_status = $request->workorder_status;
        $wo->job_summary = $request->job_summary;
        $wo->repairstart = $request->repairstart;
        $wo->repairend = $request->repairend;
        $wo->service_report = $request->service_report;
        $wo->smr = $request->smr;
        $wo->machine_status = $request->machine_status;
        $wo->servicemodel = $request->servicemodel;
        $wo->arrived_datetime = $request->arrived_datetime;
        $wo->plateno = $request->plateno;
        $wo->remarks = $request->remarks;
        $wo->special_instruction = $request->special_instruction;
        $wo->customer_name = $request->customer_name;
        $wo->defect_code = $request->defect_code;
        $wo->failure_code = $request->failure_code;
        $wo->customer_request = $request->customer_request;
        $wo->cause = $request->cause;
        $wo->service_repair = $request->service_repair;
        $wo->recommendation = $request->recommendation;
        $wo->pac_no = $request->pac_no;
        $wo->pac_total = $request->pac_total;
        $wo->techact_no = $request->techact_no;
        $wo->save();

        return response()->json();
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
