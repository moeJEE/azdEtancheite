@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Employés</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Employés</li>
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
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Employé</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>PRENOM</th>
                        <th>EMAIL</th>
                        <th>CIN</th>
                        <th>TELEPHONE</th>
                        <th>SEXE</th>
                        <th>DATE NAISSANCE</th>
                        <th>POSTE</th>
                        <th>SALAIRE</th>
                        <th>ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($employes as $key => $employe)
                     <tr>
                        <td>{{$employe->id}}</td>
                        <td>{{$employe->nom}}</td>
                        <td>{{$employe->prenom}}</td>
                        <td>{{$employe->email}}</td>
                        <td>{{$employe->cin}}</td>
                        <td>{{$employe->telephone}}</td>
                        <td>{{$employe->sexe}}</td>
                        <td>{{$employe->date_Nais}}</td>
                        <td>{{$employe->poste}}</td>
                        <td>{{$employe->salaire}} MAD</td>
                        <td>
                           <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalModifierEmploye{{$key}}"><i class="fa-regular fa-pen-to-square" style="color: white;"></i></button>
                           <form action="{{url('admin/employes/'.$employe->id)}}" class="d-inline" method="post">
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
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Employé</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/employes")}}">
            @csrf
            <div class="card-body">
               <div class="form-group">
                  <label>NOM</label>
                  <input type="text" name="nom" class="form-control" placeholder="Enter nom" required>
               </div>
               <div class="form-group">
                  <label>PRENOM</label>
                  <input type="text" name="prenom" class="form-control" placeholder="Enter prénom" required>
               </div>
               <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" required>
               </div>
               <div class="form-group">
                  <label>CIN</label>
                  <input type="text" name="cin" class="form-control" placeholder="Enter cin" required>
               </div>
               <div class="form-group">
                  <label>TELEPHONE</label>
                  <input type="text" name="telephone" class="form-control" placeholder="Enter téléphone" required>
               </div>
               <div class="form-group">
                  <label>SEXE</label>
                  <input type="checkbox" value="homme" name="sexe">Homme
                  <input type="checkbox" value="femme" name="sexe">Femme
               </div>
               <div class="form-group">
                  <label>DATE DE NAISSANCE</label>
                  <input type="date" name="date_Nais" class="form-control" placeholder="Enter date naissance" required>
               </div>
               <div class="form-group">
                  <label>POSTE</label>
                  <input type="text" name="poste" class="form-control" placeholder="Enter poste" required>
               </div>
               <div class="form-group">
                  <label>SALAIRE</label>
                  <input type="text" name="salaire" class="form-control" placeholder="Enter salaire" required>
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Employé</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--=====================================
   MODAL MODIFIER EMPLOYE
   ======================================-->
@foreach ($employes as $key => $employe)
<div class="modal fade" id="modalModifierEmploye{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Modifier Employé</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/employes/".$employe->id)}}">
            @csrf
            @method('PUT')  
            <div class="card-body">
               <div class="form-group">
                  <label>NOM</label>
                  <input type="text" id="nom" name="nom" class="form-control" value="{{$employe->nom}}">
               </div>
               <div class="form-group">
                  <label>PRENOM</label>
                  <input type="text" id="prenom" name="prenom" class="form-control" value="{{$employe->prenom}}">
               </div>
               <div class="form-group">
                  <label>EMAIL</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{$employe->email}}">
               </div>
               <div class="form-group">
                  <label>CIN</label>
                  <input type="text" id="cin" name="cin" class="form-control" value="{{$employe->cin}}">
               </div>
               <div class="form-group">
                  <label>TELEPHONE</label>
                  <input type="text" id="telephone" name="telephone" class="form-control" value="{{$employe->telephone}}">
               </div>
               <div class="form-group">
                  <label>SEXE</label>
                  <input type="text" id="sexe" name="sexe" class="form-control" value="{{$employe->sexe}}">
               </div>
               <div class="form-group">
                  <label>DATE DE NAISSANCE</label>
                  <input type="date" id="date_Nais" name="date_Nais" class="form-control" value="{{$employe->date_Nais}}">
               </div>
               <div class="form-group">
                  <label>POSTE</label>
                  <input type="text" id="poste" name="poste" class="form-control" value="{{$employe->poste}}">
               </div>
               <div class="form-group">
                  <label>SALAIRE</label>
                  <input type="text" id="salaire" name="salaire" class="form-control" value="{{$employe->salaire}}">
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Modifier Employé</button>
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
         title: 'Vous êtes sur de supprimer cette Employé?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush

