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
                            <p class="section-header__subtitle">TWOJE WYMARZONE MIESZKANIE POD KLUCZ</p>
                        </div>
                        <div class="section-desc mb-4">
                            <p>Współpracujemy z firmą WS Budownictwo, która może zająć się wykończeniem Twojego mieszkania
                                pod klucz. Decydując się na usługi tego typu firmy jesteś w stanie oszczędzić wiele czasu i
                                stresu. Fachowcy zajmą się projektem, dostawami, zakupami, zarządzaniem budżetem i remontem.
                                Wprowadź się do swojego wymarzonego mieszkania w terminie i w dobrym nastroju.</p>

                        </div>
                        <a href="{{ route('front.contact.index') }}" class="project-btn">Kontakt</a>
                    </div>
                    <div class="col-xl-6 offset-xl-1 position-relative d-flex justify-content-end align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/pakiety-tlo.jpg') }}" alt="grafika" width="340" height="576"
                                loading="eager">
                        </div>
                        <img src="{{ asset('images/pakiety.png') }}" alt="ludzie" width="680" height="680"
                            loading="eager" class="sec__photo">
                    </div>

                </div>
            </div>
        </section>

        <section class="first-sec gallery sec-pad position-relative">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-5 mx-auto text-center">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Wybierz pakiet</h1>
                            <p class="section-header__subtitle">Apartamenty Ozorkowska</p>
                        </div>
                        <p class="section-desc">Zaprezentowane wizualizacje pakietu złotego i srebrnego, to przykładowy
                            projekt wykonany na podstawie katalogu firmy.</p>
                    </div>
                </div>
                <ul class="nav nav-tabs mb-4" id="galleryTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery1-tab" data-bs-toggle="tab" data-bs-target="#gallery1"
                            type="button" role="tab" aria-controls="gallery1" aria-selected="true">
                            Pakiet srebrny <br> <small>(lokal M2)</small>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery2-tab" data-bs-toggle="tab" data-bs-target="#gallery2"
                            type="button" role="tab" aria-controls="gallery2" aria-selected="false" tabindex="-1">
                            Pakiet złoty <br> <small>(lokal M3)</small>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="tab-content" id="galleryTabContent">
                    <div class="tab-pane active" id="gallery1" role="tabpanel" aria-labelledby="gallery1-tab">
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/s1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/s1_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/s2.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/s2_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/s3.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/s3_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/s4.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/s4_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/s5.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/s5_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="gallery2" role="tabpanel" aria-labelledby="gallery2-tab">
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/z1.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/z1_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/z2.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/z2_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/z3.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/z3_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/z4.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/z4_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/z5.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/z5_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <div class="gallery-photo-container">
                                    <a href="{{ asset('images/z6.jpg') }}" class="glightbox">
                                        <img src="{{ asset('images/z6_thumb.webp') }}" alt="Wizualizacja"
                                            class="gallery-photo" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery sec-pad position-relative">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-5 mx-auto text-center">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Projekty indywidualne</h1>
                            <p class="section-header__subtitle">Apartamenty Ozorkowska</p>
                        </div>
                        <p class="section-desc">Istnieje możliwość wykonania projektu indywidualnego</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/z1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/z1_thumb.webp') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/z2.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/z2_thumb.webp') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/z3.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/z3_thumb.webp') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/z4.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/z4_thumb.webp') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/z5.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/z5_thumb.webp') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta sec-pad-big">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-10 col-xxl-8 mx-auto cta__box project-gradient" data-aos="zoom-in"
                        data-aos-duration="700">
                        <div class="cta__img-bg">
                            <img src="{{ asset('images/tlo-cta.jpg') }}" alt="budynek" class="" width="420"
                                height="400" loading="lazy">
                        </div>
                        <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta__img" width="458"
                            height="434" loading="lazy">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="section-header text-center text-sm-start mb-3">
                                    <h2 class="section-header__title">Zapytaj o ofertę</h2>
                                    <p class="section-header__subtitle">Kontakt z nami</p>
                                </div>
                                <div class="cta__box-desc text-center text-sm-start mb-4">
                                    <p>Skontaktuj się z naszymi doradcami, aby poznać wszystkie szczegóły oferty.</p>
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
                                            <a href="mailto:sprzedaz@ozorkowska28.pl">sprzedaz@ozorkowska28.pl</a>
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
