@extends('layoutb')
@section('content')
<!-- Page title -->
<div class="page-title-section" style="background-image: url('/images/page-title/1.jpg');">
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">{{ $blog->titre }}</li>
            </ol>
            <h1 class="page-title">{{ $blog->titre }}</h1>
        </div>
    </div>
</div>

<!-- blog start -->
<div class="cause-details-section pd-top-100 mg-bottom-100">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cause-details">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">

                                    <div class="cause-summary">
                                        <h3 style="">{{ $blog->titre }}</h3>
                                        {!! $blog->detail !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
