<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Collapsed Sidebar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- or if your folder is inside public/assets/ -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

  <style>
    /* Perfect height + alignment */
.select2-container--bootstrap4 .select2-selection {
    height: 45px !important;
    display: flex;
    align-items: center;
    border-radius: 6px;
}

/* Text align */
.select2-container--bootstrap4 .select2-selection__rendered {
    line-height: normal !important;
}

/* Arrow fix */
.select2-container--bootstrap4 .select2-selection__arrow {
    height: 100% !important;
}

.select2-container--bootstrap4 .select2-selection {
    padding-left: 35px;
    position: relative;
}

.select2-container--bootstrap4 .select2-selection:before {
    content: "\f205"; /* toggle icon */
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
}
  </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  

    @include('admin.layouts.navbar')

    @include('admin.layouts.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('admin')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>


<script>
$(function () {

    $('.select2').select2({
        theme: 'bootstrap4',
        width: '100%',
        placeholder: "Select one"
    });

    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

});
</script>

@section('scripts')

</body>
</html>
