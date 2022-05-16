@extends('layoutb')
@section('content')
<!-- Page title -->
<div class="page-title-section" style="background-image: url('/images/page-title/1.jpg');">
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">{{ $projet->titre }}</li>
            </ol>
            <h1 class="page-title">{{ $projet->titre }}</h1>
        </div>
    </div>
</div>

<!-- blog start -->
<div class="cause-details-section pd-top-100 mg-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3" id="cause-sticky">
                <div class="sidebar-left">
                    <a class="btn-donate" href="{{ route('view.form.donnation', ['id'=>$projet->id]) }}">je contribue</a>
                    <div class="cause-leader hidden-xs">
                        <h3>Collectivité <br> {{ $projet->lieu }}</h3>
                        {{--  <div class="thumb">
                            <img src="images/our-team/1.jpg" alt="leader">
                        </div>  --}}
                        <h4>Personne Contact</h4>
                        <span class="cause-mail"><i class="fa fa-user-o"></i>{{ $projet->porteur->nom }}</span>
                        <br><span class="cause-mail"><i class="fa fa-envelope-o"></i>{{ $projet->porteur->email }}</span>
                        <br><span class="cause-mail"><i class="fa fa-phone"></i>{{ $projet->porteur->tel }}</span>
                        <br><span class="cause-mail"><i class="fa fa-tag"></i> {!! $projet->porteur->description !!}</span>
                        {{--  <div class="social">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square"></i></a>
                        </div>  --}}
                    </div>
                    <div class="cause-leader hidden-xs">
                        <h3>Donateurs</h3>
                        @foreach ($projet->donateurs as $donateur )
                        <span class="cause-mail">{{ $donateur->nom }} Montant: {{ $donateur->montant }}</span>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cause-details">
                            <div class="row">
                                <div class="col-sm-6 col-md-8">
                                    <div class="meta-list">
                                        <span><a href="#"><i class="fa fa-qrcode"></i>   {{ $projet->id }}</a></span>
                                    </div>
                                    <div class="tag">
                                        <span><a href="#"><i class="fa fa-globe"></i>{{ $projet->lieu }}</a></span>
                                    </div>
                                    <div class="catagory">
                                        <i class="fa fa-folder-open" aria-hidden="true"></i> <a href="#">{{ $projet->categorie->nomc }}</a>
                                    </div>
                                    <div class="cause-summary">
                                        <h3 style="">Description du projet</h3>
                                        {!! $projet->descriptionp !!}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="fund">
                                        <div class="fund-top">
                                            <h5 class="fund-title">Objectif Final</h5>
                                            <h3>{{ $projet->montant }} cfa</h3>
                                        </div>
                                        <div class="fund-bottom">
                                            <h5 class="fund-title">Montant collectés</h5>
                                            <h3> 500000 Fcfa</h3>
                                            <div class="fund-progress">
                                                <div class="media">
                                                    <div class="media-left">
                                                        {{( 500000/$projet->montant)*100 }}%
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="x-fundline">
                                                            <div class="x-fill" style="width:  {{( 500000/$projet->montant)*100 }}%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          {{--   <div class="row">
                                <div class="col-sm-12">
                                    <div class="cause-goal">
                                        <h3>Goals</h3>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief.</p>
                                    </div>
                                    <div class="cause-feature">
                                        <h3>Challenge</h3>
                                        <ul class="feature-list">
                                            <li><i class="fa fa-user"></i> Contrary to popular belief,</li>
                                            <li><i class="fa fa-cog"></i>Latin literature from 45 BC, making it over 2000 years old. Contrary to belief</li>
                                            <li><i class="fa fa-bookmark"></i>Editors now use as their default model text, and a search for will uncover many web sites still in their infancy.</li>
                                            <li><i class="fa fa-map-marker"></i>Model text, and a search for will uncover many web sites still in their infancy.</li>
                                            <li><i class="fa fa-thumbs-o-up"></i>Many web sites still in their infancy</li>
                                        </ul>
                                    </div>
                                    <div class="cause-solution">
                                        <h3>Solution</h3>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief. is not simply random text. It has roots in a piece45 BC, making it over 2000 years old. Contrary to popular belief.</p>
                                    </div>
                                    <div class="cause-map">
                                        <h3>Cause area</h3>
                                        <div class="location">
                                            <i class="fa fa-map-marker"></i>Model text, and a search for will uncover many web sites still in their infancy.
                                        </div>
                                        <div class="g-maps">
                                            <div id="map" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div id="accordion" class="cause-according" role="tablist" aria-multiselectable="true">
                                <h3>Report</h3>
                                <div id="accordian" class="page-accordian">
                                    <h4 class="accordian-title">This book is a treatise on the theory of ethics</h4>
                                    <div class="accordian-description">
                                        <div class="date">
                                            <span><i class="fa fa-calendar-o"></i>29 Jan, 2017</span>
                                            <span><i class="fa fa-clock-o"></i>10:07am</span>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at College in Virginia, looked up one of the more obscure Latin words.</p>
                                        <div class="mg-bottom-30">
                                            <img src="images/causes/inner-cause.jpg" alt="image">
                                            <div class="thumb-caption">Discovered the ource of "de Finibus Bonorum et "</div>
                                        </div>
                                        <p>Contrary to popular belief, is not simply random text. It has roots in a piece of classical, from a passage, and going through the cites of the word in classical literature, discovered the ource of "de Finibus Bonorum et " (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, " dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief.Lorem Ipsum is not simply random text. It has roots in a piece45 BC, making it over 2000 years old. Contrary to popular belief.</p>
                                    </div>
                                    <h4 class="accordian-title">At vero eos et accusamus et iusto odio dignissimos ducimus</h4>
                                    <div class="accordian-description">
                                        <div class="date">
                                            <span><i class="fa fa-calendar-o"></i>29 Jan, 2017</span>
                                            <span><i class="fa fa-clock-o"></i>10:07am</span>
                                        </div>
                                        <p>1914 translation by H. Rackham "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat." 1914 translation by H. Rackham
                                        </p>
                                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
                                    </div>
                                    <h4 class="accordian-title">Contrary to popular belief, making it over 2000 years old.</h4>
                                    <div class="accordian-description">
                                        <div class="date">
                                            <span><i class="fa fa-calendar-o"></i>29 Jan, 2017</span>
                                            <span><i class="fa fa-clock-o"></i>10:07am</span>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at College in Virginia, looked up one of the more obscure Latin words.</p>
                                        <div class="mg-bottom-30">
                                            <img src="images/sitebar/06.jpg" alt="image">
                                            <div class="thumb-caption">Discovered the ource of "de Finibus Bonorum et "</div>
                                        </div>
                                        <p>Contrary to popular belief, is not simply random text. It has roots in a piece of classical, from a passage, and going through the cites of the word in classical literature, discovered the ource of "de Finibus Bonorum et " (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, " dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief.Lorem Ipsum is not simply random text. It has roots in a piece45 BC, making it over 2000 years old. Contrary to popular belief.</p>
                                    </div>
                                    <h4 class="accordian-title">1914 translation by H. Rackham</h4>
                                    <div class="accordian-description">
                                        <div class="date">
                                            <span><i class="fa fa-calendar-o"></i>29 Jan, 2017</span>
                                            <span><i class="fa fa-clock-o"></i>10:07am</span>
                                        </div>
                                        <p> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat." 1914 translation by H. Rackham
                                        </p>
                                    </div>
                                </div>
                            </div>  --}}
                            <div class="cause-gallery">
                                <h3>Images</h3>
                                <div class="row">
                                    @foreach ($projet->images as $image)
                                    <div class="col-sm-4">
                                        <img src="{{ asset('galerie/'.$image->image) }}" alt="image">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="row mg-top-20">
            <div class="col-sm-12">
                <h3 class="single-related-cause-title">Recent Causes</h3>
                <div class="single-recent-cause-wrap">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-related-cause">
                                <img src="images/causes/6.jpg" alt="blog">
                                <h3 class="title"><a href="#">Get doctor ideal cause festival in 2017</a></h3>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-related-cause">
                                <img src="images/causes/7.jpg" alt="blog">
                                <h3 class="title"><a href="#">Build School for poor children</a></h3>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-related-cause">
                                <img src="images/causes/8.jpg" alt="blog">
                                <h3 class="title"><a href="#">Help promote girl's education in the world</a></h3>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-related-cause">
                                <img src="images/causes/9.jpg" alt="blog">
                                <h3 class="title"><a href="#">Children needs more foods and water</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>  --}}
    </div>
</div>

<!-- Call to action -->
{{--  <div class="call-to-action pd-top-80 pd-bottom-100">
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
</div>  --}}
@endsection
