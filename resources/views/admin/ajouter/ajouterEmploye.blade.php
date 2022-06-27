@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <!-- Main content -->
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto py-4">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ajouter Employe</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{url("admin/ajouter/ajouterEmploye")}}">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nom</label>
                      <input type="text" name="nom" class="form-control" placeholder="Enter nom">
                    </div>
                    <div class="form-group">
                      <label>Prénom</label>
                      <input type="text" name="prenom" class="form-control" placeholder="Enter prénom">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>CIN</label>
                      <input type="text" name="cin" class="form-control" placeholder="Enter cin">
                    </div>
                    <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" name="telephone" class="form-control" placeholder="Enter téléphone">
                    </div>

                    <div class="form-group">
                        <label>Sexe</label>
                        <input type="checkbox" value="h" name="sexe">Homme
                        <input type="checkbox" value="f" name="sexe">Femme
                      </div>

                      {{-- <div class="custom-control custom-checkbox">
                        <label>Sexe</label>
                        <input class="custom-control-input" type="checkbox">
                        <label class="custom-control-label">Homme</label>
                        
                        <input class="custom-control-input" type="checkbox" checked>
                        <label class="custom-control-label">Femme</label>
                      </div> --}}
                    
                      <div class="form-group">
                          <label>Date de Naissance</label>
                          <input type="date" name="date_Nais" class="form-control" placeholder="Enter date naissance">
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Poste</label>
                        <input type="text" name="poste" class="form-control" placeholder="Enter poste">
                  </div>
                    

                  <div class="form-group">
                      <label>Salaire</label>
                      <input type="text" name="salaire" class="form-control" placeholder="Enter salaire">
                </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        
@endsection