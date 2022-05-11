@extends('layoutb')
@section('content')
<!-- Page title -->
<div class="page-title-section">
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Contact</li>
            </ol>
            <h1 class="page-title">Contact</h1>
        </div>
    </div>
</div>

<!-- contact-section start -->
<div class="contact-section pd-top-100 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <div class="contact-head">
                    <div class="g-maps">
                        <div id="map" style="height: 291px"></div>
                    </div>
                    <h3 class="head-title">Siège social</h3>
                    <p>2 Avenue Cheikh Anta DIOP Complexe Administratif Sicap Point E
                        <br>Bâtiment B-2ème étage
                        <br>
                        <i class="fa fa-phone"></i>+221338596411
                        <br>
                        <i class="fa fa-envelope"></i>ecopop@endaendaecopop.org</p>
                </div>
               {{--   <div class="contact-branch mg-bottom-50">
                    <div class="branch-office col-md-6">
                        <h3 class="head-title">Branch office-1</h3>
                        <p>3295 Columbia Road
                            <br>Denver, CO 80265, USA
                            <br>
                            <i class="fa fa-phone"></i>555.555.1234
                            <br>
                            <i class="fa fa-envelope"></i>hello@example.com</p>
                    </div>
                    <div class="branch-office col-md-6">
                        <h3 class="head-title">Branch office-2</h3>
                        <p>552 Junior Avenue
                            <br>Atlanta, GA 30303, USA
                            <br>
                            <i class="fa fa-phone"></i>555.555.1234
                            <br>
                            <i class="fa fa-envelope"></i>hello@example.com</p>
                    </div>
                </div>  --}}
            </div>
            <div class="col-sm-6 contact-main mg-bottom-50">
                <h3 class="form-title">Formulaire de contact</h3>
                <form class="contact-form" action="#" method="POST">
                    <label class="contact-title" for="message">Message</label>
                    <textarea id="message" name="message" class="input-message" rows="7" cols="30" placeholder="Votre Message........."></textarea>
                    <label class="contact-title" for="name">Nom complet</label>
                    <input id="name" name="name" class="input" type="text" placeholder="Votre Nom Complet" />
                    <label class="contact-title" for="email">Votre Email</label>
                    <input id="email" name="email" class="input" type="text" placeholder="example@gmail.com" />
                    <input class="btn" type="submit" value="SUBMIT" />
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Faq page link -->
<div class="faq-read">
    <p>If any kind of query visit <a href="#">FAQ</a></p>
</div>
@endsection
