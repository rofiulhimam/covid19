<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pasien;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function semua()
    {
        return view('pasien.semua.index');
    }

    public function odp()
    {
    	return view('pasien.odp.index');
    }

    public function pdp()
    {
    	return view('pasien.pdp.index');
    }

    public function positif()
    {
    	return view('pasien.positif.index');
    }

    public function meninggal()
    {
    	return view('pasien.meninggal.index');
    }

    public function sembuh()
    {
    	return view('pasien.sembuh.index');
    }


    public function PasienCrud(Request $request){
        if ($request->isMethod('post')) {
            switch ($request->metode) {
                case 'tambah':
                    return pasien::tambah($request);    
                    break;
                case 'edit':
                    return pasien::rubah($request);
                    break;
            }
        }
        else if ($request->isMethod('delete')) {
            return pasien::hapus($request);
        }
    }

    public function PasienStatus(Request $request)
    {
        return pasien::updateStatus($request);
    }
}
