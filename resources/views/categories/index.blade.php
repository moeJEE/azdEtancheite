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
                <a class="btn btn-success" href="{{ route('categories.create') }}">Add Categorie</a>
                <fieldset>
            
                    <legend>Categores</legend>
            
                    <table class="table">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>

                        @foreach ($categories as $categorie)
                            <tr>
                                <td> {{ $categorie->categorie }} </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('categories.edit', $categorie->id ) }}">Edit</a>
                                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="post" class="d-inline"> @csrf @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </fieldset>
            </div>
        </div>
    </div>

</body>
</html>