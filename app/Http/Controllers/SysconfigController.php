<?php

namespace App\Http\Controllers;

use App\Models\Sysconfig;
use Illuminate\Http\Request;
use App\Http\Requests\Jobtyperequest;
use App\Models\Dealer;
use App\Http\Requests\Dealerrequest;
use App\Models\Component;
use App\Http\Requests\Componentrequest;
use App\Http\Requests\Laborcostrequest;
use App\Http\Requests\Partsrequest;
use App\Models\Typeofissue;
use App\Http\Requests\Typeofissuerequest;
use App\Models\Laborcost;
use App\Models\Parts;
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
            'stocks' => $data['stocks'],
            'price' => $data['price']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/parts');
    }

    public function updateparts(Partsrequest $request,$id)
    {
        //
        $edit = Parts::find($id);
        $edit->part_number = $request->part_number;
        $edit->description = $request->description;
        $edit->stocks = $request->stocks;
        $edit->price = $request->price;
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
}
