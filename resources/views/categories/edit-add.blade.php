@php
    $edit = false;
    if( isset($categorie) ) $edit = true;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">

</head>
<body>
    
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                
                <fieldset class="card card-body">
            
                    <legend>Ajouter Categores</legend>
            <hr>
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ $edit ? route('categories.update', $categorie->id ) : route('categories.store') }}" method="post">
                        @csrf
                        @if ($edit)
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="categorie" value="{{ $edit ? $categorie->categorie : '' }}">
                        </div>
                        <input type="submit" class="btn btn-success" value="save">
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

</body>
</html>