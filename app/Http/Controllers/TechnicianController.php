<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use App\Http\Requests\Technicianrequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TechnicianController extends Controller
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
        $technician = Technician::all();
        return view('fas.technician', ['technician' => $technician]);
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
    public function store(Technicianrequest $request)
    {
        //
        $data = $request->validated();

        Technician::create([
            'name' => $data['name']
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/technician');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function show(Technician $technician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function edit(Technician $technician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technician $technician, $id)
    {
        //
        $edit = Technician::find($id);
        $edit->name = $request->name;
        
        $edit->save();
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technician $technician, $id)
    {
        //
        //
        Technician::find($id)->delete();

        Alert::toast('You\'ve Successfully Delete', 'info');

        return redirect('/FAS/technician');
    }
}
