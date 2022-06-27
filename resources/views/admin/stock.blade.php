@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Produits</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Produits</li>
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
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Produit</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>CODE</th>
                        <th>nom</th>
                        <th>DESCRIPTION</th>
                        <th>CATEGORIE</th>
                        <th>STOCK</th>
                        <th>PRIX D'ACHAT</th>
                        <th>FOURNISSEUR</th>
                        <th>DATE D'AJOUT</th>
                        <th>ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($produits as $key => $produit)
                     <tr>
                        <td>{{$produit->id}}</td>
                        <td>
                           <img src="{{asset('/storage/uploads/'.$produit->image)}}"  class="img-thumbnail" width="80px"  />
                        </td>
                        <td>{{$produit->code}}</td>
                        <td>{{$produit->nom}}</td>
                        <td>{{$produit->description}}</td>
                        <td>{{ isset($produit->categorieProduit) ? $produit->categorieProduit->categorie : '--' }}</td>
                        @if ($produit->stock<5)
                        <td>
                           <button type="button" class="btn btn-danger">{{$produit->stock}}</button>
                        </td>
                        @elseif ($produit->stock>5 && $produit->stock<15)
                        <td>
                           <button type="button" class="btn btn-warning">{{$produit->stock}}</button>
                        </td>
                        @else 
                        <td>
                           <button type="button" class="btn btn-success">{{$produit->stock}}</button>
                        </td>
                        @endif
                        <td>{{$produit->prix_Achat}}</td>
                        <td>{{$produit->fournisseur->nom}}</td>
                        <td>{{$produit->created_at}}</td>
                        <td>
                           {{-- <a href="{{url('admin/categories/'.$categorieProduit->id)}}">
                           </a> --}}
                           <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalModifierProduit{{$key}}"><i class="fa-regular fa-pen-to-square" style="color: white;"></i></button>
                           <form action="{{url('admin/stock/'.$produit->id)}}" class="d-inline" method="post">
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
   MODAL AJOUTER PRODUIT
   ======================================-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Produit</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/stock")}}"  enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="form-group">
                  <label>CODE</label>
                  <input type="text" id="code" name="code" class="form-control" placeholder="Entrer le code" required>
               </div>
               <div class="form-group">
                  <label>NOM</label>
                  <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrer le nom" required>
               </div>
               <div class="form-group">
                  <label>DESCRIPTION</label>
                  <textarea name="description" class="form-control" placeholder="Enter description" required></textarea>
               </div>
               <!-- select -->
               <div class="form-group">
                  <label>CATEGORIE</label>
                  <select name="categorie_produit_id" class="form-control">
                     @foreach ($categoriesProduits as $categorieProduit)
                     <option value="{{$categorieProduit->id}}">{{$categorieProduit->categorie}}</option>
                     @endforeach 
                  </select>
               </div>
               <div class="form-group">
                  <label>STOCK</label>
                  <input type="text" id="stock" name="stock" class="form-control" placeholder="Entrer la quantité" required>
               </div>
               <div class="form-group">
                  <label>PRIX D'ACHAT</label>
                  <input type="text" id="prix_Achat" name="prix_Achat" class="form-control" placeholder="Entrer le prix d'Achat" required>
               </div>
               <div class="form-group">
                  <label>FOURNISSEUR</label>
                  <select name="fournisseur_id" class="form-control">
                     @foreach ($fournisseurs as $fournisseur)
                     <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                     @endforeach 
                  </select>
               </div>
               <div class="form-group">
                     <label for="exampleFormControlFile1">IMAGE</label>
                     <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                   </div>
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Produit</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--=====================================
   MODAL MODIFIER PRODUIT
   ======================================-->
@foreach ($produits as $key => $produit)
<div class="modal fade" id="modalModifierProduit{{$key}}" aria-labelledby="exampleModalLabel" >
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Modifier Produit</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/stock/".$produit->id)}}">
            @csrf
            @method('PUT')  
            <div class="card-body">
               <div class="form-group">
                  <label>CODE</label>
                  <input type="text" id="code" name="code" class="form-control" value="{{$produit->code}}">
               </div>
               <div class="form-group">
                  <label>NOM</label>
                  <input type="text" id="nom" name="nom" class="form-control" value="{{$produit->nom}}">
               </div>
               <div class="form-group">
                  <label>DESCRIPTION</label>
                  <textarea name="description" class="form-control">{{$produit->description}}</textarea>
               </div>
               <div class="form-group">
                  <select name="categorie_produit_id" class="form-control">
                     @foreach ($categoriesProduits as $categorieProduit)
                     <option value="{{$categorieProduit->id}}">{{$categorieProduit->categorie}}</option>
                     @endforeach 
                  </select>
               </div>
               <div class="form-group">
                  <label>STOCK</label>
                  <input type="text" id="stock" name="stock" class="form-control" value="{{$produit->stock}}">
               </div>
               <div class="form-group">
                  <label>PRIX D'ACHAT</label>
                  <input type="text" id="prix_Achat" name="prix_Achat" class="form-control" value="{{$produit->prix_Achat}}">
               </div>
               <div class="form-group">
                  <img  class="img-thumbnail preview" width="100px"  src="{{asset('/storage/uploads/'.$produit->image)}}"/>
                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
               </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Modifier Produit</button>
            </div>
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
         title: 'Vous êtes sur de supprimer cette Produit?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush