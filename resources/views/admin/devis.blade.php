@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Devies</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Devies</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               {{-- 
               <h3 class="card-title">DataTable with default features</h3>
               --}}
               {{-- <a href="{{route('ajouterEmploye')}}">
               <button type="submit" class="btn btn-primary">Ajouter Employe</button>
               </a> --}}

               {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Client Fidèle</button> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>SOCIETE</th>
                        <th>EMAIL</th>
                        <th>TELEPHONE</th>
                        <th>VILLE</th>
                        <th>MESSAGE</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($devies as $key => $devis)
                     <tr>
                        <td>{{$devis->id}}</td>
                        <td>{{$devis->nom}}</td>
                        <td>{{$devis->societe}}</td>
                        <td>{{$devis->email}}</td>
                        <td>{{$devis->telephone}}</td>
                        <td>{{$devis->ville}}</td>
                        <td>{{$devis->message}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection
@push('scripts')
<script src="{{ asset('vendors/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script>
   $( ".delete" ).on('click' ,function(e) {
      e.preventDefault();
      Swal.fire({
         icon: 'error',
         title: 'Vous etes sur de supprimer cette Employé?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush

