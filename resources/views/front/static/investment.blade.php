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
                <div class="row align-items-center">
                    <div class="col-xl-5 mb-5 mb-xl-0 text-center text-sm-start">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">O inwestycji</h1>
                            <p class="section-header__subtitle">Informacje o projekcie</p>
                        </div>
                        <div class="section-desc mb-5">
                            <p>W budynku zaprojektowaliśmy 29 lokali – 28 nowoczesnych apartamentów i jeden praktyczny lokal usługowy na parterze. Wszystkie apartamenty znajdą się w 10-piętrowym budynku, z którego rozpościera się zachwycający widok na miasto. Oferujemy funkcjonalne układy 2-, 3- i 4-pokojowe o powierzchni od 40 m² do 79 m² – idealne zarówno na dobry start, jak i na rodzinne życie. Otoczenie budynku będzie ogrodzone, bezpieczne i pełne zieleni. Do dyspozycji mieszkańców oddamy także dwupoziomowy garaż, rowerownie ze stacją napraw oraz taras widokowy z przestrzenią do odpoczynku i spotkań.</p>
                        </div>

                        <a href="{{ route('front.developro.investment.index') }}" class="project-btn">Sprawdź</a>
                    </div>
                    <div
                        class="photo-anim col-xl-6 offset-xl-1 position-relative d-flex  justify-content-end align-items-end">

                        <img src="{{ asset('images/invest_hero.jpg') }}" alt="budynek" width="555" height="576"
                            loading="eager">


                    </div>

                </div>
            </div>
        </section>
        <section class="about-sec reverse-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 order-2 order-xl-1 position-relative d-flex align-items-end">

                        <img src="{{ asset('images/widok3-tlo.jpg') }}" alt="budynek" width="555" height="576"
                            decoding="async" class="sec__photo" loading="lazy">


                    </div>
                    <div
                        class="col-xl-5 offset-xl-1 order-1 order-xl-2 mb-5 mb-xl-0 text-center text-sm-end align-self-center">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">PO PROSTU HI</h2>
                            <p class="section-header__subtitle">STANDARD, JAKOŚĆ, LOKALIZACJA</p>
                        </div>
                        <div class="section-desc mb-5" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            <p>Budynek oraz części wspólne zostały zaprojektowane z myślą o wysokim standardzie, komforcie i
                                dbałości o każdy szczegół. Proponowane przez nas rozkłady i metraże uwzględniają potrzeby i
                                oczekiwania nawet najbardziej wymagających klientów. Wszystko to w połączeniu ze świetną
                                lokalizacją tworzy prestiż i unikatowość tego osiedla. Bogata oferta edukacyjna, handlowa,
                                usługowa i gastronomiczna w najbliższej okolicy budynku sprawia, że wszystko to, czego
                                potrzebujesz do komfortowego życia, znajduje się na wyciągnięcie ręki. Dodatkowym atutem
                                jest bliskość Parku Podolskiego, który idealnie sprawdzi się podczas codziennych spacerów i
                                uprawiania sportu na świeżym powietrzu.</p>
                        </div>

                        <a href="{{ route('front.developro.investment.index') }}" class="project-btn">Sprawdź</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="numbers-sec blurred-bg sec-pad-big position-relative">
            <img src="{{ asset('images/liczby-tlo.jpg') }}" alt="inwestycja" class="img-bg" width="1920" height="980"
                loading="lazy">
            <img src="{{ asset('images/widok4.png') }}" alt="inwestycja" class="img-numbers" width="464" height="856"
                loading="lazy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 text-center text-sm-start mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Apartamenty Ozorkowksa</h2>
                            <p class="section-header__subtitle">Apartamenty, które spełniają oczekiwania</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">To zamknięte
                            kameralne osiedle powstało z myślą o młodych i ambitnych osobach, które poszukują swojej
                            spokojnej przystani w dużym mieście.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-xxl-6 text-center">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="number-box">
                                    <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                         class="number-box__bg" width="204" height="250" loading="lazy">
                                    <div class="number-box__middle">
                                        <p class="number-box__number">28</p>
                                        <p class="number-box__desc">apartamentów</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="number-box">
                                    <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                         class="number-box__bg" width="204" height="250" loading="lazy">
                                    <div class="number-box__middle">
                                        <p class="number-box__number">10</p>
                                        <p class="number-box__desc">pięter</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="number-box">
                                    <img src="{{ asset('images/rozmiar-tlo.svg') }}" alt="grafika"
                                         class="number-box__bg" width="204" height="250" loading="lazy">
                                    <div class="number-box__middle">
                                        <p class="number-box__number">25</p>
                                        <p class="number-box__desc">miejsc parkingowych</p>
                                    </div>
                                </div>
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
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            HI TOWER to nowoczesny budynek, który łączy funkcjonalne rozwiązania z nowoczesnym designem
                        </p>
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
        <section class="contact-sec text-center text-sm-start sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center  mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Lokalizacja</h2>
                            <p class="section-header__subtitle">Poznaj naszą okolicę</p>
                        </div>
                        <p class="section-desc" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Nasza
                            inwestycja zlokalizowana jest w samym sercu miasta, dzięki czemu przyszli mieszkańcy HI TOWER
                            będą mogli korzystać ze wszystkich udogodnień z tym związanych. Atrakcyjna lokalizacja to
                            najważniejsza kwestia podczas wyboru idealnego mieszkania. Warto zainwestować w rozwojową
                            okolicę, która zapewni Ci komfortowe i wygodne życie.</p>
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
                                <b class="d-block w-100">7 min</b><p>Park Źródliska / Palmiarnia</p>
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

        <x-cta></x-cta>
    </main>
