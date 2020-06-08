@extends('template')
@section('title')
	Covid-19 | Data Pasien
@endsection
@section('datapasien')
  active
@endsection
@section('opencolapse')
  show
@endsection
@section('pasien')
  active
@endsection
@section('content')

<!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Semua Pasien Covid-19</h1>
  <p class="mb-4">Ini adalah data semua pasien covid-19.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pasien ODP</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered global-table" id="tablePasien" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>Umur</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Status</th>
              <th><a href="javascript:void(0);" class="btn btn-primary btn-circle add-modal" data-jenis="passien" data-url="{{route('modal')}}"><i class="fa fa-plus"></i></a></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>

        @component('components.modal')
        @slot('id_modal','myModal')
        @slot('id_form','form')
        @slot('size_modal','modal_size')
        @slot('title_modal','modal_title')
        @slot('body_modal','modal_body')
        @slot('footer_modal','modal_footer')
        @endcomponent
        
      </div>
    </div>
  </div>
@endsection
@section('js')
<script>
  $(document).ready(function() {
    $('#tablePasien').DataTable({
      ordering: false,
      responsive: true,
      processing: true,
      serverSide: true,
      saveState: true,
      ajax: '{{ route('tablePasien') }}',
      columns: [
          { data: 'DT_RowIndex', searchable: false },
          { data: 'nama', name: 'nama' },
          { data: 'nik', name: 'nik' },
          { data: 'umur', name: 'umur' },
          { data: 'jenis_kelamin', name: 'jenis_kelamin' },
          { data: 'alamat', name: 'alamat' },
          { data: 'status', name: 'status' },
          { data: 'actions', searchable: false },
      ],
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
    });

    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
  });
</script>
@endsection