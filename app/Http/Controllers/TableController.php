<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Define Module
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\View;
//Define Model
use App\pasien;
class TableController extends Controller
{
    public function tablePassienSemua()
    {
        $datatable = Datatables::of(pasien::all());
        $datatable->addIndexColumn();
        $datatable->addColumn('actions', function($value) {
            $template = '
            <a href="javascript:void(0);" class="btn btn-warning btn-circle edit-modal" data-jenis="passien" data-id="'.$value->id.'" data-url="'.route('modal').'"><i class="fa fa-edit"></i></a>
            <a href="javascript:void(0);" class="btn btn-danger btn-circle delete-modal" data-table="tablePasien" data-jenis="passien" data-tbl="tablePasien" data-url="'.route('pasien_crud').'" data-id="'.$value->id.'"><i class="fa fa-trash"></i></a>
            ';
            return $template;
            });
        $datatable->editColumn('status', function($value) {
            $status = '';
            switch ($value->status) {
                case 1:
                    $status = 'ODP';
                    break;
                
                case 2:
                    $status = 'PDP';
                    break;

                case 3:
                    $status = 'Positif';
                    break;

                case 4:
                    $status = 'Sembuh';
                    break;

                case 5:
                    $status = 'Meninggal';
                    break;
            }
            return $status;
        });
        $datatable->editColumn('jenis_kelamin', function($value) {
            $jenis_kelamin = '';
            switch ($value->jenis_kelamin) {
                case 'laki':
                    $jenis_kelamin = 'Laki-Laki';
                    break;
                
                case 'perempuan':
                    $jenis_kelamin = 'Perempuan';
                    break;
            }
            return $jenis_kelamin;
        });
        $datatable->rawColumns(['actions']);
        return $datatable->make(true);
    }

    public function tablePassienOdp()
    {
        $datatable = Datatables::of(pasien::where('status', 1)->get());
        $datatable->addIndexColumn();
        $datatable->addColumn('actions', function($value) {
            $template = '
            <a href="javascript:void(0);" class="btn btn-success btn-circle edit-modal" data-table="tableOdp" data-jenis="status" data-id="'.$value->id.'" data-url="'.route('modal').'"><i class="fa fa-edit"></i></a>
                        ';
            return $template;
            });
        $datatable->editColumn('jenis_kelamin', function($value) {
            $jenis_kelamin = '';
            switch ($value->jenis_kelamin) {
                case 'laki':
                    $jenis_kelamin = 'Laki-Laki';
                    break;
                
                case 'perempuan':
                    $jenis_kelamin = 'Perempuan';
                    break;
            }
            return $jenis_kelamin;
        });
        $datatable->rawColumns(['actions']);
        return $datatable->make(true);
    }

    public function tablePassienPdp()
    {
        $datatable = Datatables::of(pasien::where('status', 2)->get());
        $datatable->addIndexColumn();
        $datatable->addColumn('actions', function($value) {
            $template = '
            <a href="javascript:void(0);" class="btn btn-success btn-circle edit-modal" data-table="tablePdp" data-jenis="status" data-id="'.$value->id.'" data-url="'.route('modal').'"><i class="fa fa-edit"></i></a>
                        ';
            return $template;
            });
        $datatable->editColumn('jenis_kelamin', function($value) {
            $jenis_kelamin = '';
            switch ($value->jenis_kelamin) {
                case 'laki':
                    $jenis_kelamin = 'Laki-Laki';
                    break;
                
                case 'perempuan':
                    $jenis_kelamin = 'Perempuan';
                    break;
            }
            return $jenis_kelamin;
        });
        $datatable->rawColumns(['actions']);
        return $datatable->make(true);
    }

    public function tablePassienPositif()
    {
        $datatable = Datatables::of(pasien::where('status', 3)->get());
        $datatable->addIndexColumn();
        $datatable->addColumn('actions', function($value) {
            $template = '
            <a href="javascript:void(0);" class="btn btn-success btn-circle edit-modal" data-table="tablePositif" data-jenis="status" data-id="'.$value->id.'" data-url="'.route('modal').'"><i class="fa fa-edit"></i></a>
                        ';
            return $template;
            });
        $datatable->editColumn('jenis_kelamin', function($value) {
            $jenis_kelamin = '';
            switch ($value->jenis_kelamin) {
                case 'laki':
                    $jenis_kelamin = 'Laki-Laki';
                    break;
                
                case 'perempuan':
                    $jenis_kelamin = 'Perempuan';
                    break;
            }
            return $jenis_kelamin;
        });
        $datatable->rawColumns(['actions']);
        return $datatable->make(true);
    }

    public function tablePassienSembuh()
    {
        $datatable = Datatables::of(pasien::where('status', 4)->get());
        $datatable->addIndexColumn();
        $datatable->addColumn('actions', function($value) {
            $template = '
            <a href="javascript:void(0);" class="btn btn-warning btn-circle edit-modal" data-jenis="passien" data-id="'.$value->id.'" data-url="'.route('modal').'"><i class="fa fa-edit"></i></a>
            <a href="javascript:void(0);" class="btn btn-danger btn-circle delete-modal" data-jenis="passien" data-tbl="tableSembuh" data-url="'.route('pasien_crud').'" data-id="'.$value->id.'"><i class="fa fa-trash"></i></a>
                        ';
            return $template;
            });
        $datatable->editColumn('jenis_kelamin', function($value) {
            $jenis_kelamin = '';
            switch ($value->jenis_kelamin) {
                case 'laki':
                    $jenis_kelamin = 'Laki-Laki';
                    break;
                
                case 'perempuan':
                    $jenis_kelamin = 'Perempuan';
                    break;
            }
            return $jenis_kelamin;
        });
        $datatable->rawColumns(['actions']);
        return $datatable->make(true);
    }

    public function tablePassienMeninggal()
    {
        $datatable = Datatables::of(pasien::where('status', 5)->get());
        $datatable->addIndexColumn();
        $datatable->addColumn('actions', function($value) {
            $template = '
            <a href="javascript:void(0);" class="btn btn-warning btn-circle edit-modal" data-jenis="passien" data-id="'.$value->id.'" data-url="'.route('modal').'"><i class="fa fa-edit"></i></a>
            <a href="javascript:void(0);" class="btn btn-danger btn-circle delete-modal" data-jenis="passien" data-tbl="tableMeninggal" data-url="'.route('pasien_crud').'" data-id="'.$value->id.'"><i class="fa fa-trash"></i></a>
                        ';
            return $template;
            });
        $datatable->editColumn('jenis_kelamin', function($value) {
            $jenis_kelamin = '';
            switch ($value->jenis_kelamin) {
                case 'laki':
                    $jenis_kelamin = 'Laki-Laki';
                    break;
                
                case 'perempuan':
                    $jenis_kelamin = 'Perempuan';
                    break;
            }
            return $jenis_kelamin;
        });
        $datatable->rawColumns(['actions']);
        return $datatable->make(true);
    }
}
