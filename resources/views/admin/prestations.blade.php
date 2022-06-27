@extends('layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Liste Prestations</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Prestations</li>
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
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter Prestation</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>TITRE</th>
                        <th>DETAIL</th>
                        <th>LOGO</th>
                        <th>DATE D'AJOUT</th>
                        <th>ACTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($prestations as $key => $prestation)
                     <tr>
                        <td>{{$prestation->id}}</td>
                        <td>
                           <img  class="img-thumbnail" width="80px"  src="{{asset('/storage/uploads/'.$prestation->image)}}"/>
                        </td>
                        <td>{{$prestation->titre}}</td>
                        <td>{{$prestation->detail}}</td>
                        <td>  <img  class="img-thumbnail" width="80px"  src="{{asset('/storage/uploads/'.$prestation->logo)}}"/>
                        </td>
                        <td>{{$prestation->created_at}}</td>
                        <td>
                           <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalModifierPrestation{{$key}}"><i class="fa-regular fa-pen-to-square" style="color: white;"></i></button>
                           <form action="{{url('admin/prestations/'.$prestation->id)}}" class="d-inline" method="post">
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
            <h5 class="modal-title" id="exampleModalLabel">Ajouter Prestation</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/prestations")}}"  enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="form-group">
                  <label for="exampleFormControlFile1">IMAGE</label>
                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
               <div class="form-group">
                  <label>TITRE</label>
                  <input type="text" id="titre" name="titre" class="form-control" placeholder="Entrer titre" required>
               </div>
               <div class="form-group">
                  <label>DATAIL</label>
                  <textarea name="detail" class="form-control" placeholder="Enter détail" required></textarea>
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">LOGO</label>
                  <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Ajouter Prestation</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--=====================================
   MODAL MODIFIER PRODUIT
   ======================================-->
@foreach ($prestations as $key => $prestation)
<div class="modal fade" id="modalModifierPrestation{{$key}}" aria-labelledby="exampleModalLabel" >
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="background: #007bff; color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Modifier Prestation</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url("admin/prestations/".$prestation->id)}}">
            @csrf
            @method('PUT')  
            <div class="card-body">
               {{-- <div class="form-group">
                  <img  width="100px"  src="{{asset('/storage/uploads/'.$prestation->image)}}"/>
                  <input type="file" name="image" class="form-control" value="" >
               </div> --}}
               <div class="form-group">
                  <img  class="img-thumbnail preview" width="100px"  src="{{asset('/storage/uploads/'.$prestation->image)}}"/>
                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
               </div>
               <div class="form-group">
                  <label>TITRE</label>
                  <input type="text" id="titre" name="titre" class="form-control" value="{{$prestation->titre}}">
               </div>
               <div class="form-group">
                  <label>DETAIL</label>
                  <textarea name="detail" class="form-control">{{$prestation->detail}}</textarea>
               </div>
               <div class="form-group">
                  <img  class="img-thumbnail preview" width="100px"  src="{{asset('/storage/uploads/'.$prestation->logo)}}"/>
                  <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
               </div>
               <!-- /.card-body -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Modifier Prestation</button>
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
         title: 'Vous êtes sur de supprimer cette Prestation?',   
      }).then((result) => {
         if (result.isConfirmed) {
            $(e.target).closest("form").submit();
         } 
      })
   });
</script>
@endpush