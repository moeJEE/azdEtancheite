<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.Name', 'PFE')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

</head>
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">

{{-- 1. Top Menu --}}
@include('layouts.topMenu')

{{-- 2. Left Menu --}}
@include('layouts.leftMenu')

{{-- 3. Main Content(body) --}}
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ajouter Employe</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nom</label>
                      <input type="text" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Prénom</label>
                      <input type="text" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>CIN</label>
                      <input type="text" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label>Sexe</label>
                        <input type="checkbox" name="sexe">Hommes
                        <input type="checkbox" name="sexe">Femmes
                      </div>
                    
                      <div class="form-group">
                          <label>Date de Naissance</label>
                          <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Poste</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                  </div>
                    

                  <div class="form-group">
                      <label>Salaire</label>
                      <input type="email" class="form-control" placeholder="Enter email">
                </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
</section>
</div>

  {{-- 4. Right Menu --}}
  @include('layouts.rightMenu')
  
  {{-- 5. Footer --}}
  @include('layouts.footer')
  

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('vendors/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
