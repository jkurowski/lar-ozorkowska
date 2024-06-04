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
                            <h1 class= "section-header__title section-header__title--h1">Budynek PREMIUM <br>w Twojej
                                okolicy</h1>
                            <p class="section-header__subtitle"> Wybierz apartamenty Hitower</p>
                            <div>
                                <div class="hero-baner__description mt-3 mb-5">
                                    <p class="">Wszystko to, czego potrzebujesz, znajduje się na wyciągnięcie ręki - w
                                        naszej ofercie znajdziesz mieszkania o wysokim standardzie zlokalizowane z dala od
                                        wielkomiejskiego zgiełku</p>
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
                                                    <label for="s_metry" class="form-label">Metraż</label>
                                                    <select id="s_metry" name="s_metry" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                        <option value="30-41" @if(request()->input('s_metry') == '30-41') selected @endif>30 m² - 41 m²</option>
                                                        <option value="41-60" @if(request()->input('s_metry') == '41-60') selected @endif>41 m² - 60 m²</option>
                                                        <option value="60-100" @if(request()->input('s_metry') == '60-100') selected @endif>60 m² - 100 m²</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="s_pokoje" class="form-label">Ilość pokoi</label>
                                                    <select name="s_pokoje" id="s_pokoje" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                        <option value="1" @if(request()->input('s_pokoje') == 1) selected @endif>1 pokojowe</option>
                                                        <option value="2" @if(request()->input('s_pokoje') == 2) selected @endif>2 pokojowe</option>
                                                        <option value="3" @if(request()->input('s_pokoje') == 3) selected @endif>3 pokojowe</option>
                                                        <option value="4" @if(request()->input('s_pokoje') == 4) selected @endif>4 pokojowe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="s_pokojedo" class="form-label">Piętro</label>
                                                    <select name="s_pietro" id="s_pietro" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                        <option value="1" @if(request()->input('s_pietro') == 1) selected @endif>1 piętro</option>
                                                        <option value="2" @if(request()->input('s_pietro') == 2) selected @endif>2 piętro</option>
                                                        <option value="3" @if(request()->input('s_pietro') == 3) selected @endif>3 piętro</option>
                                                        <option value="8" @if(request()->input('s_pietro') == 8) selected @endif>4 piętro</option>
                                                        <option value="11" @if(request()->input('s_pietro') == 11) selected @endif>5 piętro</option>
                                                        <option value="12" @if(request()->input('s_pietro') == 12) selected @endif>6 piętro</option>
                                                        <option value="14" @if(request()->input('s_pietro') == 14) selected @endif>7 piętro</option>
                                                        <option value="15" @if(request()->input('s_pietro') == 15) selected @endif>8 piętro</option>
                                                        <option value="16" @if(request()->input('s_pietro') == 16) selected @endif>9 piętro</option>
                                                        <option value="17" @if(request()->input('s_pietro') == 17) selected @endif>10 piętro</option>
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
                    <div class="col-xl-6 text-center text-sm-start">
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
                                    <img src="{{ asset('images/lokalizacja.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p class="advantages__desc">dogodna lokalizacja</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="flip-up" data-aos-duration="700" data-aos-delay="500">
                                <div class="d-flex align-items-center advantages__box mb-4 mb-md-0">
                                    <img src="{{ asset('images/standard.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p class="advantages__desc">wysoki standard</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="flip-up" data-aos-duration="700" data-aos-delay="500">
                                <div class="d-flex align-items-center advantages__box mb-4 mb-md-0">
                                    <img src="{{ asset('images/zielone.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p class="advantages__desc">zielone przestrzenie</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('front.investor') }}" class="project-link">Czytaj więcej</a>
                    </div>
                    <div class="col-xl-6 position-relative">
                        <div class="advantages__bg blurred-bg">
                            <img src="{{ asset('images/advantages-bg.jpg') }}" alt="budynek" width="360"
                                height="576" loading="lazy">
                        </div>
                        <img src="{{ asset('images/advantages-photo.png') }}" alt="ludzie" width="530"
                            height="530" loading="lazy" class="advantages__photo">
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
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">HI TOWER
                            to nowoczesny budynek, który łączy funkcjonalne rozwiązania z nowoczesnym designem.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g1.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g1.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy" decoding="async">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g2.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g2.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy" decoding="async">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g3.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g3.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy" decoding="async">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g4.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g4.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy" decoding="async">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gallery-photo-container">
                            <a href="{{ asset('images/g5.jpg') }}" class="glightbox">
                                <img src="{{ asset('images/g5.jpg') }}" alt="Wizualizacja" class="gallery-photo"
                                    loading="lazy" decoding="async">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="available-sec">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 mx-auto text-center">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Dostępne mieszkania</h2>
                            <p class="section-header__subtitle">Zamieszkaj w sercu Łodzi</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            Przygotowaliśmy ofertę dla najbardziej wymagających klientów, którzy bezkompromisowo dążą do
                            osiągnięcia swojego celu jakim jest podwyższenie standardu życia.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="available-slider">
                            <div>
                                <div class="apartment-box project-gradient">
                                    <div class="apartment-box__name">
                                        <p class="">Mieszkanie</p>
                                        <p class="">nr 32</p>
                                    </div>
                                    <div class="apartment-box__details row my-4">
                                        <div class="col-sm-4 pe-0">
                                            <p class="">Metraż: 45 m<sup>2</sup></p>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <p class="">Pokoje: 2</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="">Piętro: 4</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href=""
                                                class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                target="_blank">Sprawdź</a>
                                        </div>
                                    </div>
                                    <a href="" class="stretched-link" target="_blank"></a>
                                </div>
                            </div>
                            <div>
                                <div class="apartment-box project-gradient">
                                    <div class="apartment-box__name">
                                        <p class="">Mieszkanie</p>
                                        <p class="">nr 15</p>
                                    </div>
                                    <div class="apartment-box__details row my-4">
                                        <div class="col-sm-4 pe-0">
                                            <p class="">Metraż: 45 m<sup>2</sup></p>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <p class="">Pokoje: 2</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="">Piętro: 4</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href=""
                                                class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                target="_blank">Sprawdź</a>
                                        </div>
                                    </div>
                                    <a href="" class="stretched-link" target="_blank"></a>
                                </div>
                            </div>
                            <div>
                                <div class="apartment-box project-gradient">
                                    <div class="apartment-box__name">
                                        <p class="">Mieszkanie</p>
                                        <p class="">nr 8</p>
                                    </div>
                                    <div class="apartment-box__details row my-4">
                                        <div class="col-sm-4 pe-0">
                                            <p class="">Metraż: 45 m<sup>2</sup></p>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <p class="">Pokoje: 2</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="">Piętro: 4</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href=""
                                                class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                target="_blank">Sprawdź</a>
                                        </div>
                                    </div>
                                    <a href="" class="stretched-link" target="_blank"></a>
                                </div>
                            </div>
                            <div>
                                <div class="apartment-box project-gradient">
                                    <div class="apartment-box__name">
                                        <p class="">Mieszkanie</p>
                                        <p class="">nr 17</p>
                                    </div>
                                    <div class="apartment-box__details row my-4">
                                        <div class="col-sm-4 pe-0">
                                            <p class="">Metraż: 45 m<sup>2</sup></p>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <p class="">Pokoje: 2</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="">Piętro: 4</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href=""
                                                class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                target="_blank">Sprawdź</a>
                                        </div>
                                    </div>
                                    <a href="" class="stretched-link" target="_blank"></a>
                                </div>
                            </div>
                            <div>
                                <div class="apartment-box project-gradient">
                                    <div class="apartment-box__name">
                                        <p class="">Mieszkanie</p>
                                        <p class="">nr 24</p>
                                    </div>
                                    <div class="apartment-box__details row my-4">
                                        <div class="col-sm-4 pe-0">
                                            <p class="">Metraż: 45 m<sup>2</sup></p>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <p class="">Pokoje: 2</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="">Piętro: 4</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href=""
                                                class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small"
                                                target="_blank">Sprawdź</a>
                                        </div>
                                    </div>
                                    <a href="" class="stretched-link" target="_blank"></a>
                                </div>
                            </div>
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
                                <p>W naszej ofercie znajdziesz mieszkania 2, 3 i 4-pokojowe o powierzchni użytkowej od 39
                                    m<sup>2</sup> do 78 m<sup>2</sup></p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list2.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>Świetna lokalizacja</p>
                                <p>
                                    Centrum miasta gwarantuje dostęp do wszelkiego rodzaju udogodnień - punktów handlowych i
                                    usługowych, placówek edukacyjnych, szerokiej oferty gastronomicznej.
                                </p>
                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list3.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>BEZPIECZEŃSTWO</p>
                                <p>Zamknięte osiedle z przewidzianym monitoringiem oraz instalacją videodomofonów.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0 order-3 order-lg-2 position-relative align-self-end">
                        <div class="why-us__img-bg">
                            <div class="blurred-bg">
                                <img src="{{ asset('images/udogodnienia-tlo.png') }}" alt="budynek" class="img-bg"
                                    width="438" height="458" loading="lazy">
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
                                <p>NOWOCZESNE I KOMFORTOWE ROZWIĄZANIA</p>
                                <p>W standardzie wykończenia każdego apartamentu zapewniamy Smart Home oraz klimatyzację.
                                </p>

                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list5.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>MIEJSCA POSTOJOWE</p>
                                <p>Na terenie osiedla przewidziano dwie kondygnacje podziemnej hali garażowej.
                                </p>

                            </div>
                        </div>
                        <div class="why-us__list d-flex align-items-start">
                            <img src="{{ asset('images/list6.svg') }}" alt="ikonka">
                            <div class="why-us__list-desc">
                                <p>CZĘŚCI WSPÓLNE</p>
                                <p>Oprócz wysokiego standardu korytarzy i klatek schodowych zaprojektowaliśmy także
                                    rowerownię oraz taras widokowy ze strefą wypoczynku.
                                </p>
                            </div>
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
                                    <h2 class="section-header__title">Zapytaj o mieszkanie</h2>
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
        <section class="contact-sec text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Lokalizacja</h2>
                            <p class="section-header__subtitle">Poznaj naszą okolicę</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            Nasza inwestycja zlokalizowana jest w samym sercu miasta, dzięki czemu przyszli mieszkańcy HI
                            TOWER będą mogli korzystać ze wszystkich udogodnień z tym związanych. Atrakcyjna lokalizacja to
                            najważniejsza kwestia podczas wyboru idealnego mieszkania. Warto zainwestować w rozwojową
                            okolicę, która zapewni Ci komfortowe i wygodne życie.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/zakupy.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p>zakupy</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/edukacja.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p>edukacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/zdrowie.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p>zdrowie</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/rekreacja.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p>rekreacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/komunikacja.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
                                    <p>komunikacja</p>
                                </div>
                                <div class="map__legend d-flex align-items-center">
                                    <img src="{{ asset('images/rozrywka.svg') }}" alt="ikonka" width="64"
                                        height="64" loading="lazy">
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
        <section class="choose-size blurred-bg sec-pad position-relative">
            <img src="{{ asset('images/mloda-para.jpg') }}" alt="inwestycja" class="img-bg" width="1920"
                height="1015" loading="lazy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Mieszkanie Twoich marzeń</h2>
                            <p class="section-header__subtitle">Dostosowane do Twoich potrzeb</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Szeroka
                            oferta apartamentów pozwala dostosować się do Twoich indywidualnych potrzeb, oczekiwań i planów.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-11 col-xxl-9 mx-auto">
                        <div class="row">
                            <div class="col-xl-4">
                                <a href="%placeholder%">
                                    <div class="choose-size__box d-flex align-items-end justify-content-center">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                            class="choose-size__box-bg" width="320" height="394">
                                        <img src="{{ asset('images/rozmiar-tlo-hover.svg') }}" alt="grafika"
                                            class="choose-size__box-bg-hover" width="320" height="394">
                                        <img src="{{ asset('images/wiz-kontur.png') }}" alt="grafika"
                                            class="choose-size__box-img" width="250" height="180">
                                        <img src="{{ asset('images/wiz-kolor.png') }}" alt="grafika"
                                            class="choose-size__box-img-hover" width="250" height="180">

                                        <p>Mieszkania do 40 m<sup>2</sup></p>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="%placeholder%">
                                    <div class="choose-size__box d-flex align-items-end justify-content-center">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                            class="choose-size__box-bg" width="320" height="394">
                                        <img src="{{ asset('images/rozmiar-tlo-hover.svg') }}" alt="grafika"
                                            class="choose-size__box-bg-hover" width="320" height="394">
                                        <img src="{{ asset('images/wiz-kontur-2.png') }}" alt="grafika"
                                            class="choose-size__box-img" width="250" height="180">
                                        <img src="{{ asset('images/wiz-kolor-2.png') }}" alt="grafika"
                                            class="choose-size__box-img-hover" width="250" height="180">

                                        <p>Mieszkania do 40 m<sup>2</sup></p>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="%placeholder%">
                                    <div class="choose-size__box d-flex align-items-end justify-content-center">
                                        <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                            class="choose-size__box-bg" width="320" height="394">
                                        <img src="{{ asset('images/rozmiar-tlo-hover.svg') }}" alt="grafika"
                                            class="choose-size__box-bg-hover" width="320" height="394">
                                        <img src="{{ asset('images/wiz-kontur-3.png') }}" alt="grafika"
                                            class="choose-size__box-img" width="250" height="180">
                                        <img src="{{ asset('images/wiz-kolor-3.png') }}" alt="grafika"
                                            class="choose-size__box-img-hover" width="250" height="180">

                                        <p>Mieszkania do 40 m<sup>2</sup></p>

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
