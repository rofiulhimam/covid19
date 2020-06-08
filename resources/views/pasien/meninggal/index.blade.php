@extends('template')
@section('title')
	Covid-19 | Data Pasien Meninggal
@endsection
@section('datapasien')
  active
@endsection
@section('opencolapse')
  show
@endsection
@section('meninggal')
  active
@endsection
@section('content')

<!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Pasien Meninggal Covid-19</h1>
  <p class="mb-4">Ini adalah data pasien corona yang meninggal.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pasien Meninggal</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="tableMeninggal" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Umur</th>
              <th>Jenis Kelammin</th>
              <th>Alamat</th>
              <th>Tanggal Meninggal</th>
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
    $('#tableMeninggal').DataTable({
      ordering: false,
      responsive: true,
      processing: true,
      serverSide: true,
      saveState: true,
      ajax: '{{ route('tableMeninggal') }}',
      columns: [
          { data: 'DT_RowIndex', searchable: false },
          { data: 'nama', name: 'nama' },
          { data: 'nik', name: 'nik' },
          { data: 'umur', name: 'umur' },
          { data: 'jenis_kelamin', name: 'jenis_kelamin' },
          { data: 'alamat', name: 'alamat' },
          { data: 'meninggal_date', name: 'meninggal_date' },
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