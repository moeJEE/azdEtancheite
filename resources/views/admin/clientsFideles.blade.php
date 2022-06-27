@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Client Findèles</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Client Findèles</li>
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
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Client Fidèle</button>
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
                        <th>TOTAL DEMANDES</th>
                        <th>DATE D'AJOUT</th>
                        <th>ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($clientsFideles as $key => $clientFidele)
                     <tr>
                        <td>{{$clientFidele->id}}</td>
                        <td>{{$clientFidele->nom}}</td>
                        <td>{{$clientFidele->societe}}</td>
                        <td>{{$clientFidele->email}}</td>
                        <td>{{$clientFidele->telephone}}</td>
                        <td>{{$clientFidele->ville}}</td>
                        <td>XXXXXXXXXXXXX</td>
                        <td>{{$clientFidele->created_at}}</td>
                        <td>
                           <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalModifierClientFidele{{$key}}"><i class="fa-regular fa-pen-to-square" style="color: white;"></i></button>
                           <form action="{{url('admin/clientsFideles/'.$clientFidele->id)}}" class="d-inline" method="post">
                              {{ csrf_field() }}
                              @method('DELETE')
                              <button type="submit" class="delete btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></button>
                           </form>
                        </td>
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
<!--=====================================
   MODAL AJOUTER EMPLOYE
   ======================================-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Client Fidèle</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/clientsFideles")}}">
            @csrf
            <div class="card-body">
               <div class="form-group">
                  <label>NOM</label>
                  <input type="text" name="nom" class="form-control" placeholder="Enter nom" required>
               </div>
               <div class="form-group">
                  <label>SOCIETE</label>
                  <input type="text" name="societe" class="form-control" placeholder="Enter Societé" required>
               </div>
               <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" required>
               </div>
               <div class="form-group">
                  <label>TELEPHONE</label>
                  <input type="text" name="telephone" class="form-control" placeholder="Enter telephone" required>
               </div>
               <div class="form-group">
                  <label>VILLE</label>
                  <input type="text" name="ville" class="form-control" placeholder="Enter ville" required>
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Client Fidèle</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--=====================================
   MODAL MODIFIER EMPLOYE
   ======================================-->
@foreach ($clientsFideles as $key => $clientFidele)
<div class="modal fade" id="modalModifierClientFidele{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Modifier Client Fidèle</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/clientsFideles/".$clientFidele->id)}}">
            @csrf
            @method('PUT')  
            <div class="card-body">
               <div class="form-group">
                  <label>NOM</label>
                  <input type="text" id="nom" name="nom" class="form-control" value="{{@$clientFidele->nom}}">
               </div>
               <div class="form-group">
                  <label>SOCIETE</label>
                  <input type="text" id="societe" name="societe" class="form-control" value="{{@$clientFidele->societe}}">
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{@$clientFidele->email}}">
               </div>
               <div class="form-group">
                  <label>TELEPHONE</label>
                  <input type="text" id="telephone" name="telephone" class="form-control" value="{{@$clientFidele->telephone}}">
               </div>
               <div class="form-group">
                  <label>VILLE</label>
                  <input type="text" id="ville" name="ville" class="form-control" value="{{@$clientFidele->ville}}">
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Modifier Client Fidèle</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endforeach
@endsection
@push('scripts')
<script src="{{ asset('vendors/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
   $( ".delete" ).on('click' ,function(e) {
      e.preventDefault();
      Swal.fire({
         icon: 'error',
         title: 'Vous êtes sur de supprimer ce Client?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush

