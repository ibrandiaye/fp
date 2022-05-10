{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')

@section('title', '| Modifier projet')

@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">GESTION DES projets</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('projet.index') }}" role="button" class="btn btn-primary">RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        {!! Form::model($projet, ['method'=>'PATCH','route'=>['projet.update', $projet->id],'enctype'=>"multipart/form-data"]) !!}
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
                                <input type="hidden" value="{{  $projet->porteur->id }}" name="porteur_id">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nom du Porteur</label>
                                        <input type="text" name="nom"  value="{{ $projet->porteur->nom }}" class="form-control"  required>
                                    </div>
                                </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email"  value="{{ $projet->porteur->email }}" class="form-control" required>
                                        </div>
                                    </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Téléphone</label>
                                                <input type="number" name="tel"  value="{{ $projet->porteur->tel }}" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="textarea"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $projet->porteur->description  }}</textarea>

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
                                                <input type="text" name="titre"  value="{{ $projet->titre }}" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Catégorie du Projet</label>
                                                <select class="form-control" name="categorie_id" required>
                                                    <option value="">Faites un choix</option>
                                                    @foreach ($categories as $categorie )
                                                    <option value="{{ $categorie->id }}" {{ $categorie->id == $projet->categorie_id ? 'selected' : '' }}>{{ $categorie->nomc }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Description Projet</label>
                                                    <textarea class="textarea"
                                                style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="descriptionp">{{ $projet->descriptionp }}</textarea>

                                                </div>
                                            </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Montant à collecter</label>
                                                        <input type="number" name="montant"  value="{{ $projet->montant }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Lieu du Projet</label>
                                                        <input type="text" name="lieu"  value="{{ $projet->lieu }}" class="form-control"  required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Latitude</label>
                                                        <input type="number" name="latitude"  value="{{ $projet->latitude }}" step="any" class="form-control" required>
                                                    </div>
                                                </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Longitude</label>
                                                            <input type="number" name="longitude"  value="{{ $projet->longitude }}" step="any" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Image en avant</label>
                                                                <input type="file" name="ia"  class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <img src="{{ asset('images/'.$projet->photo) }}" style="height: 100px;">
                                                        </div>

                                                    </div>

                                               {{--   <div class="conteneur">

                                                    <button type="button"  class="btn btn-success addRow">Ajouter Image</button></h2>
                                                </div>  --}}


                                        <div>
                                            <center>
                                                <button type="submit" class="btn btn-success btn btn-lg "> ENREGISTRER</button>
                                            </center>
                                        </div>
                                    </div>

                                    </div>
                        </div>
                    </div>
    {!! Form::close() !!}
                </div>
        </div>

    </div>

@endsection
