@extends('layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Donateurs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Liste des Donateurs</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Donateurs</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <div class="panel-heading">
                                        <a href="{{route('donateur.create') }}" class="btn btn-info float-right" style="margin-right: 3px;"><i class="fas fa-plus"></i></a></div>
                                    <div class="table-responsive">
                                        <table id="example1"  class="table table-bordered table-striped">

                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Montant</th>
                                                <th>Titre projet</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($donateurs as $donateur)
                                                <tr>
                                                    <td>{{$donateur->nom}}</td>
                                                    <td>{{$donateur->email}}</td>
                                                    <td>{{$donateur->montant}}</td>
                                                    <td>{{$donateur->projet->titre}}</td>
                                                    <td>

                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['donateur.destroy', $donateur->id] ]) !!}
                                                        <a href="{{ URL::to('donateur/'.$donateur->id.'/edit') }}" class="btn btn-warning pull-left" ><i class="far fa-edit"></i></a>
                                                        <button class="btn btn-danger border-left-0 border" type="submit">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>


                                </div>

                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
