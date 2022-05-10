@extends('layout')
@section('title', '| ENDA')


@section('content')

<div class="content-wrapper">
        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-info">GESTION DES projets</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('projet.create') }}" role="button" class="btn btn-primary">ENREGISTRER projet</a></li>
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
            </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="col-12">
    <div class="card border-danger border-0">
        <div class="card-header bg-info text-center">LISTE D'ENREGISTREMENT DES projets</div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre du Projet</th>
                            <th>montant</th>
                            <th>lieu</th>
                            <th>Porteur</th>
                            <th>Donateur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($projets as $projet)
                        <tr>
                            <td>{{ $projet->id }}</td>
                            <td>{{ $projet->titre }}</td>
                            <td>{{ $projet->montant }}</td>
                            <td>{{ $projet->lieu }}</td>
                            <td>{{ $projet->porteur->nom }}</td>
                            <td><ul>
                                @foreach ($projet->donateurs as $donateur )
                                    <li>{{ $donateur->nom  }}</li>
                                @endforeach
                            </ul>
                                {{ $projet->montant }}</td>
                            <td>
                                <a href="{{ route('projet.edit', $projet->id) }}" role="button" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('projet.show', $projet->id) }}" role="button" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['projet.destroy', $projet->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                {!! Form::close() !!}



                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>
</div>

@endsection
