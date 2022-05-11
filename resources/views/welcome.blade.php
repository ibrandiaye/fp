@extends('layoutb')
@section("content")
<!-- Home Slider -->
<div class="home-slider">
    <div class="item">
        <div class="slider-image">
            <img alt="slide" src="{{ asset('images/slider/slider-1.jpg') }}">
        </div>
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="color: 	#008000;">
                        <h2 style="color: 	#008000;">Ensemble finançons</h2>
                        <H4 style="color: 	#008000;">Les projets de nos villes et territoires.</H4>
                        <a class="btn btn-red" href="#">je contribue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="slider-image">
            <img alt="slide" src="{{ asset('images/slider/slider-2.jpg') }}">
        </div>
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Contrary to popular rorem is simply</h2>
                        <p>Contrary to popular belief, rorem is not simply random text. Contrary to popular belief, rorem is not simply random text.</p>
                        <a class="btn btn-red" href="#">Donet NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="slider-image">
            <img alt="slide" src="{{ asset('images/slider/slider-4.jpg') }}">
        </div>
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Ensemble finançons</h2>
                        <p>Les projets de nos villes et territoires.</p>
                        <a class="btn btn-red" href="#">je contribue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fun Fact -->
<div class="fun-fact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-yelp" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count">0</div>
                        <div class="fact-info">Projets à financer</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-plug" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count">0</div>
                        <div class="fact-info">projets financés</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-forumbee" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count">0</div>
                        <div class="fact-info">Bénéficiaires</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count">0</div>
                        <div class="fact-info">je contribue</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->
<div class="intro pd-top-100 pd-bottom-100 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="intro-title">Qui sommes <span>nous ?</span></h1>
                <p style="font-size: 20px;"> <b>Ye-Fina en abrégé (Y-Fin)</b>  est une plateforme de financement participatif (crowdfunding) crée par Enda ECOPOP ,
                     pour appuyer les projets et programmes de développement des collectivités et des villes africaines.</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Cause -->
<div class="recent-cause pd-top-80 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Projets Récents <i class="fa fa-flag"></i></h2>
            </div>
            @foreach ($projets as $projet)
            <div class="col-sm-4 recent-cause-list">
                <img style="height: 200px;" src="{{ asset('images/'.$projet->photo) }}" alt="cause image">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="{{ route('front.one.projet', ['id'=>$projet->id]) }}">{{ $projet->titre }}</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">{{ $projet->lieu }}</a> </div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">{{ $projet->categorie }}</a></div>
                        <a class="btn mg-top-40" href="{{ route('view.form.donnation', ['id'=>$projet->id]) }}">je contribue</a>
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
            {{--  <div class="col-sm-4 recent-cause-list">
                <img alt="cause" src="images/causes/8.jpg">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#">Children Needs More Foods and Water</a></h3>
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
                <img alt="cause" src="{{ asset('images/causes/7.jpg') }}">
                <div class="recent-cause-summary">
                    <div class="recent-cause-content">
                        <h3 class="recent-cause-title"><a href="#"> Nation to engage in the fight against hunger</a></h3>
                        <div class="cause-location"><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">Nagasaki,</a> <a href="#">Japan</a></div>
                        <div class="cause-tags"><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">Children,</a> <a href="#">Sports,</a> <a href="#">Education</a></div>
                        <a class="btn mg-top-40">Donate</a>
                    </div>
                    <div class="recent-cause-funding">
                        <div class="fund-line">
                            <div class="fill" style="height: 100%;"></div>
                        </div>
                        <div class="fund-percent">100%</div>
                    </div>
                </div>
            </div>  --}}
        </div>
    </div>
