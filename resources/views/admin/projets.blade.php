@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Projets</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Projets</li>
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
               {{-- <a href="{{route('ajouterprojet')}}">
               <button type="submit" class="btn btn-primary">Ajouter projet</button>
               </a> --}}
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Projet</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>CATEGORIE</th>
                        <th>INTITULE</th>
                        <th>PREFECTURE</th>
                        <th>MOE</th>
                        <th>VILLE</th>
                        <th>COMPOSANTES</th>
                        <th>MONTANT D'INVEST</th>
                        <th>ANNEE</th>
                        <th>SUPERFICIE</th>
                        <th>ETAT D'AVANCEMENT</th>
                        <th>DESCRIPTION</th>
                        <th>MISSION</th>
                        <th>IMAGES</th>
                        <th>ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($projets as $key => $projet)
                     <tr>
                        <td>{{$projet->id}}</td>
                        <td>
                           {{$projet->categorie_id}}
                        </td>
                        <td>{{$projet->intitule}}</td>
                        <td>{{$projet->prefecture}}</td>
                        <td>{{$projet->moe}}</td>
                        <td>{{$projet->ville}}</td>
                        <td>{{$projet->composantes}}</td>
                        <td>{{$projet->mont_Invest}}</td>
                        <td>{{$projet->annee}}</td>
                        <td>{{$projet->superficie}}</td>
                        <td>{{$projet->etat_Av}}</td>
                        <td>{{$projet->desc}}</td>
                        <td>{{$projet->mission}}</td>
                        <td>
                           <img  class="img-thumbnail" width="80px"  src="{{asset('/storage/uploads/'.$projet->images)}}"/>
                        </td>
                        <td>
                           <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalModifierProjet{{$key}}"><i class="fa-regular fa-pen-to-square" style="color: white;"></i></button>
                           <form action="{{url('admin/projets/'.$projet->id)}}" class="d-inline" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></button>
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
   MODAL AJOUTER projet
   ======================================-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header" style="background: #007bff; color: #fff">
         <h5 class="modal-title" id="exampleModalLabel">Ajouter Projet</h5>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         <!-- form start -->
         <form method="post" action="{{route("storeProjet")}}" enctype="multipart/form-data">
         @csrf
         <div class="card-body">
            <div class="form-group">
               <label>CATEGORIE</label>
               <!-- select -->
               <div class="form-group">
                  <select name="categorie_id" class="form-control">
                     @foreach ($categories as $categorie)
                     <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                     @endforeach 
                  </select>
               </div>
                  </div>
               <div class="form-group">
                  <label>INTITULE</label>
                  <input type="text" name="intitule" class="form-control" placeholder="Enter l'intitule" required>
               </div>
               <div class="form-group">
                  <label>PREFECTURE</label>
                  <input type="text" name="prefecture" class="form-control" placeholder="Enter prefecture" required>
               </div>
               <div class="form-group">
                  <label>MOE</label>
                  <input type="text" name="moe" class="form-control" placeholder="Enter maitre d'ouvrage" required>
               </div>
               <div class="form-group">
                  <label>VILLE</label>
                  <input type="text" name="ville" class="form-control" placeholder="Enter ville" required>
               </div>
               <div class="form-group">
                  <label>COMPOSANTES</label>
                  <input type="text" name="composantes" class="form-control" placeholder="Enter composantes" required>
               </div>
               <div class="form-group">
                  <label>MONTANT D'INVESTISSEMENT</label>
                  <input type="text" name="mont_Invest" class="form-control" placeholder="Enter montant d'investissement" required>
               </div>
               <div class="form-group">
                  <label>ANNEE</label>
                  <input type="text" name="annee" class="form-control" placeholder="Enter année" required>
               </div>
               <div class="form-group">
                  <label>SUPERFICIE</label>
                  <input type="text" name="superficie" class="form-control" placeholder="Enter superficie" required>
               </div>
               <div class="form-group">
                  <label>ETAT D'AVANCEMENT</label>
                  <input type="text" name="etat_Av" class="form-control" placeholder="Enter état d'avancement" required>
               </div>
               <div class="form-group">
                  <label>DESCRIPTION</label>
                  <textarea name="desc" class="form-control" placeholder="Enter description" required></textarea>
               </div>
               <div class="form-group">
                  <label>MISSION</label>
                  <input type="text" name="mission" class="form-control" placeholder="Enter mission" required>
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">IMAGES</label>
                  <input type="file" name="images" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Projet</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--=====================================
   MODAL MODIFIER projet
   ======================================-->
@foreach ($projets as $key => $projet)
<div class="modal fade" id="modalModifierProjet{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Projet</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/projets/".$projet->id)}}">
            @csrf
            @method('PUT')  
            <div class="card-body">
               <div class="form-group">
                  <select name="categorie_id" class="form-control">
                     @foreach ($categories as $categorie)
                     <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                     @endforeach 
                  </select>
               </div>
               <div class="form-group">
                  <label>INTITULE</label>
                  <input type="text" id="intitule" name="intitule" class="form-control" value="{{$projet->intitule}}">
               </div>
               <div class="form-group">
                  <label>PREFECTURE</label>
                  <input type="text" id="prefecture" name="prefecture" class="form-control" value="{{$projet->prefecture}}">
               </div>
               <div class="form-group">
                  <label>MOE</label>
                  <input type="text" id="moe" name="moe" class="form-control" value="{{$projet->moe}}">
               </div>
               <div class="form-group">
                  <label>VILLE</label>
                  <input type="text" id="ville" name="ville" class="form-control" value="{{$projet->ville}}">
               </div>
               <div class="form-group">
                  <label>COMPOSANTES</label>
                  <input type="text" id="composantes" name="composantes" class="form-control" value="{{$projet->composantes}}">
               </div>
               <div class="form-group">
                  <label>MONTANT D'INVESTISSEMENT</label>
                  <input type="text" id="mont_Invest" name="mont_Invest" class="form-control" value="{{$projet->mont_Invest}}">
               </div>
               <div class="form-group">
                  <label>ANNEE</label>
                  <input type="text" id="annee" name="annee" class="form-control" value="{{$projet->annee}}">
               </div>
               <div class="form-group">
                  <label>SUPERFICIE</label>
                  <input type="text" id="superficie" name="superficie" class="form-control" value="{{$projet->superficie}}">
               </div>
               <div class="form-group">
                  <label>ETAT D'AVENCEMENT</label>
                  <input type="text" id="etat_Av" name="etat_Av" class="form-control" value="{{$projet->etat_Av}}">
               </div>
               <div class="form-group">
                  <label>DESCRIPTION</label>
                  <input type="text" id="desc" name="desc" class="form-control" value="{{$projet->desc}}">
               </div>
               <div class="form-group">
                  <label>MISSION</label>
                  <input type="text" id="mission" name="mission" class="form-control" value="{{$projet->mission}}">
               </div>
               <div class="form-group">
                  <img  class="img-thumbnail preview" width="100px"  src="{{asset('/storage/uploads/'.$projet->images)}}"/>
                  <input type="file" name="images" class="form-control-file" id="exampleFormControlFile1">
               </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Projet</button>
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
         title: 'Vous êtes sur de supprimer ce Projet?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush