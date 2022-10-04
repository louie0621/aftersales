<?php

namespace App\Http\Controllers;

use App\Models\Sysconfig;
use Illuminate\Http\Request;
use App\Http\Requests\Jobtyperequest;
use App\Models\Dealer;
use App\Http\Requests\Dealerrequest;
use App\Models\Component;
use App\Http\Requests\Componentrequest;
use App\Http\Requests\Defectcoderequest;
use App\Http\Requests\Failurecoderequest;
use App\Http\Requests\Laborcostrequest;
use App\Http\Requests\Partsrequest;
use App\Http\Requests\Techactivityrequest;
use App\Models\Typeofissue;
use App\Http\Requests\Typeofissuerequest;
use App\Http\Requests\Workorderstatusrequest;
use App\Models\Defectcode;
use App\Models\Failurecode;
use App\Models\JceTechnicianentry;
use App\Models\Laborcost;
use App\Models\Parts;
use App\Models\Techactivity;
use App\Models\Workorderstatus;
use RealRashid\SweetAlert\Facades\Alert;

class SysconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $jobtype = Sysconfig::all();
        return view('fas.configjobtype', ['jobtype' => $jobtype]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storejt(Jobtyperequest $request)
    {
        //
        $data = $request->validated();

        Sysconfig::create([
            'jobtype' => $data['jobtype']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/job-type');
    }

    public function updatejt(Jobtyperequest $request, $id)
    {
        //
        $edit = Sysconfig::find($id);
        $edit->jobtype = $request->jobtype;
        $edit->save();
        return response()->json();
    }

    public function destroyjt($id)
    {
        //
        Sysconfig::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Dealer

    public function indexdealer()
    {
        //
        $dealer= Dealer::all();
        return view('fas.configdealer', ['dealer' => $dealer]);
    }

    public function storedealer(Dealerrequest $request)
    {
        //
        $data = $request->validated();

        Dealer::create([
            'dealer' => $data['dealer']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/dealer');
    }

    public function updatedealer(Dealerrequest $request,$id)
    {
        //
        $edit = Dealer::find($id);
        $edit->dealer = $request->dealer;
        $edit->save();
        return response()->json();
    }

    public function destroydealer($id)
    {
        //
        Dealer::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Component

    public function indexcomponent()
    {
        //
        $component= Component::all();
        return view('fas.configcomponent', ['component' => $component]);
    }

    public function storecomponent(Componentrequest $request)
    {
        //
        $data = $request->validated();

        Component::create([
            'component' => $data['component']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/component');
    }

    public function updatecomponent(Componentrequest $request,$id)
    {
        //
        $edit = Component::find($id);
        $edit->component = $request->component;
        $edit->save();
        return response()->json();
    }

    public function destroycomponent($id)
    {
        //
        Component::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Type of issue

    public function indextypeofissue()
    {
        //
        $typeofissue= Typeofissue::all();
        return view('fas.configtypeofissue', ['typeofissue' => $typeofissue]);
    }

    public function storetypeofissue(Typeofissuerequest $request)
    {
        //
        $data = $request->validated();

        Typeofissue::create([
            'typeofissue' => $data['typeofissue']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/type-of-issue');
    }

    public function updatetypeofissue(Typeofissuerequest $request,$id)
    {
        //
        $edit = Typeofissue::find($id);
        $edit->typeofissue = $request->typeofissue;
        $edit->save();
        return response()->json();
    }

    public function destroytypeofissue($id)
    {
        //
        Typeofissue::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Labor Cost

    public function indexlaborcost()
    {
        //
        $laborcost= Laborcost::all();
        return view('fas.configlaborcost', ['laborcost' => $laborcost]);
    }

    public function storelaborcost(Laborcostrequest $request)
    {
        //
        $data = $request->validated();

        Laborcost::create([
            'description' => $data['description'],
            'rate' => $data['rate']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/labor-cost');
    }

    public function updatelaborcost(Laborcostrequest $request,$id)
    {
        //
        $edit = Laborcost::find($id);
        $edit->description = $request->description;
        $edit->rate = $request->rate;
        $edit->save();
        return response()->json();
    }

    public function destroylaborcost($id)
    {
        //
        Laborcost::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Parts

    public function indexparts()
    {
        //
        $parts= Parts::all();
        return view('fas.configparts', ['parts' => $parts]);
    }

    public function storeparts(Partsrequest $request)
    {
        //
        $data = $request->validated();

        Parts::create([
            'part_number' => $data['part_number'],
            'description' => $data['description'],
            'item_category_code' => $data['item_category_code'],
            'uom' => $data['uom'],
            'srp' => $data['srp']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/parts');
    }

    public function updateparts(Request $request,$id)
    {
        //
        $edit = Parts::find($id);
        $edit->part_number = $request->part_number;
        $edit->description = $request->description;
        $edit->item_category_code = $request->item_category_code;
        $edit->uom = $request->uom;
        $edit->srp = $request->srp;
        $edit->status = $request->status;
        $edit->save();
        return response()->json();
    }

    public function destroyparts($id)
    {
        //
        Parts::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Work order status

    public function indexwos()
    {
        //
        $wos= Workorderstatus::all();
        return view('fas.configworkorderstatus', ['wos' => $wos]);
    }

    public function storewos(Workorderstatusrequest $request)
    {
        //
        $data = $request->validated();

        Workorderstatus::create([
            'workorderstatus' => $data['workorderstatus']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/work-order-status');
    }

    public function updatewos(Workorderstatusrequest $request,$id)
    {
        //
        $edit = Workorderstatus::find($id);
        $edit->workorderstatus = $request->workorderstatus;
        $edit->save();
        return response()->json();
    }

    public function destroywos($id)
    {
        //
        Workorderstatus::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return redirect('/FAS/work-order-status');
    }

    //Defect Code

    public function indexdc()
    {
        //
        $dc= Defectcode::all();
        return view('fas.configdefectcode', ['dc' => $dc]);
    }

    public function storedc(Defectcoderequest $request)
    {
        //
        $data = $request->validated();

        Defectcode::create([
            'defect_code' => $data['defect_code']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/defect-code');
    }

    public function updatedc(Defectcoderequest $request,$id)
    {
        //
        $edit = Defectcode::find($id);
        $edit->defect_code = $request->defect_code;
        $edit->save();
        return response()->json();
    }

    public function destroydc($id)
    {
        //
        Defectcode::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Failure Code

    public function indexfc()
    {
        //
        $fc= Failurecode::all();
        return view('fas.configfailurecode', ['fc' => $fc]);
    }

    public function storefc(Failurecoderequest $request)
    {
        //
        $data = $request->validated();

        Failurecode::create([
            'failure_code' => $data['failure_code']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/failure-code');
    }

    public function updatefc(Failurecoderequest $request,$id)
    {
        //
        $edit = Failurecode::find($id);
        $edit->failure_code = $request->failure_code;
        $edit->save();
        return response()->json();
    }

    public function destroyfc($id)
    {
        //
        Failurecode::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }

    //Technician Activity Description

    public function indexta()
    {
        //
        $ta= Techactivity::all();
        return view('fas.configtechnicianactivity', ['ta' => $ta]);
    }

    public function storeta(Techactivityrequest $request)
    {
        //
        $data = $request->validated();

        Techactivity::create([
            'tech_activity' => $data['tech_activity']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/technician-activity');
    }

    public function updateta(Techactivityrequest $request,$id)
    {
        //
        $edit = Techactivity::find($id);
        $edit->tech_activity = $request->tech_activity;
        $edit->save();
        return response()->json();
    }

    public function destroyta($id)
    {
        //
        Techactivity::find($id)->delete();

        Alert::toast('You\'ve Successfully delete', 'info');
        
        return response()->json();
    }
}
