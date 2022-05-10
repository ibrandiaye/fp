@extends('layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1>{{ $projet->titre }}</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $projet->titre }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <h3 class="profile-username text-center">{{ $projet->porteur->nom }}</h3>

                <p class="text-muted text-center">{{ $projet->porteur->email }}</p>

                <p class="text-muted text-center">{{$projet->porteur->tel }}</p>
                <p class="text-muted text-center">{{ $projet->porteur->description }}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#desc" data-toggle="tab">Projet</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Donateur</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="desc">
                    <div class="post">
                        <b>Titre du projet</b> : <br>{{ $projet->titre }}
                      </div>

                      <div class="post">
                        <b>Description du projet</b> : <br>{!! $projet->descriptionp !!}
                      </div>
                      <div class="post">
                        <b>Montant du projet</b> : <br><a href="{{  $projet->montant }}"> {{  $projet->lien }}</a>
                      </div>
                      <div class="post">
                        <b>Lieu</b> : <br>{{ $projet->lieu }}
                      </div>
                      <div class="post">
                        <b>Etat</b> : <br>{{ $projet->etat }}
                      </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                      @foreach ($projet->donateurs as $donateur )
                    <div class="post">
                        <b>Donateur </b> : <br>{{ $donateur->nom }}
                      </div>
                      <div class="post">
                        <b>Email</b> : <br>{{ $donateur->email }}
                      </div>
                      <div class="post">
                        <b>Montant</b> : <br>{{ $donateur->montant }}
                      </div>
                      @endforeach

                  </div>

                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
