<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pasien;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
    	$data['odp'] = \App\pasien::where('status', 1)->get();
    	$data['odpcount'] = $data['odp']->count();
    	$data['pdp'] = \App\pasien::where('status', 2)->get();
    	$data['pdpcount'] = $data['pdp']->count();
    	$data['positif'] = \App\pasien::where('status', 3)->get();
    	$data['positifcount'] = $data['positif']->count();
    	$data['sembuh'] = \App\pasien::where('status', 4)->get();
    	$data['sembuhcount'] = $data['sembuh']->count();
    	$data['meninggal'] = \App\pasien::where('status', 5)->get();
    	$data['meninggalcount'] = $data['meninggal']->count();
    	return view('dashboard.index', $data);
    }
}
