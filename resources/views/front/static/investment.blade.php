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
                        <li class="breadcrumb-item active" aria-current="page">O inwestycji</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec about-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 mb-5 mb-xl-0 text-center text-sm-start">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">O inwestycji</h1>
                            <p class="section-header__subtitle">Informacje o projekcie</p>
                        </div>
                        <div class="section-desc mb-5">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era.</p>
                        </div>

                        <a href="" class="project-btn">Sprawdź</a>
                    </div>
                    <div class="photo-anim col-xl-6 offset-xl-1 position-relative d-flex  justify-content-end align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/invest1-bg.jpg') }}" alt="budynek" width="555" height="576" loading="lazy">
                        </div>
                        <img src="{{ asset('images/invest1.png') }}" alt="ludzie" width="660" height="660" loading="lazy" class="sec__photo">
                    </div>

                </div>
            </div>
        </section>
        <section class="about-sec reverse-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 order-2 order-xl-1 position-relative d-flex align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/widok3-tlo.jpg') }}" alt="budynek" width="555" height="576" loading="lazy">
                        </div>
                        <img src="{{ asset('images/widok3.png') }}" alt="ludzie" width="660" height="660" loading="lazy" class="sec__photo">
                    </div>
                    <div class="col-xl-5 offset-xl-1 order-1 order-xl-2 mb-5 mb-xl-0 text-center text-sm-end align-self-center">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Lorem ipsum</h2>
                            <p class="section-header__subtitle">Lorem ipsum dolor </p>
                        </div>
                        <div class="section-desc mb-5" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era.</p>
                        </div>

                        <a href="" class="project-btn">Sprawdź</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="numbers-sec blurred-bg sec-pad-big position-relative">
            <img src="{{ asset('images/liczby-tlo.jpg') }}" alt="inwestycja" class="img-bg" width="1920" height="980" loading="lazy">
            <img src="{{ asset('images/widok4.png') }}" alt="inwestycja" class="img-numbers" width="464" height="856" loading="lazy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 text-center text-sm-start mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Apartamenty Ozorkowksa</h2>
                            <p class="section-header__subtitle">Mieszkania, które spełniają oczekiwania</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-xxl-6 text-center">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="number-box">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika" class="number-box__bg" width="204" height="250" loading="lazy">
                                        <div class="number-box__middle">
                                            <p class="number-box__number">45</p>
                                            <p class="number-box__desc">mieszkań</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="number-box">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika" class="number-box__bg" width="204" height="250" loading="lazy">
                                        <div class="number-box__middle">
                                            <p class="number-box__number">2475 m<sup>2</sup></p>
                                            <p class="number-box__desc">metrów</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="number-box">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika" class="number-box__bg" width="204" height="250" loading="lazy">
                                        <div class="number-box__middle">
                                            <p class="number-box__number">45</p>
                                            <p class="number-box__desc">miejsc parkingowych</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery sec-pad-big position-relative">
            <img src="{{ asset('images/graphic.svg') }}" alt="grafika wieżowca" loading="lazy" class="project-graphic">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 mx-auto text-center">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Galeria inwestycji</h2>
                            <p class="section-header__subtitle">Poznaj nas bliżej</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo" loading="lazy">
                            </a>
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
