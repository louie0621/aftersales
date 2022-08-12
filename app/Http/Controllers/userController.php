<?php

namespace App\Http\Controllers;

use App\Http\Requests\Adduserrequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    //
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
        $user = User::all();
        return view('fas.user', ['users' => $user]);
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
    public function store(Adduserrequest $request)
    {
        //
        //
        $data = $request->validated();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'usertype' => $data['usertype'],
            'password' => Hash::make($data['password']),
        ]);
        
        Alert::toast('You\'ve Successfully Added', 'success');

        return redirect('FAS/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        //
        $edit = User::find($user_id);
        $edit->name = $request->name;
        $edit->email = $request->email;
        $edit->username = $request->username;
        $edit->usertype = $request->usertype;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return response()->json();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        //
        User::find($user_id)->delete();

        Alert::toast('You\'ve Successfully Delete', 'success');

        return redirect('/FAS/user');
    }
}
