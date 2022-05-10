@extends('layoutb')
@section("content")
<!-- Page title -->
<div class="page-title-section">
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Projets</li>
            </ol>
            <h1 class="page-title">Projets</h1>
        </div>
    </div>
</div>

<!-- Recent Cause -->
<div class="recent-cause pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
            @foreach ($projets as $projet)
            <div class="col-sm-4 recent-cause-list">
                <img src="{{ asset('images/'.$projet->photo) }}" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="{{ route('front.one.projet', ['id'=>$projet->id]) }}">{{ $projet->titre }}</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">{{ $projet->lieu }}</a> </div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">{{ $projet->categorie }}</a></div>
                        <a class="btn mg-top-40">Participer</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            @endforeach
           {{--   <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/1.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Primary school for children</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/2.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Education Need for Everyone</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/3.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">A Amazing serenity has taken</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/4.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Africa Kids Needs More Foods and Water</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/5.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Save life of Children be Crime</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/6.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Donate For Drinking Water</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/7.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Help to Get Education for children</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 56%;"></div>
                        </div>
                        <div class="fund-percent">56%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/8.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Let's Make a Some Different</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 72%;"></div>
                        </div>
                        <div class="fund-percent">72%</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 recent-cause-list">
                <img src="images/causes/9.jpg" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Help promote girl's education in the world</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 49%;"></div>
                        </div>
                        <div class="fund-percent">49%</div>
                    </div>
                </div>
            </div>  --}}
            <div class="col-sm-12">
                <nav class="page-navigation">
                    {{--  <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>  --}}
                    {!! $projets->links() !!}
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
