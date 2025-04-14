<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {!! settings()->get('scripts_head') !!}

    <title>{{ settings()->get('page_title') }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get('page_description') }}">
    <meta name="robots" content="{{ settings()->get('page_robots') }}">
    <meta name="author" content="{{ settings()->get('page_author') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    {{-- Prefetching --}}
    <link rel="DNS-prefetch" href="//fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as='style'
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap">
    <link rel='preload' as='style' href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel='preload' as='style' href="{{ asset('/css/style.min.css') }}?v=0804">
    <link rel='preload' as='image' href="{{ asset('images/baner.jpg') }}"
        imagesrcset="{{ asset('images/baner_mobile.webp') }} 575w">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- Delaying script --}}
    <style>
        fscript {
            display: none !important;
        }
    </style>
    <script>
        let scriptsExecuted = false;
        const head = document.getElementsByTagName('head')[0] || document.documentElement;
        const autoLoad = setTimeout(initScripts, 3000);

        function executeScripts() {
            var fscripts = document.querySelectorAll('fscript');
            [].forEach.call(fscripts, function(fscript) {
                var script = document.createElement('script');
                script.type = 'text/javascript';

                if (fscript.hasAttributes()) {
                    for (var attributeKey in fscript.attributes) {
                        if (fscript.attributes.hasOwnProperty(attributeKey)) {
                            script[fscript.attributes[attributeKey].name] = fscript.attributes[attributeKey]
                                .value || true;
                        }
                    }
                } else {
                    script.appendChild(document.createTextNode(fscript.innerHTML));
                }

                head.insertBefore(script, head.firstChild);
            });
        }

        function initScripts() {
            if (scriptsExecuted) {
                return;
            }

            clearTimeout(autoLoad);

            scriptsExecuted = true;

            setTimeout(function() {
                if ('requestIdleCallback' in window) {
                    requestIdleCallback(executeScripts, {
                        timeout: 100
                    });
                } else {
                    executeScripts();
                }
            }, 1000);
        }

        window.addEventListener('scroll', function() {
            initScripts();
        }, false);

        document.onclick = function() {
            initScripts();
        };
    </script>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">
    @stack('style')
</head>

<body class="{{ !empty($body_class) ? $body_class : '' }}" data-lazy-background="{{ asset('images/kreski-tlo.png') }}"
    style="background-position: center -16rem, center 1900px; background-repeat: no-repeat;">
    {!! settings()->get('scripts_afterbody') !!}

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.cookies')

    <!-- Styles -->

    <link href="{{ asset('/css/slick.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('/css/animations.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/aos.min.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
    <fscript src="{{ asset('/js/leaflet.js') }}" charset="utf-8"></fscript>
    <script src="{{ asset('/js/aos.js') }}" charset="utf-8"></script>
    <fscript src="{{ asset('/js/main.js') }}" charset="utf-8"></fscript>

    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>

    @if (settings()->get('popup_status') == 1)
        <div class="modal" tabindex="-1" id="popModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {!! settings()->get('popup_text') !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('p').forEach(function(p) {
                p.innerHTML = p.innerHTML.replace(/ (\w) /g, ' $1&nbsp;');
            });
        });

        $(document).on('scroll', function() {
            AOS.init({
                disable: 'mobile'
            });
        })
        $(document).ready(function() {
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition: true,
                promptPosition: "topRight:-137px"
            });
            @if (settings()->get('popup_status') == 1)
                const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                    keyboard: false
                });
            @endif
            @if ($popup == 1)
                popModal.show();
                setTimeout(function() {
                    popModal.hide();
                }, {{ settings()->get('popup_timeout') }});
            @endif

            // Get the CSRF token from the meta tag
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            function fetchFilters() {
                let rooms = $('#rooms').val();
                let area = $('#area').val();
                let floor = $('#floor').val();

                $.ajax({
                    url: "{{ route('front.developro.investment.property.filter') }}",
                    method: 'GET',
                    data: {
                        rooms: rooms,
                        area: area,
                        floor: floor
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        // Update select options based on response
                        updateRooms('#rooms', response.filters.rooms, rooms);
                        updateSelect('#area', response.filters.areas, area);
                        updateFloorSelect('#floor', response.filters.floors, floor);
                    }
                });
            }

            function updateSelect(selector, options, selectedValue) {
                options = options.map(option => option.toString());
                selectedValue = selectedValue.toString();
                $(selector).html('<option value="">Wszystkie</option>');
                options.forEach(option => {
                    let selected = option === selectedValue ? 'selected' : '';
                    $(selector).append(`<option value="${option}" ${selected}>${option}</option>`);
                });
            }

            function updateRooms(selector, options, selectedValue) {
                options = options.map(option => option.toString());
                selectedValue = selectedValue.toString();
                $(selector).html('<option value="">Wszystkie</option>');
                options.forEach(option => {
                    let selected = option === selectedValue ? 'selected' : '';
                    let label = option === '1' ? 'Lokal usługowy' : option;
                    $(selector).append(`<option value="${option}" ${selected}>${label}</option>`);
                });
            }

            function updateFloorSelect(selector, options, selectedValue) {
                $(selector).html('<option value="">Wszystkie</option>');
                $.each(options, function(key, option) {
                    let id = option;
                    let value = option === 'object' ? option : key;
                    let selected = id === parseInt(selectedValue) ? 'selected' : '';
                    let label = (option === 5) ? 'Parter' : `Piętro ${value}`;
                    $(selector).append(`<option value="${option}" ${selected}>${label}</option>`);
                });
            }

            $('#rooms, #area, #floor').on('change', function() {
                fetchFilters();
            });

            // Initial fetch
            fetchFilters();
        });

        @if (session('success') || session('warning') || $errors->any())
            $(window).load(function() {
                const aboveHeight = $('header').outerHeight();
                $('html, body').stop().animate({
                    scrollTop: $('.validateForm').offset().top - aboveHeight
                }, 1500, 'easeInOutExpo');
            });
        @endif
    </script>
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
    {!! settings()->get('scripts_beforebody') !!}
</body>

</html>
