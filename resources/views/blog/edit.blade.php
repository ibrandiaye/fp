{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')

@section('title', '| Modifier blog')

@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">GESTION BLOG</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('article.index') }}" role="button" class="btn btn-primary">RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        {!! Form::model($blog, ['method'=>'PATCH','route'=>['article.update', $blog->id],'enctype'=>"multipart/form-data"]) !!}
            @csrf
            <div class="row">
                <div class="col-sm-12">


             <div class="card border-success border-0">
                        <div class="card-header bg-info text-center">Porteur de blog</div>
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
                                        <label>Titre</label>
                                        <input type="text" name="titre"  value="{{ $blog->titre }}" class="form-control"  required>
                                    </div>
                                </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="textarea"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="detail">{{ $blog->detail }}</textarea>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Image en avant</label>
                                                <input type="file" name="ia"  class="form-control" >
                                            </div>
                                        </div>


                                        <center>
                                            <button type="submit" class="btn btn-success btn btn-lg "> Modifier</button>
                                        </center>
                            </div>

                            </div>
                        </div>
                    </div>
    {!! Form::close() !!}
                </div>
        </div>



@endsection
