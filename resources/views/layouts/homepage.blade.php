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
    <link rel='preload' as='style' href="{{ asset('/css/style.min.css') }}">
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
    <fscript src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></fscript>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
    <fscript src="{{ asset('/js/leaflet.js') }}" charset="utf-8"></fscript>
    <fscript src="{{ asset('/js/aos.js') }}" charset="utf-8"></fscript>
    <fscript src="{{ asset('/js/main.js') }}" charset="utf-8"></fscript>

    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>

    @if (settings()->get('popup_status') == 1)
        <div class="modal" tabindex="-1" id="popModal">
            <div class="modal-dialog modal-dialog-centered">
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


        const mapElement = document.querySelector('#map');
        if (mapElement) {
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        observer.unobserve(entry.target);
                        initLeafletMap();
                    }
                });
            });

            observer.observe(mapElement);
        }

        function initLeafletMap() {
            const map = L.map(mapElement).setView([51.74445857171649, 19.487093873682273], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: `&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a
                    href = "https://carto.com/attributions" > CARTO < /a>`,
                subdomains: 'abcd',
                maxZoom: 20
            }).addTo(map);

            L.marker([51.74445857171649, 19.487093873682273]).addTo(map)
                .bindPopup(
                    `<img src="{{ asset('/images/logo.svg') }}" width="73" height="27" alt="logo" class="mb-2"> <br> ul.Ozorkowska 28, <br> 93 - 286 Łódź `
                )
                .openPopup();
        }




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
    {!! settings()->get('scripts_beforebody') !!}
</body>

</html>
