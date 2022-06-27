@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Catégories</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Catégories</li>
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
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Catégorie produit</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>CATÉGORIE</th>
                        <th>ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($categoriesProduits as $key => $categorieProduit)
                     <tr>
                        <td>{{$categorieProduit->id}}</td>
                        <td>{{$categorieProduit->categorie}}</td>
                        <td>
                           {{-- <a href="{{url('admin/categories/'.$categorieProduit->id)}}">
                           </a> --}}
                           <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalModifierCatP{{$key}}"><i class="fa-regular fa-pen-to-square" style="color: white;"></i></button>
                           <form action="{{url('admin/categoriesProduits/'.$categorieProduit->id)}}" class="d-inline" method="post">
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
   MODAL AJOUTER CATEGORIE
   ======================================-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Catégorie produit</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/categoriesProduits")}}">
            @csrf
            <div class="card-body">
               <div class="form-group">
                  <label>CATEGORIE</label>
                  <input type="text" id="categorie" name="categorie" class="form-control" placeholder="Ajouter categorie produit">
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Catégorie produit</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--=====================================
   MODAL MODIFIER CATEGORIE
   ======================================-->
@foreach ($categoriesProduits as $key => $categorieProduit)
<div class="modal fade" id="modalModifierCatP{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Modifier Catégorie produit</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/categoriesProduits/".$categorieProduit->id)}}">
            @csrf
            @method('PUT')  
            <div class="card-body">
               <div class="form-group">
                  <label>CATEGORIE</label>
                  <input type="text" id="categorie" name="categorie" class="form-control" value="{{@$categorieProduit->categorie}}">
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Modifier Catégorie produit</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
</section>
@endforeach
@endsection
@push('scripts')
<script src="{{ asset('vendors/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
   $( ".delete" ).on('click' ,function(e) {
      e.preventDefault();
      Swal.fire({
         icon: 'error',
         title: 'Vous êtes sur de supprimer cette categorie?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush