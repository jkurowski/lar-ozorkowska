@extends('layouts.homepage', ['body_class' => 'homepage'])
@if ($isAdmin)
    @include('layouts.partials.inline')
@endif
@section('content')
    <main class="home">
        <section class="hero-baner first-sec position-relative d-flex align-items-end">
            <img src="{{ asset('images/baner.jpg') }}" srcset="{{ asset('images/baner_mobile.webp') }} 575w" alt="inwestycja"
                class="img-bg" width="1920" height="970" loading="eager">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 text-center text-sm-start">
                        <div class="section-header">
                            <h1 class= "section-header__title section-header__title--h1">APARTAMENTY PREMIUM <br>w Twojej
                                okolicy</h1>
                            <p class="section-header__subtitle"> Ozorkowska 28</p>
                            <div>
                                <div class="hero-baner__description mt-3 mb-5">
                                    <p class="">Ozorkowska 28 – Blisko natury, kultury i miasta! <br>To więcej niż adres – to komfortowe życie w idealnym miejscu. Tu masz blisko do wszystkiego, co ważne! <br>To lokalizacja, która łączy najlepsze cechy Łodzi – historyczny klimat, nowoczesne udogodnienia i bliskość natury.</p>
                                </div>
                                <a href="{{ route('front.developro.investment.index') }}" class="project-btn">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                    <div class="photo-anim col-lg-6 align-self-end">
                        <img src="{{ asset('images/widok1.png') }}" alt="inwestycja" class="img-hero" width="500"
                            height="850" loading="eager">
                    </div>
                </div>
            </div>
        </section>
        <section class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-xxl-7 mx-auto">
                        <div class="search-container">
                            <form id="homesearch" method="get" action="/mieszkania#mainsearch" class="project-gradient">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="rooms" class="form-label">Ilość pokoi</label>
                                                    <select id="rooms" name="s_pokoje" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="area" class="form-label">Metraż</label>
                                                    <select id="area" name="s_metry" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="floor" class="form-label">Piętro</label>
                                                    <select id="floor" name="s_pietro" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 align-self-center text-center mt-3 mt-sm-0 p-0">
                                        <button type="submit">
                                            <img src="{{ asset('images/search.svg') }}" alt="ikona szukaj" width="65"
                                                 height="65" loading="lazy">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 text-center text-sm-start d-flex align-items-center">
                        <div class="pe-5">
                            <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                                <h2 class="section-header__title">Doświadczony deweloper</h2>
                                <p class="section-header__subtitle">Mieszkania, które spełniają oczekiwania</p>
                            </div>
                            <div class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                                <p>Posiadamy wieloletnie doświadczenie w zarządzaniu projektami budowlanymi na terenie całej
                                    Polski. Wszystkie nasze działania od zawsze cechuje wysoki standard i dbałość o szczegóły.
                                </p>
                            </div>
                            <div class="row my-5">
                                <div class="col-md-4" data-aos="flip-up" data-aos-duration="700" data-aos-delay="500">
                                    <div class="d-flex align-items-center advantages__box mb-4 mb-md-0">
                                        <img src="{{ asset('images/lokalizacja.svg') }}" alt="ikonka" width="48"
                                             height="48" loading="lazy">
                                        <p class="advantages__desc">26 lat doświadczenia</p>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="flip-up" data-aos-duration="700" data-aos-delay="500">
                                    <div class="d-flex align-items-center advantages__box mb-4 mb-md-0">
                                        <img src="{{ asset('images/standard.svg') }}" alt="ikonka" width="48"
                                             height="48" loading="lazy">
                                        <p class="advantages__desc">wysoki standard</p>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="flip-up" data-aos-duration="700" data-aos-delay="500">
                                    <div class="d-flex align-items-center advantages__box mb-4 mb-md-0">
                                        <img src="{{ asset('images/zielone.svg') }}" alt="ikonka" width="48"
                                             height="48" loading="lazy">
                                        <p class="advantages__desc">10 zrealizowanych projektów</p>
                                    </div>
                                </div>
                            </div>
                            <a href="https://pm-invest.com.pl/" class="project-link" target="_blank">Sprawdź</a>
                        </div>
                    </div>
                    <div class="col-xl-5 position-relative d-none d-xl-block">
                        <img src="{{ asset('images/doswiadczony-deweloper.jpg') }}"
                             alt="ludzie"
                             width="580"
                             height="580"
                             loading="lazy"
                             class="w-100 h-auto"
                        >
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
                            <p class="section-header__subtitle">Twój apartament - Twój Vibe!</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">HI TOWER
                            to nowoczesny budynek, który łączy funkcjonalne rozwiązania z nowoczesnym designem.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($images as $p)
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
        </section>
        <section class="available-sec">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-5 mx-auto text-center">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Dostępne apartamenty</h2>
                            <p class="section-header__subtitle">Wejdź w nowoczesne życie - Hi Tower czeka!</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Oferujemy apartamenty 2 i 3 pokojowe o najlepszych układach, w metrażach od 40 m<sup>2</sup> do 55 m<sup>2</sup> oraz jeden wyjątkowy apartament 4 pokojowy o powierzchni 79 m<sup>2</sup>.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="available-slider">
                            @foreach ($similar as $r)
                                <div>
                                    <div class="apartment-box project-gradient">
                                        <div class="apartment-box__name">
                                            <p class="">Hi {{ $r->number }}</p>
                                        </div>
                                        <div class="apartment-box__details row my-4">
                                            <div class="col-sm-4 pe-0">
                                                <p class="">Metraż: {{ $r->area }} m<sup>2</sup></p>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <p class="">Pokoje: {{ $r->rooms }}</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="">{{ $r->floor->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                   class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                   target="_blank">Sprawdź</a>
                                            </div>
                                        </div>
                                        <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                           class="stretched-link" target="_blank"></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row pt-5 pt-sm-0">
                    <div class="col-12 text-center pt-5">
                        <a href="{{ route('front.developro.investment.index') }}" class="project-link">Sprawdź więcej</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-us text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Nasze atuty</h2>
                            <p class="section-header__subtitle">Dlaczego warto nas wybrać</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">HI TOWER
                            to unikatowy projekt w okolicy - jako jedyni oferujemy apartamenty o wysokim standardzie, które
                            dodatkowo będą posiadały szereg nowoczesnych i komfortowych dla przyszłych mieszkańców
                            rozwiązań.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 order-1 order-lg-1 align-self-end" data-aos="fade-up" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list1.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Funkcjonalne rozkłady</p>
                                <p>W naszej ofercie znajdziesz apartamenty  2, 3 i 4 pokojowe o powierzchni użytkowej od 40 m<sup>2</sup> do 79 m<sup>2</sup></p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list2.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Świetna lokalizacja</p>
                                <p>Bliska okolica inwestycji gwarantuje dostęp do wszelkiego rodzaju udogodnień – obiektów handlowo-usługowych, placówek edukacyjnych i zdrowotnych, miejsc do rekreacji i odpoczynku oraz szerokiej oferty gastronomicznej.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list3.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Bezpieczeństwo</p>
                                <p>Teren osiedla ogrodzony i monitorowany z możliwością podglądu przez mieszkańców z systemu wideodomofonów. Drzwi wejściowe do mieszkań o podwyższonej klacie antywłamaniowej.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0 order-3 order-lg-2 position-relative align-self-end">
                        <div class="why-us__img-bg">
                            <div class="blurred-bg">
                                <img src="{{ asset('images/udogodnienia-tlo.png') }}" alt="budynek" class="img-bg" width="438" height="458" loading="lazy">
                            </div>
                        </div>
                        <img src="{{ asset('images/udogodnienia.png') }}" alt="budynek"
                            class="why-us__img d-block mx-auto" width="349" height="606" loading="lazy">
                    </div>
                    <div class="col-lg-4 order-2 order-lg-3 align-self-end" data-aos="fade-up" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list4.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Nowoczesne i komfortowe rozwiązania</p>
                                <p>Możliwość sterowania oświetleniem z jednego miejsca w każdym apartamencie, skrzynki paczkowe, wózkownia oraz rowerowania do dyspozycji mieszkańców.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list5.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Miejsca postojowe</p>
                                <p>Dwukondygnacyjna zamykana automatycznie hala garażowa z wydzielonymi komórkami lokatorskimi.</p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list6.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Części wspólne</p>
                                <p>Niepowtarzalny taras widokowy ze strefą wypoczynku zlokalizowany na 10 piętrze budynku oraz wysoki standard wykończenia holu wejściowego i klatek schodowych.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-cta></x-cta>

        <section class="contact-sec text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Lokalizacja</h2>
                            <p class="section-header__subtitle">Poznaj naszą okolicę</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Nasza inwestycja zlokalizowana jest przy Księżym Młynie, dzięki czemu przyszli mieszkańcy Hi Tower będą mogli korzystać ze wszystkich udogodnień z tym związanych. Atrakcyjna lokalizacja to najważniejsza kwestia podczas wyboru idealnego apartamentu. Warto zainwestować w rozwojową okolicę, która zapewni Ci komfortowe i wygodne życie.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center" data-group="1">
                                    <img src="{{ asset('images/zakupy.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>zakupy</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="2">
                                    <img src="{{ asset('images/edukacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>edukacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="3">
                                    <img src="{{ asset('images/zdrowie.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>zdrowie</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center" data-group="4">
                                    <img src="{{ asset('images/rekreacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>rekreacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="5">
                                    <img src="{{ asset('images/komunikacja.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"> <p>komunikacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center" data-group="6">
                                    <img src="{{ asset('images/rozrywka.svg') }}" alt="ikonka" width="64" height="64" loading="lazy"><p>rozrywka</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 mb-sm-4 mb-lg-0">
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">5 min</b><p>Księży Młyn</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">3 min</b><p>Park Podolskiego</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">7 min</b><p>Park Źródliska Palmiarnia</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/bike.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">10 min</b><p>Monopolis</p>
                            </div>
                        </div>
                        <div class="row mt-0 mt-sm-5">
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">8 min</b><p>Galeria Łódzka</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">11 min</b><p>Off Piotrkowska</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">10 min</b><p>Centrum Nauki i Techniki EC1</p>
                            </div>
                            <div class="col-6 col-sm-3 text-center jak-daleko">
                                <img src="{{ asset('images/car.svg') }}" alt="Ikonka roweru" width="41" height="41" loading="lazy">
                                <b class="d-block w-100">12 min</b><p>Politechnika Łódzka</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2 mt-sm-0">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="choose-size blurred-bg sec-pad position-relative">
            <img src="{{ asset('images/mloda-para.jpg') }}" alt="inwestycja" class="img-bg" width="1920"
                height="1015" loading="lazy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Apartamenty Twoich marzeń</h2>
                            <p class="section-header__subtitle">Komfort - Styl - Funkcjonalność</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Wybierz apartament idealny dla Ciebie - przemyślane układy, przestronne balkony oraz technologia Smart Home.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-11 col-xxl-9 mx-auto">
                        <div class="row">
                            <div class="col-xl-4">
                                <a href="/mieszkania?s_pokoje=2#mainsearch">
                                    <div class="choose-size__box d-flex align-items-end justify-content-center">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                            class="choose-size__box-bg" width="320" height="394">
                                        <img src="{{ asset('images/rozmiar-tlo-hover.svg') }}" alt="grafika"
                                            class="choose-size__box-bg-hover" width="320" height="394">
                                        <img src="{{ asset('images/apartament-2-pokoje.jpg') }}"
                                             alt="Wizualizacja apartamentu 2 pokojowego"
                                             class="choose-size__box-img"
                                             width="250"
                                             height="180">
                                        <img src="{{ asset('images/apartament-2-pokoje.jpg') }}"
                                             alt="Wizualizacja apartamentu 2 pokojowego"
                                             class="choose-size__box-img-hover"
                                             width="250"
                                             height="180">
                                        <p>Apartamenty 2 pokojowe</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="/mieszkania?s_pokoje=3#mainsearch">
                                    <div class="choose-size__box d-flex align-items-end justify-content-center">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                            class="choose-size__box-bg" width="320" height="394">
                                        <img src="{{ asset('images/rozmiar-tlo-hover.svg') }}" alt="grafika"
                                            class="choose-size__box-bg-hover" width="320" height="394">
                                        <img src="{{ asset('images/apartament-3-pokoje.jpg') }}"
                                             alt="Wizualizacja apartamentu 3 pokojowego"
                                             class="choose-size__box-img"
                                             width="250"
                                             height="180">
                                        <img src="{{ asset('images/apartament-3-pokoje.jpg') }}"
                                             alt="Wizualizacja apartamentu 3 pokojowego"
                                             class="choose-size__box-img-hover"
                                             width="250"
                                             height="180">
                                        <p>Apartamenty 3 pokojowe</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="/mieszkania?s_pokoje=4#mainsearch">
                                    <div class="choose-size__box d-flex align-items-end justify-content-center">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                            class="choose-size__box-bg" width="320" height="394">
                                        <img src="{{ asset('images/rozmiar-tlo-hover.svg') }}" alt="grafika"
                                            class="choose-size__box-bg-hover" width="320" height="394">
                                        <img src="{{ asset('images/apartament-4-pokoje.jpg') }}"
                                             alt="Wizualizacja apartamentu 4 pokojowego"
                                             class="choose-size__box-img"
                                             width="250"
                                             height="180">
                                        <img src="{{ asset('images/apartament-4-pokoje.jpg') }}"
                                             alt="Wizualizacja apartamentu 4 pokojowego"
                                             class="choose-size__box-img-hover"
                                             width="250"
                                             height="180">
                                        <p>Apartament 4 pokojowy</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="{{ route('front.developro.investment.index') }}" class="project-link">Zobacz więcej</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
