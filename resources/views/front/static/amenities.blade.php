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
                        <li class="breadcrumb-item active" aria-current="page">Udogodnienia</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec why-us text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Udogodnienia</h1>
                            <p class="section-header__subtitle">Apartamenty Hitower</p>
                        </div>
                        <p class="section-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 order-1 order-lg-1 align-self-end">
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list1.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list2.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list3.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0 order-3 order-lg-2 position-relative align-self-end">
                        <div class="why-us__img-bg">
                            <div class="blurred-bg">
                                <img src="{{ asset('images/udogodnienia-tlo.png') }}" alt="budynek" class="img-bg" width="438" height="458" loading="eager">
                            </div>
                        </div>
                        <img src="{{ asset('images/udogodnienia.png') }}" alt="budynek" class="why-us__img d-block mx-auto" width="349" height="606" loading="eager">
                    </div>
                    <div class="col-lg-4 order-2 order-lg-3 align-self-end">
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list4.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list5.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list6.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-pad attractions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Nasza okolica</h2>
                            <p class="section-header__subtitle">Atrakcje lokalne</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                        <div class="attractions__box">
                            <img src="{{ asset('images/galeria.png') }}" alt="atrakcja" width="320" height="393" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Galeria Łódzka</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">8 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                        <div class="attractions__box">
                            <img src="{{ asset('images/off-p.png') }}" alt="atrakcja" width="320" height="393" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Off Piotrkowska</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">11 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                        <div class="attractions__box">
                            <img src="{{ asset('images/planetarium.png') }}" alt="atrakcja" width="320" height="393" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Planetarium EC1</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">13 min</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
                        <div class="attractions__box">
                            <img src="{{ asset('images/politechnika.png') }}" alt="atrakcja" width="320" height="393" loading="lazy" class="attractions__box-img">
                            <p class="attractions__box-name">Politechnika Łódzka</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/dojazd.svg') }}" alt="auto">
                                <p class="attractions__box-time">14 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-sec text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Lokalizacja</h2>
                            <p class="section-header__subtitle">Poznaj naszą okolicę</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/zakupy.svg') }}" alt="ikonka" width="64" height="64" loading="lazy">
                                    <p>zakupy</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/edukacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy">
                                    <p>edukacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/zdrowie.svg') }}" alt="ikonka" width="64" height="64" loading="lazy">
                                    <p>zdrowie</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/rekreacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy">
                                    <p>rekreacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/komunikacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy">
                                    <p>komunikacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/rozrywka.svg') }}" alt="ikonka" width="64" height="64" loading="lazy">
                                    <p>rozrywka</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 mb-lg-0">
                            <div class="col-12">
                                <p>Dojazd do centrum w …..</p>
                                <p>Dojazd do autostrady A1 w …..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="map"></div>
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
