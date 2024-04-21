@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pakiety wykończenia</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec packages-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 text-center text-sm-start">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Pakiety wykończenia</h1>
                            <p class="section-header__subtitle">Lorem ipsum dolor sit</p>
                        </div>
                        <div class="section-desc mb-4">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <p> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum.</p>
                        </div>
                        <a href="{{ route('front.contact.index') }}" class="project-btn">Kontakt</a>
                    </div>
                    <div class="col-xl-6 offset-xl-1 position-relative d-flex justify-content-end align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/pakiety-tlo.jpg') }}" alt="grafika" width="340" height="576" loading="eager">
                        </div>
                        <img src="{{ asset('images/pakiety.png') }}" alt="ludzie" width="680" height="680" loading="eager" class="sec__photo">
                    </div>

                </div>
            </div>
        </section>
        <section class="cta sec-pad-big">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-10 col-xxl-8 mx-auto cta__box project-gradient" data-aos="zoom-in" data-aos-duration="700">
                        <div class="cta__img-bg">
                            <img src="{{ asset('images/tlo-cta.jpg') }}" alt="budynek" class="" width="420" height="400" loading="lazy">
                        </div>
                        <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta__img" width="458" height="434" loading="lazy">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="section-header text-center text-sm-start mb-3">
                                    <h2 class="section-header__title">Zapytaj o ofertę</h2>
                                    <p class="section-header__subtitle">Kontakt z nami</p>
                                </div>
                                <div class="cta__box-desc text-center text-sm-start mb-4">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                                </div>
                                <div class="cta__contact">
                                    <div class="d-flex align-items-center me-sm-5 mb-4 mb-md-0">
                                        <img src="{{ asset('images/phone.svg') }}" alt="telefon">
                                        <div class="cta__contact-details">
                                            <p>zadzwoń</p>
                                            <a href="tel:+48705548142">705 548 142</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/email.svg') }}" alt="email">
                                        <div class="cta__contact-details">
                                            <p>napisz</p>
                                            <a href="mailto:ozorkowska@testmail.com">ozorkowska@testmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
