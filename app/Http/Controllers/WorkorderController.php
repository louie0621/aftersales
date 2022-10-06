<?php

namespace App\Http\Controllers;

use App\Http\Requests\Partsandconsumablerequest;
use App\Http\Requests\Technicianactivityrequest;
use App\Models\Customer;
use App\Models\Defectcode;
use App\Models\Equipment;
use App\Models\Failurecode;
use App\Models\Jce;
use App\Models\JceTechnicianentry;
use App\Models\Parts;
use App\Models\Partsandconsumable;
use App\Models\Techactivity;
use App\Models\Technicianactivity;
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
        $woslist = Workorder::all();
        return view('fas.work-order', ['woslist' => $woslist]);
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

    public function storepac(Partsandconsumablerequest $request)
    {
        $part_id = json_decode($request->part_id);
        $quantity = json_decode($request->quantity);
        $total = json_decode($request->total);
        foreach ($part_id as $key => $value) {
            if (in_array($part_id[$key], $part_id)) {
                $pac = new Partsandconsumable();
                $pac->part_id = $part_id[$key];
                $pac->quantity = $quantity[$key];
                $pac->total = $total[$key];
                $pac->pac_no = $request->pac_no;
                $pac->save();
            }
        }
        return response()->json();
    }

    public function storeta(Technicianactivityrequest $request)
    {
        $activity_date = json_decode($request->activity_date);
        $description = json_decode($request->description);
        $start_time = json_decode($request->start_time);
        $end_time = json_decode($request->end_time);
        $man_hour = json_decode($request->man_hour);
        $location_from = json_decode($request->location_from);
        $location_to = json_decode($request->location_to);
        $odo_start = json_decode($request->odo_start);
        $odo_end = json_decode($request->odo_end);
        $km_used = json_decode($request->km_used);

        foreach ($activity_date as $key => $value) {
            if (in_array($activity_date[$key], $activity_date)) {
                $ta = new Technicianactivity();
                $ta->activity_date = $activity_date[$key];
                $ta->description = $description[$key];
                $ta->start_time = $start_time[$key];
                $ta->end_time = $end_time[$key];
                $ta->man_hour = $man_hour[$key];
                $ta->location_from = $location_from[$key];
                $ta->location_to = $location_to[$key];
                $ta->odo_start = $odo_start[$key];
                $ta->odo_end = $odo_end[$key];
                $ta->km_used = $km_used[$key];
                $ta->techact_no = $request->techact_no;
                $ta->save();
            }
        }
        return response()->json();
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
    public function show(Workorder $workorder, $id)
    {
        //
        $viewworkorder = Workorder::find($id);
        $viewjce = Jce::find($viewworkorder->jce_no);
        $viewcustomer = Customer::find($viewjce->customer_id);
        $viewequipment = Equipment::find($viewjce->equipment_id);

        $viewpac = DB::table('workorder_partsandconsumable')
            ->where('pac_no', $viewworkorder->pac_no)
            ->join('config_parts', 'workorder_partsandconsumable.part_id', '=', 'config_parts.id')
            ->get();

        $viewtechact = DB::table('workorder_technicianactivity')
            ->where('techact_no', $viewworkorder->techact_no)
            ->get();

        $viewtech = DB::table('jce_techicianentry')
            ->where('techentry_no', $viewjce->techentry_no)
            ->join('technician', 'jce_techicianentry.tech_id', '=', 'technician.id')
            ->get();

        return response()->json(['viewtech' => $viewtech, 'viewtechact' => $viewtechact, 'viewpac' => $viewpac, 'viewworkorder' => $viewworkorder, 'viewjce' => $viewjce, 'viewcustomer' => $viewcustomer, 'viewequipment' => $viewequipment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function printworkorder(Workorder $workorder, $id)
    {
        //
        //
        $viewworkorder = Workorder::find($id);
        $viewjce = Jce::find($viewworkorder->jce_no);
        $viewcustomer = Customer::find($viewjce->customer_id);
        $viewequipment = Equipment::find($viewjce->equipment_id);
        $viewtechact = Technicianactivity::find($viewworkorder->techact_no);

        $viewtech = DB::table('jce_techicianentry')
            ->where('techentry_no', $viewjce->techentry_no)
            ->join('technician', 'jce_techicianentry.tech_id', '=', 'technician.id')
            ->get();

        return view('fas.printworkorder', ['viewtech' => $viewtech, 'viewtechact' => $viewtechact, 'viewequipment' => $viewequipment, 'viewcustomer' => $viewcustomer, 'viewjce' => $viewjce, 'viewworkorder' => $viewworkorder]);
    }

    public function printservicereport(Workorder $workorder, $id)
    {
        //
        //
        $viewworkorder = Workorder::find($id);
        $viewjce = Jce::find($viewworkorder->jce_no);
        $viewcustomer = Customer::find($viewjce->customer_id);
        $viewequipment = Equipment::find($viewjce->equipment_id);
        $viewtechact = Technicianactivity::find($viewworkorder->techact_no);
        $viewdefectcode = Defectcode::find($viewworkorder->defect_code);
        $viewfailurecode= Failurecode::find($viewworkorder->failure_code);

        $jceview = DB::table('jce')
            ->where('id', $id)
            ->get();

        $jceparts = DB::table('jce_partsentry')
            ->where('parts_no', $viewjce->parts_no)
            ->join('config_parts', 'jce_partsentry.parts_id', '=', 'config_parts.id')
            ->get();

        $viewta = DB::table('workorder_technicianactivity')
            ->where('techact_no', $viewworkorder->techact_no)
            ->get();

        
        return view('fas.printservicereport', ['viewfailurecode'=>$viewfailurecode,'viewdefectcode'=> $viewdefectcode,'viewta'=>$viewta,'viewtechact' => $viewtechact, 'jceparts' => $jceparts, 'jceview' => $jceview, 'viewequipment' => $viewequipment, 'viewcustomer' => $viewcustomer, 'viewjce' => $viewjce, 'viewworkorder' => $viewworkorder]);
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
