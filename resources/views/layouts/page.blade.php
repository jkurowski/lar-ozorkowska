<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {!! settings()->get('scripts_head') !!}

    <title>
        @hasSection('seo_title')
            @yield('seo_title')@else{{ settings()->get('page_title') }} - @yield('meta_title')
        @endif
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="@hasSection('seo_description')
@yield('seo_description')@else{{ settings()->get('page_description') }}
@endif">
    <meta name="robots"
        content="@hasSection('seo_robots')
@yield('seo_robots')@else{{ settings()->get('page_robots') }}
@endif">
    <meta name="author" content="{{ settings()->get('page_author') }}">

    @hasSection('opengraph')
        @yield('opengraph')
    @endif
    @hasSection('schema')
        @yield('schema')
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Prefetching --}}
    <link rel="DNS-prefetch" href="//fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as='style'
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap">
    <link rel='preload' as='style' href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel='preload' as='style' href="{{ asset('/css/style.min.css') }}">

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

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/glightbox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">

    @stack('style')

</head>

<body class="{{ !empty($body_class) ? $body_class : '' }}" data-lazy-background="{{ asset('images/kreski-tlo.png') }}"
    style="background-position: center -16rem, center 1900px; background-repeat: no-repeat;">
    {!! settings()->get('scripts_afterbody') !!}

    <div id="pagecontent">
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')
    </div>

    @include('layouts.partials.cookies')

    @auth
        @include('layouts.partials.inline')
    @endauth

    <!-- Styles -->
    <link href="{{ asset('/css/slick.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('/css/animations.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('/css/aos.min.css') }}" rel="stylesheet" media="screen and (min-width: 768px)">


    <!-- jQuery -->

    <script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
    <fscript src="{{ asset('/js/leaflet.js') }}" charset="utf-8"></fscript>
    <script src="{{ asset('/js/aos.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/main.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/glightbox.min.js') }}" charset="utf-8"></script>

    @stack('scripts')

    @if (settings()->get('popup_exit_status') == 1)
        <div class="modal" tabindex="-1" id="popModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {!! settings()->get('popup_exit_text') !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script type="text/javascript" defer>
        window.$ = jQuery;
        document.addEventListener('DOMContentLoaded', () => {

            document.querySelectorAll('p').forEach(function(p) {
                p.innerHTML = p.innerHTML.replace(/ (\w) /g, ' $1&nbsp;');
            });
            const glightbox = new GLightbox()
        })

        $(document).on('scroll', function() {
            AOS.init({
                disable: 'mobile'
            });
        })
        $(document).ready(function() {
            @if (settings()->get('popup_exit_status') == 1)
                $(document).mousemove(function(e) {
                    if (e.pageY <= 5) {
                        const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                            keyboard: false
                        });
                        const trueFalse = ($('body').hasClass('modal-open'));
                        if (trueFalse === false) {
                            popModal.show();
                            setTimeout(function() {
                                popModal.hide();
                            }, 6000);
                        }
                    }
                });
            @endif
        });
    </script>

    {!! settings()->get('scripts_beforebody') !!}

</body>

</html>
