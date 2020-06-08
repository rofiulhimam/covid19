@extends('template')
@section('title')
	Covid-19 | Data Pasien Positif
@endsection
@section('datapasien')
  active
@endsection
@section('opencolapse')
  show
@endsection
@section('positif')
  active
@endsection
@section('content')

<!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Pasien Positif Covid-19</h1>
  <p class="mb-4">Ini adalah data pasien yang positif corona.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pasien Positif</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered global-table" id="tablePositif" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>Umur</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Tanggal Positif</th>
              <th>Action</th>
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
    $('#tablePositif').DataTable({
      ordering: false,
      responsive: true,
      processing: true,
      serverSide: true,
      saveState: true,
      ajax: '{{ route('tablePositif') }}',
      columns: [
          { data: 'DT_RowIndex', searchable: false },
          { data: 'nama', name: 'nama' },
          { data: 'nik', name: 'nik' },
          { data: 'umur', name: 'umur' },
          { data: 'jenis_kelamin', name: 'jenis_kelamin' },
          { data: 'alamat', name: 'alamat' },
          { data: 'positif_date', name: 'positif_date' },
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