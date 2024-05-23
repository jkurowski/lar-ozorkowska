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
                        <li class="breadcrumb-item active" aria-current="page">Inwestor</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec investor-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 text-center text-sm-start">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Inwestor</h1>
                            <p class="section-header__subtitle">Nasze wartości i zasady</p>
                        </div>
                        <div class="section-desc mb-4">
                            <p>Nasza spółka, której początki sięgają 1999 roku, posiada wieloletnie doświadczenie w
                                zarządzaniu projektami budowlanymi na terenie całego kraju. W ostatnich 5 latach
                                zarządzaliśmy 10 projektami deweloperskimi o powierzchni 35.000 m2 (na co składa się 823
                                lokali mieszkalnych i 14 lokali użytkowych). Wyróżnia nas:</p>
                        </div>
                        <div class="row our-princples mb-2">
                            <div class="col-md-6 d-flex align-items-center mb-4">
                                <img src="{{ asset('images/dbalosc.svg') }}" alt="ikonka" width="66" height="66"
                                    loading="eager">
                                <p>dbałość o klienta</p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-4">
                                <img src="{{ asset('images/jakosc.svg') }}" alt="ikonka" width="66" height="66"
                                    loading="eager">
                                <p>jakość wykonania</p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-4">
                                <img src="{{ asset('images/rozwoj.svg') }}" alt="ikonka" width="66" height="66"
                                    loading="eager">
                                <p>rozwój społeczności</p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center mb-4">
                                <img src="{{ asset('images/rzetelnosc.svg') }}" alt="ikonka" width="66" height="66"
                                    loading="eager">
                                <p>rzetelność</p>
                            </div>
                        </div>
                        <a href="{{ route('front.developro.investment.index') }}" class="project-btn">Sprawdź</a>
                    </div>
                    <div
                        class="photo-anim col-xl-6 offset-xl-1 position-relative d-flex justify-content-end align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/inwestor-tlo.jpg') }}" alt="budynek" width="340" height="576"
                                loading="eager">
                        </div>
                        <img src="{{ asset('images/inwestor.png') }}" alt="ludzie" width="550" height="550"
                            loading="eager" class="sec__photo">
                    </div>

                </div>
            </div>
        </section>
        <section class="investor-sec investor-sec-reverse position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 position-relative order-2 order-xl-1 d-flex align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/partnerstwo-tlo.jpg') }}" alt="budynek" width="340"
                                height="576" loading="lazy">
                        </div>
                        <img src="{{ asset('images/partnerstwo.png') }}" alt="ludzie" width="550" height="550"
                            loading="lazy" class="sec__photo">
                    </div>
                    <div class="col-xl-5 offset-xl-1 order-1 order-xl-2  text-center text-sm-end align-self-center">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">partnerstwo</h2>
                            <p class="section-header__subtitle">Współpraca z podwykonawcami</p>
                        </div>
                        <div class="section-desc mb-5" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            <p>Siłą naszej firmy są ludzie, którzy ją tworzą i z nią współpracują. Skupiamy wiedzę i doświadczenie w prowadzeniu przedsięwzięć budowlanych architektów, kierowników projektu, kierowników budowy, inżynierów kontraktu, inżynierów budowy oraz specjalistów branżowych i bardzo dobrych wykonawców. Bez nich proces budowlany nie byłby możliwy do zrealizowania w odpowiedniej jakości i terminach.</p>
                        </div>

                        <a href="{{ route('front.developro.investment.index') }}" class="project-btn">Sprawdź</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="investor-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 align-self-center text-center text-sm-start">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">kompleksowość</h2>
                            <p class="section-header__subtitle">zarządzanie nieruchomościami</p>
                        </div>
                        <div class="section-desc mb-5" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            <p>Przedmiot naszej działalności obejmuje cały zakres zarządzania projektami - planowanie (w tym analiza parametrów technicznych i ekonomicznych projektu), opracowanie budżetów i harmonogramów inwestycji, projektowanie z uzyskaniem pozwolenia na budowę, wybór wykonawców i ich kontraktowanie, kierowanie procesem budowlanym, nadzorowanie prac i rozliczanie wszystkich uczestników procesu, odbiory i uzyskanie pozwolenia na użytkowanie, rozliczenie kontraktu oraz innych czynności związanych z zakończeniem procesu inwestycyjnego.</p>
                        </div>

                        <a href="{{ route('front.developro.investment.index') }}" class="project-btn">Sprawdź</a>
                    </div>
                    <div class="col-xl-6 offset-xl-1  position-relative d-flex justify-content-end align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/kompleksowosc-tlo.jpg') }}" alt="budynek" width="340"
                                height="576" loading="lazy">
                        </div>
                        <img src="{{ asset('images/kompleksowosc.png') }}" alt="ludzie" width="550" height="550"
                            loading="lazy" class="sec__photo">
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
