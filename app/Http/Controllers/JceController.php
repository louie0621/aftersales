<?php

namespace App\Http\Controllers;

use App\Http\Requests\Jcerequest;
use App\Http\Requests\JceTechnicianentryrequest;
use App\Http\Requests\JceSrtcodeentryrequest;
use App\Http\Requests\JceLaborcostentryrequest;
use App\Http\Requests\JcePartsentryrequest;
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
use App\Models\JceSrtcodeentry;
use App\Models\JceLaborcostentry;
use App\Models\JcePartsentry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $showjce = DB::table('jce')
            ->join('customers', 'jce.customer_id', '=', 'customers.id') // joining the contacts table , where user_id and contact_user_id are same
            ->select('jce.*', 'customers.customername', 'customers.contact')
            ->get();
        $parts = Parts::all();
        $jobtype = Sysconfig::all();
        $components = Component::all();
        $typeofissue = Typeofissue::all();
        $dealer = Dealer::all();
        return view('fas.jce', ['dealer'=>$dealer,'typeofissue'=>$typeofissue,'components'=>$components,'jobtype'=>$jobtype,'jcedata' => $showjce, 'parts' => $parts]);
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
        $techid = json_decode($request->tech_id);
        $techentry = $request->techentry_no;
        foreach ($techid as $key => $value) {
            if (in_array($techid[$key], $techid)) {
                $jcetech = new JceTechnicianentry;
                $jcetech->tech_id = $techid[$key];
                $jcetech->techentry_no = $techentry;
                $jcetech->save();
            }
        }
        return response()->json();
    }

    public function storejcesrtcodeentry(JceSrtcodeentryrequest $request)
    {
        $srt_code = json_decode($request->srt_code);
        $description = json_decode($request->description);
        $working_unit = json_decode($request->working_unit);
        foreach ($srt_code as $key => $value) {
            if (in_array($srt_code[$key], $srt_code)) {
                $jcesrtcode = new JceSrtcodeentry;
                $jcesrtcode->srt_code = $srt_code[$key];
                $jcesrtcode->description = $description[$key];
                $jcesrtcode->working_unit = $working_unit[$key];
                $jcesrtcode->srtcode_no = $request->srtcode_no;
                $jcesrtcode->save();
            }
        }
        return response()->json();
    }

    public function storejcelaborcostentry(JceLaborcostentryrequest $request)
    {
        $laborcost_id = json_decode($request->laborcost_id);
        $quantity = json_decode($request->quantity);
        $amount = json_decode($request->amount);
        foreach ($laborcost_id as $key => $value) {
            if (in_array($laborcost_id[$key], $laborcost_id)) {
                $jcelaborcost = new JceLaborcostentry;
                $jcelaborcost->laborcost_id = $laborcost_id[$key];
                $jcelaborcost->quantity = $quantity[$key];
                $jcelaborcost->amount = $amount[$key];
                $jcelaborcost->laborcost_no = $request->laborcost_no;
                $jcelaborcost->save();
            }
        }
        return response()->json();
    }

    public function storejcepartsentry(JcePartsentryrequest $request)
    {
        $parts_id = json_decode($request->parts_id);
        $quantity = json_decode($request->quantity);
        $disc_percent = json_decode($request->disc_percent);
        $disc_amt = json_decode($request->disc_amt);
        $total_amt = json_decode($request->total_amt);
        foreach ($parts_id as $key => $value) {
            if (in_array($parts_id[$key], $parts_id)) {
                $jceparts = new JcePartsentry;
                $jceparts->parts_id = $parts_id[$key];
                $jceparts->quantity = $quantity[$key];
                $jceparts->disc_percent = $disc_percent[$key];
                $jceparts->disc_amt = $disc_amt[$key];
                $jceparts->total_amt = $total_amt[$key];
                $jceparts->parts_no = $request->parts_no;
                $jceparts->save();
            }
        }
        return response()->json();
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

        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jce  $jce
     * @return \Illuminate\Http\Response
     */
    public function show(Jce $jce, $id)
    {
        //
        $viewjce = Jce::find($id);
        $viewcustomer = Customer::find($viewjce->customer_id);
        $viewequipment = Equipment::find($viewjce->equipment_id);

        $viewtech = DB::table('jce_techicianentry')
            ->where('techentry_no', $viewjce->techentry_no)
            ->join('technician', 'jce_techicianentry.tech_id', '=', 'technician.id')
            ->get();

        $viewjcenumber = DB::table('jce_srtcodeentry')
            ->where('srtcode_no', $viewjce->srtcode_no)
            ->get();

        $viewlaborcost = DB::table('jce_laborcostentry')
            ->where('laborcost_no', $viewjce->laborcost_no)
            ->join('config_laborcost', 'jce_laborcostentry.laborcost_id', '=', 'config_laborcost.id')
            ->get();

        $viewparts = DB::table('jce_partsentry')
            ->where('parts_no', $viewjce->parts_no)
            ->join('config_parts', 'jce_partsentry.parts_id', '=', 'config_parts.id')
            ->get();

        $customer = Customer::all();        
        return response()->json(['customer'=> $customer,'viewparts' => $viewparts, 'viewlaborcost' => $viewlaborcost, 'viewjcenumber' => $viewjcenumber, 'viewtech' => $viewtech, 'viewjce' => $viewjce, 'viewcustomer' => $viewcustomer, 'viewequipment' => $viewequipment, 'viewtech' => $viewtech]);
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
