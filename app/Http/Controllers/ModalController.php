<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\pasien;
class ModalController extends Controller
{
    public function modal(Request $request)
    {   

        $modal_size = 'modal-sm';
        $modal_title = '';
        $modal_body = '';
        $modal_footer = '';
        $url = '';
        $table = '';
        $action = '';
        switch ($request->jenis) {
            case 'passien':

                $url = route('pasien_crud');
                
                $table = 'tablePasien';
                
                $action = $request->has('id') ? 'edit' : 'add';
                
                $modal_size = 'modal-lg';
                
                $modal_title = $request->has('id') ? '<i class="fa fa-edit"></i> Ubah Pasien' : '<i class="fa fa-plus"></i> Tambah Pasien';

                $data = $request->has('id') ? Pasien::find($request->id) : [] ;

                $modal_body = View::make('modal_form.pasien',$data)->render();

                $modal_footer = '
                <button type="submit" id="btn-save" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-url="'.$url.'" data-tbl="'.$table.'" data-action ="'.$action.'" >Save</button>
                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>';
                break;

            case 'status':

                $url = route('pasien_status');
                
                $table = $request->table;
                
                $action = $request->has('id') ? 'edit' : 'add';
                
                $modal_size = 'modal-md';
                
                $modal_title = '<i class="fa fa-edit"></i> Update Status Pasien';

                $data = Pasien::find($request->id);

                $modal_body = View::make('modal_form.status',$data)->render();

                $modal_footer = '
                <button type="submit" id="btn-save" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-url="'.$url.'" data-tbl="'.$table.'" data-action ="'.$action.'" >Save</button>
                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>';
                break;
        }
        $data = array('modal_size' => $modal_size,'modal_title' => $modal_title, 'modal_body' => $modal_body, 'modal_footer' => $modal_footer);

        return response()->json($data);
    }
}
