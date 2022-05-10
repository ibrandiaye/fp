{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')

@section('title', '| Create Permission')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Enregistrer Donateur</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Enregistrer Donateur</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class='fa fa-edit'></i> Modifier donateur</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">

                <div class='col-lg-5 offset-md-4'>

                    {{ Form::model($donateur,array('route' => array('donateur.update', $donateur->id), 'method' => 'PUT')) }}
                    @csrf
                    <div class="form-group">
                        {{ Form::label('nom', 'Nom') }}
                        {{ Form::text('nom',null, array('class' => 'form-control','required' => 'true')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, array('class' => 'form-control','required' => 'true')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('montant', 'Montant') }}
                        {{ Form::number('montant', null, array('class' => 'form-control','required' => 'true')) }}
                    </div>
                    <div class="form-group">
                    <label>Projet</label>
                        <select class="form-control" name="projet_id" required="">
                            <option value="">Projet</option>
                            @foreach ($projets as $projet )
                            <option value="{{ $projet->id }}" {{ $projet->id==$donateur->projet_id ? 'selected' :'' }}>{{ $projet->titre }}</option>
                            @endforeach

                        </select>
                    </div>
                    {{ Form::submit('Enregitrer', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}

                </div>
            </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>




            </div>
        </section>
    </div>
@endsection
