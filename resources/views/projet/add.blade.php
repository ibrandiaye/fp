{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')

@section('title', '| Enregister Boutique')

@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">GESTION DES Projet</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('projet.index') }}" role="button" class="btn btn-primary">LISTE  DES PROJETS</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <form action="{{ route('projet.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">


             <div class="card border-success border-0">
                        <div class="card-header bg-info text-center">Porteur de Projet</div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nom du Porteur</label>
                                        <input type="text" name="nom"  value="{{ old('nom') }}" class="form-control"  required>
                                    </div>
                                </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email"  value="{{ old('email') }}" class="form-control" required>
                                        </div>
                                    </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Téléphone</label>
                                                <input type="number" name="tel"  value="{{ old('tel') }}" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="textarea"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ old('description') }}</textarea>

                                            </div>
                                        </div>

                            </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-success border-0">
                                <div class="card-header bg-info text-center">Information du Projet</div>
                                    <div class="card-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>titre du Projet</label>
                                                <input type="text" name="titre"  value="{{ old('titre') }}" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Catégorie du Projet</label>
                                                <select class="form-control" name="categorie_id" required>
                                                    <option value="">Faites un choix</option>
                                                    @foreach ($categories as $categorie )
                                                    <option value="{{ $categorie->id }}">{{ $categorie->nomc }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Description Projet</label>
                                                    <textarea class="textarea"
                                                style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="descriptionp">{{ old('descriptionp') }}</textarea>

                                                </div>
                                            </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Montant à collecter</label>
                                                        <input type="number" name="montant"  value="{{ old('montant') }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Lieu du Projet</label>
                                                        <input type="text" name="lieu"  value="{{ old('lieu') }}" class="form-control"  required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Latitude</label>
                                                        <input type="number" name="latitude"  value="{{ old('latituded') }}" step="any" class="form-control" required>
                                                    </div>
                                                </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Longitude</label>
                                                            <input type="number" name="longitude"  value="{{ old('longituded') }}" step="any" class="form-control" required>
                                                        </div>
                                                    </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Image en avant</label>
                                                        <input type="file" name="ia"  class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="conteneur">

                                                    <button type="button"  class="btn btn-success addRow">Ajouter Image</button></h2>
                                                </div>


                                        <div>
                                            <center>
                                                <button type="submit" class="btn btn-success btn btn-lg "> ENREGISTRER</button>
                                            </center>
                                        </div>
                                    </div>

                                    </div>
                        </div>
                    </div>

            </form>
            </div>
        </div>



@endsection
@section('script')
<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
  <script>
    $(document).ready(function(){
        $(".addRow").click(function() {
            $(".conteneur").append("<div class='col-lg-12'> <div class='form-group  test'><label class='fieldlabels'>Image :</label>"+
                "<input type='file' name='gal[]'  class='form-control'  required >"+
                "<button type='button' class='btn btn-danger remove-tr'>Supprimer</button></div></div>");
        });

        $(document).on('click', '.remove-tr', function(){
            $(this).parent('div .test').remove();
        });
   });


</script>

@endsection


