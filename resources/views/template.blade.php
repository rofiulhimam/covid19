<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <!-- src="{{ asset('vendor/timeline/js/modernizr.js') }}" -->
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/fontgoogle.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/toastr/toastr.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('includes.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('includes.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('includes.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  {{-- <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script> --}}
  <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/js/loadingoverlay.min.js')}}"></script>
  <script src="{{asset('assets/lib/toastr/toastr.min.js')}}"></script>
  <script src="{{asset('assets/lib/sweetalert2/sweetalert2.min.js')}}"></script>
  <script>var imageloading_path = "{{asset('assets/img/image.gif')}}";</script>
  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script> --}}
  {{-- <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script> --}}
  <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('/js/helpers.js')}}"></script>
  @yield('js')
</body>

</html>
