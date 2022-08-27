<?php

namespace App\Http\Controllers;

use App\Http\Requests\Jcerequest;
use App\Http\Requests\JceTechnicianentryrequest;
use App\Models\Component;
use App\Models\Customer;
use App\Models\Dealer;
use App\Models\Equipment;
use App\Models\Jce;
use App\Models\Sysconfig;
use App\Models\Technician;
use App\Models\Typeofissue;
use App\Models\Laborcost;
use App\Models\Parts;
use App\Models\JceTechnicianentry;
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
        $showmodel = Equipment::where('type', 'LIKE', '%' . $type . '%')
            ->get();

        return response()->json(['showmodel' => $showmodel]);
    }
    public function serialno($serial)
    {
        //
        $showserial = Equipment::where('vehiclemodel', 'LIKE', '%' . $serial . '%')
            ->get();

        return response()->json(['showserial' => $showserial]);
    }
    public function engineno($engine)
    {
        //
        $showengine = Equipment::where('serialnumber', 'LIKE', '%' . $engine . '%')
            ->get();

        return response()->json(['showengineno' => $showengine]);
    }
    public function selectlaborcost($id)
    {
        //
        $showdescription = Laborcost::find($id);

        return response()->json(['showdescription' => $showdescription]);
    }
    public function selectpartno($id)
    {
        //
        $showdescription = Parts::find($id);

        return response()->json(['showpartsdescription' => $showdescription]);
    }
    public function jcenumber()
    {
        //
        $jcenumber = Jce::all();

        return response()->json(['jcenumber' => $jcenumber]);
    }
    public function jcequeue()
    {
        //
        $jcequeue = Jce::all();

        return response()->json(['jcequeue' => $jcequeue]);
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
        $laborcost = Laborcost::all();
        $parts = Parts::all();
        return view('fas.add-jce', ['jobtype' => $jobtype, 'dealer' => $dealer, 'components' => $components, 'typeofissue' => $typeofissue, 'customer' => $customer, 'techname' => $techname, 'laborcost' => $laborcost, 'parts' => $parts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storejcetechname(JceTechnicianentryrequest $request)
    {

        
        Laborcost::create([
            'techentry_no' => $request->techentry_no,
            'tech_id' => $request->tech_id
        ]);
        
        return response()->json(['success' => 'Ajax request submitted successfully']);
    }

    public function store(Jcerequest $request)
    {
        //

        $jce = new Jce();
        $jce->incidentdatetime = $request->incidentdatetime;
        $jce->jce_number = $request->jce_number;
        $jce->customer_id = $request->customer_id;
        $jce->contact_no = $request->contact_no;
        $jce->equipment_id = $request->equipment_id;
        $jce->dispatch_date = $request->dispatch_date;
        $jce->work_area = $request->work_area;
        $jce->labor_amt = $request->labor_amt;
        $jce->srt_amt = $request->srt_amt;
        $jce->parts_amt = $request->parts_amt;
        $jce->job_type = $request->job_type;
        $jce->dealer = $request->dealer;
        $jce->job_site = $request->job_site;
        $jce->salestype = $request->salestype;
        $jce->complaint_request = $request->complaint_request;
        $jce->component = $request->component;
        $jce->typeofissue = $request->typeofissue;
        $jce->promised_datetime = $request->promised_datetime;
        $jce->resolved = $request->resolved;
        $jce->paymentterms = $request->paymentterms;
        $jce->modeofpayment = $request->modeofpayment;
        $jce->po_number = $request->po_number;
        $jce->engine_hours = $request->engine_hours;
        $jce->travel_days = $request->travel_days;
        $jce->techentry_no = $request->techentry_no;
        $jce->jce_type = $request->jce_type;
        $jce->charge_to = $request->charge_to;
        $jce->jcetypeparts = $request->jcetypeparts;
        $jce->chargetoparts = $request->chargetoparts;
        $jce->srtcode_no = $request->srtcode_no;
        $jce->srtcode_total = $request->srtcode_total;
        $jce->laborcost_no = $request->laborcost_no;
        $jce->laborcost_total = $request->laborcost_total;
        $jce->parts_no = $request->parts_no;
        $jce->parts_total = $request->parts_total;
        $jce->freight_cost = $request->freight_cost;
        $jce->amount_due = $request->amount_due;
        $jce->remarks = $request->remarks;
        $jce->validity_date = $request->validity_date;
        $jce->save();

        return response()->json(['success' => 'Ajax request submitted successfully']);
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
