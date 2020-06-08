<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class pasien extends Model
{
    protected $table = 'pasiens';

    public static function tambah($request)
    {
    	DB::beginTransaction();
        try {
            $db = new pasien();
			$db->nik =  $request->nik;
			$db->nama =  $request->nama;
			$db->umur =  $request->umur;
			$db->jenis_kelamin =  $request->jenis_kelamin;
			$db->alamat =  $request->alamat;
			$db->status= $request->status;
			switch ($request->status) {
				case 1: 
				$db->odp_date = Carbon::now();
				break;
				case 2: 
				$db->pdp_date = Carbon::now();
				break;
				case 3: 
				$db->positif_date = Carbon::now();
				break;
				case 4: 
				$db->sembuh_date = Carbon::now();
				break;
				case 5:
				$db->meninggal_date = Carbon::now();				 
				break;
			}
			$db->save();
	    	DB::commit();
			$responseData = 'Data berhasil disimpan';
			return response()->json(['message'=> $responseData, 'data' => $responseData], 201);
        } catch (\Exception $ex) {
            DB::rollback();
            $responseData = $ex->getMessage();
			return response()->json(['message'=> 'failed', 'data' => $responseData], 400);
        }
    }

	public static function rubah($request)
    {
    	DB::beginTransaction();
        try {
            $db = pasien::find($request->id);
			$db->nik =  $request->nik;
			$db->nama =  $request->nama;
			$db->umur =  $request->umur;
			$db->jenis_kelamin =  $request->jenis_kelamin;
			$db->alamat =  $request->alamat;
			$db->save();
            DB::commit();
			$responseData = 'Data berhasil dirubah';
	    	return response()->json(['message'=> $responseData, 'data' => $responseData], 201);
        } catch (\Exception $ex) {
            DB::rollback();
            $responseData = $ex->getMessage();
			return response()->json(['message'=> 'failed', 'data' => $responseData], 400);
        }
    }

    public static function hapus($request)
    {
    	DB::beginTransaction();
        try {
            $db = pasien::find($request->id);
			$db->delete();
            DB::commit();
			$responseData = 'Data berhasil dihapus';
	    	return response()->json(['message'=> $responseData, 'data' => $responseData], 201);
        } catch (\Exception $ex) {
            DB::rollback();
            $responseData = $ex->getMessage();
	    	return response()->json(['message'=> 'failed', 'data' => $responseData], 400);
        }
    }

    public static function updateStatus($request)
    {
    	DB::beginTransaction();
        try {
            $db = pasien::find($request->id);
			$db->status= $request->status;
			switch ($request->status) {
				case 1: 
				$db->odp_date = Carbon::now();
				break;
				case 2: 
				$db->pdp_date = Carbon::now();
				break;
				case 3: 
				$db->positif_date = Carbon::now();
				break;
				case 4: 
				$db->sembuh_date = Carbon::now();
				break;
				case 5:
				$db->meninggal_date = Carbon::now();				 
				break;
			}
			$db->save();
	    	DB::commit();
			$responseData = 'Data berhasil Dirubah';
			return response()->json(['message'=> $responseData, 'data' => $responseData], 201);
        } catch (\Exception $ex) {
            DB::rollback();
            $responseData = $ex->getMessage();
			return response()->json(['message'=> 'failed', 'data' => $responseData], 400);
        }
    }
}
