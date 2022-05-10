@extends('layoutb')
@section("content")
<!-- Page title -->
<div class="page-title-section">
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li class="active">Articles</li>
            </ol>
            <h1 class="page-title">Articles</h1>
        </div>
    </div>
</div>

<!-- Recent Cause -->
<div class="recent-cause pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-sm-4 recent-cause-list">
                <img src="{{ asset('blog/'.$blog->image) }}" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="{{ route('front.one.blog', ['id'=>$blog->id]) }}">{{ $blog->titre }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
                    {!! $blogs->links() !!}
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Call to action -->
<div class="call-to-action pd-top-80 pd-bottom-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Want to be a Volentaree?</h2>
                <p>Join With us fo Have any followers yet</p>
                <a class="btn btn-red mg-top-30" href="">Join Now</a>
            </div>
        </div>
    </div>
</div>

@endsection
