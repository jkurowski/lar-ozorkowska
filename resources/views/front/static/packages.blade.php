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
                            <p class="section-header__subtitle">TWÓJ WYMARZONY APARTAMENT POD KLUCZ</p>
                        </div>
                        <div class="section-desc mb-4">
                            <p>Współpracujemy z firmą WS Budownictwo, która może zająć się wykończeniem Twojego apartamentu pod klucz. Decydując się na usługi tego typu firmy jesteś w stanie oszczędzić wiele czasu i stresu. Fachowcy zajmą się projektem, dostawami, zakupami, zarządzaniem budżetem i remontem. Wprowadź się do swojego wymarzonego apartamentu w terminie i w dobrym nastroju.</p>
                        </div>
                        <a href="{{ asset('uploads/broszura-informacyjna.pdf') }}" target="_blank" class="project-btn">Ulotka</a>
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

                <div class="row mb-5">
                    <div class="col-12 text-center d-flex gap-3 justify-content-center">
                        <a href="/uploads/katalog_pakiet_srebrny_2025.pdf" target="_blank" class="project-btn">Pobierz katalog: pakiet srebrny&nbsp;&nbsp;</a>
                        <a href="/uploads/katalog_pakiet_zloty_2025.pdf" target="_blank" class="project-btn">Pobierz katalog: pakiet złoty&nbsp;&nbsp;</a>
                        <a href="/uploads/katalog_pakiet_platynowy_2025.pdf" target="_blank" class="project-btn">Pobierz katalog: pakiet platynowy&nbsp;&nbsp;</a>
                    </div>
                </div>

                <ul class="nav nav-tabs mb-4" id="galleryTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="gallery1-tab" data-bs-toggle="tab" data-bs-target="#gallery1"
                            type="button" role="tab" aria-controls="gallery1" aria-selected="true">
                            Pakiet srebrny
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery2-tab" data-bs-toggle="tab" data-bs-target="#gallery2"
                            type="button" role="tab" aria-controls="gallery2" aria-selected="false" tabindex="-1">
                            Pakiet złoty
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gallery3-tab" data-bs-toggle="tab" data-bs-target="#gallery3"
                            type="button" role="tab" aria-controls="gallery3" aria-selected="false" tabindex="-1">
                            Pakiet platynowy
                        </button>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="tab-content" id="galleryTabContent">
                    <div class="tab-pane active" id="gallery1" role="tabpanel" aria-labelledby="gallery1-tab">
                        <div class="row justify-content-center">
                            @foreach($silver as $p)
                                <div class="col-lg-4 mt-4">
                                    <div class="border-gradient-photo">
                                        <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-22" title="">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" width="520" height="293">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="gallery2" role="tabpanel" aria-labelledby="gallery2-tab">
                        <div class="row justify-content-center">
                            @foreach($golden as $p)
                                <div class="col-lg-4 mt-4">
                                    <div class="border-gradient-photo">
                                        <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-22" title="">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" width="520" height="293">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="gallery3" role="tabpanel" aria-labelledby="gallery3-tab">
                        <div class="row justify-content-center">
                            @foreach($platinium as $p)
                                <div class="col-lg-4 mt-4">
                                    <div class="border-gradient-photo">
                                        <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-22" title="">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" width="520" height="293">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
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

        <x-cta></x-cta>
    </main>
@endsection