@endsection
@push('scripts')
    <style>
        .leaflet-marker-icon {
            border-radius: 50%;
        }
    </style>
    <script src="{{ asset('/js/leaflet.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet">
    <script>
        const tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        const icons = [];
        icons[0] = L.icon({
            iconUrl: `{{ asset('images/mapicons/0.png') }}`,
            shadowUrl: '',
            iconSize: [50, 50],
            iconAnchor: [25, 32]
        });
        for (let i = 1; i <= 6; i++) {
            icons[i] = L.icon({
                iconUrl: `{{ asset('images/mapicons/${i}.png') }}`,
                shadowUrl: '',
                iconSize: [40, 40],
                iconAnchor: [20, 32]
            });
        }

        const markers = [];
        @foreach($markers as $m)
        markers.push(L.marker([{{ $m->lat }}, {{ $m->lng }}], {icon: icons[{{ $m->group_id }}]}).bindPopup('{{ $m->name }}'));
        @endforeach
        //markers.push(L.marker([51.74445857171649, 19.487093873682273], {icon: icons[0]}).bindPopup('Inwestycja'));

        const featureGroup = L.featureGroup(markers);

        const mapDiv = document.getElementById("map");
        let map = new L.Map(mapDiv, {
            center: [0, 0],
            zoom: 0,
            layers: [tileLayer, featureGroup]
        });

        map.fitBounds(featureGroup.getBounds(), {
            padding: [50, 50]
        });

        map.on('popupclose', function () {
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        });

        function debounce(func) {
            let timer;
            return function (event) {
                if (timer) clearTimeout(timer);
                timer = setTimeout(func, 100, event);
            };
        }

        window.addEventListener("resize", debounce(function (e) {
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }));

        const alwaysIncludedMarker = L.marker(
            [51.74445857171649, 19.487093873682273],
            {
                icon: icons[0],
                zIndexOffset: 1000
            }
        ).bindPopup('Inwestycja');
        featureGroup.addLayer(alwaysIncludedMarker);

        // Function to filter markers
        function filterMarkers(group) {
            featureGroup.clearLayers();
            markers.forEach(marker => {
                if (group === null || marker.options.icon.options.iconUrl.includes(`/${group}.png`)) {
                    featureGroup.addLayer(marker);
                }
            });
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }

        // Add click event listeners to the divs
        document.querySelectorAll('.map__legend').forEach(div => {
            div.addEventListener('click', function() {
                const group = this.getAttribute('data-group');
                filterMarkers(group);
            });
        });

        // Optionally add a reset button to show all markers
        const resetButton = document.getElementById('resetButton');
        if (resetButton) {
            resetButton.addEventListener('click', function() {
                filterMarkers(null);
            });
        }
    </script>
@endpush