</div>

 <!-- Event -->
 {{-- <div class="event-section pd-top-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Upcoming Events <i class="fa fa-star"></i></h2>
            </div>
            <div id="event-carousel" class="event-carousel owl-carousel" style="clear: left;">
                <div class="item equal-height-wrap">
                    <div class="col-sm-6 no-pad equal-height-inner">
                        <img src="{{ asset('images/event/event-1.jpg') }}" alt="carousel">
                    </div>
                    <div class="col-sm-6 no-pad bg equal-height-inner">
                        <div class="slide-detels">
                            <div class="eventcount" id="count1"></div>
                            <h3 class="slide-title">Supporting childhood nutrition programs </h3>
                            <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                            <div class="slide-meta">
                                <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                            </div>
                            <div class="slide-meta">
                                <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                            </div>
                            <div class="speaker">
                                <div class="speaker-text">
                                    <i class="fa fa-bullhorn"></i>Speakers
                                </div>
                                <div class="speaker-thumb">
                                    <img src="{{ asset('images/event/speaker/1.jpg') }}" alt="speaker">
                                    <img src="{{ asset('images/event/speaker/2.jpg') }}" alt="speaker">
                                    <img src="{{ asset('images/event/speaker/3.jpg') }}" alt="speaker">
                                </div>
                            </div>
                            <div class="join-list">
                                <a class="btn" href="#">JOIN NOW</a>
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                    <a href="#"><i class="fa fa-share-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item equal-height-wrap">
                    <div class="col-sm-6 no-pad equal-height-inner">
                        <img src="{{ asset('images/event/event-2.jpg') }}" alt="carousel">
                    </div>
                    <div class="col-sm-6 no-pad bg equal-height-inner">
                        <div class="slide-detels">
                            <div class="eventcount" id="count2"></div>
                            <h3 class="slide-title">Nusquam adipisci hendrerit adcum dicea.</h3>
                            <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                            <div class="slide-meta">
                                <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                            </div>
                            <div class="slide-meta">
                                <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                            </div>
                            <div class="speaker">
                                <div class="speaker-text">
                                    <i class="fa fa-bullhorn"></i>Speakers
                                </div>
                                <div class="speaker-thumb">
                                    <img src="{{ asset('images/event/speaker/4.jpg') }}" alt="speaker">
                                    <img src="{{ asset('images/event/speaker/5.jpg') }}" alt="speaker">
                                    <img src="{{ asset('images/event/speaker/6.jpg') }}" alt="speaker">
                                </div>
                            </div>
                            <div class="join-list">
                                <a class="btn" href="#">JOIN NOW</a>
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                    <a href="#"><i class="fa fa-share-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

<!-- Blog -->
<div id="blog" class="blog-section pd-top-80 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Actualités récentes <i class="fa fa-file-text-o"></i></h2>
            </div>
            @foreach ($blogs as $blog )
            <div class="col-sm-4">
                <div class="blog-single">
                    <div class="thumb">
                        <img alt="blog" style="height: 250px;" src="{{ asset('blog/'.$blog->image) }}">
                    </div>
                    <div class="post-desk">
                       {{--   <div class="post-meta">
                            <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Children</a>, <a href="#">Sports</a>, <a href="#">Education</a></span>
                            <span class="meta-right"><i class="fa fa-comments-o"></i>16</span>
                        </div>  --}}
                        <h3 class="title"><a href="{{ route('front.one.blog', ['id'=>$blog->id]) }}"> {{ $blog->titre }}</a></h3>
                         <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Actualité</a></p>
                    </div>
                </div>
                <!-- /.end blog single -->
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Gallery -->
<div class="home-gallery pd-top-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Nos Partenaires</h2>
            </div>
            <div class="col-sm-12 total-photo">
                <div class="photo-carousel">
                    <div class="item">
                        <img alt="gallery" src="{{ asset('images/gallery/index-gellary-1@2x.jpg') }}">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="{{ asset('images/gallery/index-gellary-2@2x.jpg') }}">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="{{ asset('images/gallery/index-gellary-3@2x.jpg') }}">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="{{ asset('images/gallery/index-gellary-4@2x.jpg') }}">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="{{ asset('images/gallery/index-gellary-5@2x.jpg') }}">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="{{ asset('images/gallery/index-gellary-6@2x.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients -->
{{--  <div class="clients pd-top-80 pd-bottom-85" data-animation="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Bénéficia <i class="fa fa-user"></i></h2>
            </div>
            <div class="col-sm-12">
                <img src="images/partner/1.png" alt="client">
                <img src="images/partner/2.png" alt="client">
                <img src="images/partner/3.png" alt="client">
                <img src="images/partner/4.png" alt="client">
                <img src="images/partner/5.png" alt="client">
            </div>
        </div>
    </div>
</div>
  --}}
{{--  <!-- Call to action -->
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

<!-- Testimonial -->
<div id="testimonials" class="testimonial-section pd-top-80 pd-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Testimonials <i class="fa fa-heart"></i></h2>
            </div>
            <div class="col-sm-12 testimonial-carousel owl-carousel">
                <div class="item">
                    <h3 class="tm-title">Great job I've ever had</h3>
                    <p>
                        Contrary to popular belief, rorem ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    </p>
                    <img src="images/reviewer/1.jpg" alt="client">
                    <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                </div>
                <div class="item">
                    <h3 class="tm-title">First true generator on the Interne</h3>
                    <p>
                        Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>
                    <img src="images/reviewer/2.jpg" alt="client">
                    <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newletter -->
<div class="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="title">Newsletter</h2>
                        <p>Submit email to subscribe for newsletter</p>
                    </div>
                    <div class="col-sm-9">
                        <form class="newsletter-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount">
                                    <div class="input-group-addon search-button">
                                        <button class="btn btn-red" type="submit">SUBSCRIBE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection
