<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Jce;
use App\Models\User;
use App\Models\Workorder;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jcecount = Jce::all()->count();
        $workordercount = Workorder::all()->count();
        $equipmentcount = Equipment::all()->count();
        $usercount = User::all()->count();

        return view('fas.dashboard', ['usercount'=>$usercount,'equipmentcount'=>$equipmentcount,'workordercount'=>$workordercount,'jcecount'=>$jcecount]);
    }
}
