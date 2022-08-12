<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customerrequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
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
        $customer = Customer::all();
        return view('fas.customer', ['customers' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fas.add-customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Customerrequest $request)
    {
        //
        $data = $request->validated();

        Customer::create([
            'customercode' => $data['customercode'],
            'customername' => $data['customername'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'tin' => $data['tin'],
            'phone' => $data['phone'],
            'contact' => $data['contact'],
            'email' => $data['email'],
            'channelgroup' => $data['channelgroup'],
            'paymenttermscode' => $data['paymenttermscode'],
            'units' => $data['units'],
            'creditlimit' => $data['creditlimit'],
            'brand' => $data['brand'],
        ]);

        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('/FAS/add-customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer, $id)
    {
        //
        //
        $edit = Customer::find($id);
        $edit->customercode = $request->customercode;
        $edit->customername = $request->customername;
        $edit->address = $request->address;
        $edit->city = $request->city;
        $edit->state = $request->state;
        $edit->tin = $request->tin;
        $edit->phone = $request->phone;
        $edit->contact = $request->contact;
        $edit->email = $request->email;
        $edit->channelgroup = $request->channelgroup;
        $edit->paymenttermscode = $request->paymenttermscode;
        $edit->units = $request->units;
        $edit->creditlimit = $request->creditlimit;
        $edit->brand = $request->brand;
        $edit->save();
        Alert::toast('You\'ve Successfully Update', 'success');

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer, $id)
    {
        //
        //
        Customer::find($id)->delete();

        Alert::toast('You\'ve Successfully Delete', 'info');

        return response()->json();
    }
}
