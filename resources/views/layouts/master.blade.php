<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ config('app.Name', 'PFE')}}</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
      <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
       <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> --}}
      <link rel="stylesheet" href="{{ asset('vendors/plugins/toastr/toastr.min.css') }}">
      <style>
         .content-wrapper {
            min-height: 727.816px !important;  }
      </style>
      @stack('styles')
   </head>
   <body class="hold-transition sidebar-mini">
      <div class="wrapper">
         {{-- 1. Top Menu --}}
         @include('layouts.topMenu')
         {{-- 2. Left Menu --}}
         @include('layouts.leftMenu')
         {{-- 3. Main Content (Body) --}}
         <div class="content-wrapper">
            {{-- Main content --}}
            <section class="content">
               @yield('content')
            </section>
         </div>
         {{-- 4. Right Menu --}}
         @include('layouts.rightMenu')
         {{-- 5.Footer --}}
         {{-- @include('layouts.footer') --}}
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap 4 -->
      <script src=" {{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
      {{-- DataTable --}}
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
      <script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
      <script src="{{ asset('vendors/plugins/toastr/toastr.min.js') }}"></script>
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
      @include('partials.alert')
      
      @stack('scripts')

   </body>
</html>