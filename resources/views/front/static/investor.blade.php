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
        <section class="first-sec investor-sec position-relative sec-pad pt-4">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 d-flex justify-content-center">
                        <img src="{{ asset('images/pminvest-logo.png') }}" alt="Logotyp PM Invest" width="180" height="185">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 text-center text-sm-start">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Inwestor</h1>
                            <p class="section-header__subtitle">Nasze wartości i zasady</p>
                        </div>
                        <div class="section-desc mb-4">
                            <p>Nasza spółka, działająca nieprzerwanie od 1999 roku, może pochwalić się wieloletnim doświadczeniem w zarządzaniu projektami budowlanymi na terenie całej Polski. Tylko w ostatnich 5 latach z sukcesem nadzorowaliśmy 10 inwestycji deweloperskich o łącznej powierzchni 35 000 m², w ramach których powstały 823 mieszkania i 14 lokali usługowych. Stabilność, doświadczenie i sprawdzony zespół sprawiają, że realizacja HI TOWER to pewna inwestycja – zbudowana na solidnych fundamentach. Tworzymy miejsca, w których sami chcielibyśmy mieszkać. Wierzymy, że komfort zaczyna się od zaufania i dokładamy wszelkich starań, by to zaufanie budować każdego dnia.</p>
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
                        <a href="https://pm-invest.com.pl/" class="project-btn" target="_blank">Sprawdź</a>
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
        <section class="investor-sec position-relative sec-pad pb-0">
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

                        <a href="https://pm-invest.com.pl/" class="project-btn" target="_blank">Sprawdź</a>
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
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/PZFD_jestesmyczlonkiem.png') }}" alt="PZFD logo" width="704" height="371" loading="lazy" class="pzfd">
                    </div>
                </div>
            </div>
        </section>

        <x-cta></x-cta>
    </main>
@endsection
