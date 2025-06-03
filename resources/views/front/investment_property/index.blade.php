@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $floor->name . ' - ' . $property->name_list . ' Hi '.$property->number)
@section('seo_description', $page->meta_description)
@section('content')
    <main class="single-apartment">
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.developro.investment.index') }}">Apartamenty</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('front.developro.investment.floor', [$floor, Str::slug($floor->name)]) }}">{{ $floor->name }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $property->name }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec apartment-desc">
            <img src="{{ asset('images/graphic.svg') }}" alt="grafika wieżowca" loading="lazy" class="project-graphic">
            <div class="container">
                <nav class="pt-4 pb-5 single-apartment-nav">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            @if ($prev)
                                <a href="{{ route('front.developro.investment.property', [$prev, Str::slug($prev->name), $floor->number, number2RoomsName($prev->rooms, true), round(floatval($prev->area), 2) . '-m2']) }}"
                                    class="single-apartment-nav-link-prev">{{ $prev->name }}</a>
                            @endif
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            @if ($next)
                                <a href="{{ route('front.developro.investment.property', [$next, Str::slug($next->name), $floor->number, number2RoomsName($next->rooms, true), round(floatval($next->area), 2) . '-m2']) }}"
                                    class="single-apartment-nav-link-next">{{ $next->name }}</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <h1 class="section-header__title section-header__title--h1">{{ $property->name_list }} Hi {{ $property->number }}</h1>
                            <p class="section-header__subtitle">Indywidualnie dostosowane do potrzeb</p>
                        </div>
                        <div class="desc-anim">
                            <div>
                                <div class="row my-5 apartment__details">
                                    <div class="col-4">
                                        <p>Metraż: {{ $property->area }} m<sup>2</sup></p>
                                    </div>
                                    <div class="col-4 apartment__details-middle">
                                        <p>Pokoje: {{ $property->rooms }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>Piętro: {{ $property->floor->number }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="">
                                <a href="#formularz-kontaktowy" class="project-btn">Zapytaj o mieszkanie</a>
                                @if($property->file_pdf)
                                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" class="d-inline-block ms-3 pt-3 link-offset-2  text-decoration-underline link-underline-opacity-75-hover" target="_blank">Pobierz kartę PDF</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 pt-lg-4 photo-anim text-end">
                        @if ($property->file)
                            <a href="{{ asset('/investment/property/' . $property->file) }}" class="swipebox">
                                <picture>
                                    <source type="image/webp"
                                        srcset="{{ asset('/investment/property/thumbs/webp/' . $property->file_webp) }}">
                                    <source type="image/jpeg"
                                        srcset="{{ asset('/investment/property/thumbs/' . $property->file) }}">
                                    <img src="{{ asset('/investment/property/thumbs/' . $property->file) }}"
                                        alt="{{ $property->name }}" class="w-100">
                                </picture>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @if ($similar->count() > 0)
            <section class="available-sec sec-pad">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-4 mx-auto text-center">
                            <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                                <h2 class="section-header__title">Podobne mieszkania</h2>
                                <p class="section-header__subtitle">Alternatywne oferty</p>
                            </div>

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
                                                        class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small">Sprawdź</a>
                                                </div>
                                            </div>
                                            <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor_number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                class="stretched-link"></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 pt-sm-0">
                        <div class="col-12 text-center pt-5">
                            <a href="{{ route('front.developro.investment.floor', [$property->floor, Str::slug($property->floor->name)]) }}"
                                class="project-link">Sprawdź więcej</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section id="formularz-kontaktowy" class="sec-pad project-gradient @if($similar->count() == 0) mt-5 @endif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto text-center mb-5">
                        <div class="section-header mb-3" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-header__title">Zapytaj o mieszkanie</h2>
                            <p class="section-header__subtitle">Indywidualne konsultacje</p>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                @if (session('success'))
                                    <div class="alert alert-success border-0">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('warning'))
                                    <div class="alert alert-warning border-0">
                                        {{ session('warning') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <form class="contact-form validateForm" id="contactForm" method="post" action="{{route('front.contact.property', $property->id)}}">
                            {{ csrf_field() }}
                            <div class="box-anim mb-3">
                                <label for="name" class="lab-anim">Imię</label>
                                <input name="form_name" type="text" class="form-control validate[required] @error('form_name') is-invalid @enderror" id="name" value="{{ old('form_name') }}">
                                @error('form_name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="box-anim mb-3">
                                <label for="phone" class="lab-anim">Telefon</label>
                                <input name="form_phone" type="tel" class="form-control validate[required] @error('form_phone') is-invalid @enderror" id="phone" value="{{ old('form_phone') }}">
                                @error('form_phone')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="box-anim mb-3">
                                <label for="email" class="lab-anim">Adres e-mail</label>
                                <input name="form_email" type="email" class="form-control validate[required] @error('form_email') is-invalid @enderror" id="email" value="{{ old('form_email') }}">
                                @error('form_email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="mb-4 box-anim">
                                <label for="Message" class="lab-anim">Wiadomość</label>
                                <textarea id="Message" name="form_message" class="form-control validate[required] @error('form_message') is-invalid @enderror" rows="2" maxlength="3000" required></textarea>
                                @error('form_message')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-12 rodo">
                                <p>Na podstawie z art. 13 ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r. (Dz. Urz. UE L 119 z 04.05.2016) informujemy, iż przesyłając wiadomość za pomocą formularza kontaktowego wyrażacie Państwo zgodę na:</p>
                            </div>
                            @foreach ($rules as $r)
                                <div class="mb-3 form-check position-relative d-flex @error('rule_'.$r->id) is-invalid @enderror">
                                    <input name="rule_{{$r->id}}" type="checkbox" class="form-check-input @if($r->required === 1) validate[required] @endif" id="rule_{{$r->id}}" data-prompt-position="topLeft:-25px">
                                    <label class="form-check-label form-check-label--check" for="rule_{{$r->id}}">{!! $r->text !!}</label>
                                    @error('rule_'.$r->id)
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            @endforeach

                            <div class="text-center text-sm-end">
                                <input name="form_page" type="hidden" value="{{ $property->name }}">
                                <input name="investment_id" type="hidden" value="{{ $investment->id }}">
                                <input name="investment_name" type="hidden" value="{{ $investment->name }}">
                                <script type="text/javascript">
                                    @if(config('services.recaptcha.v3_site_key') && config('services.recaptcha.v3_secret_key'))
                                    document.write("<button type=\"submit\" class=\"project-btn project-btn--white g-recaptcha\" data-sitekey=\"{{ config('services.recaptcha.v3_site_key') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\">WYŚLIJ</button>");
                                    @else
                                    document.write("<button class=\"project-btn project-btn--white\" type=\"submit\">WYŚLIJ</button>");
                                    @endif
                                </script>
                                <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px",
                autoPositionUpdate: false
            });
        });

        function onRecaptchaSuccess(token) {
            $(".validateForm").validationEngine('updatePromptsPosition');
            const isValid = $(".validateForm").validationEngine('validate');
            if (isValid) {
                $("#contactForm").submit();
            } else {
                grecaptcha.reset();
            }
        }
        @if (session('success') || session('warning'))
            $(window).load(function() {
                const aboveHeight = $('header').outerHeight();
                $('html, body').stop().animate({
                    scrollTop: $('.alert').offset().top - aboveHeight
                }, 1500, 'easeInOutExpo');
            });
        @endif
    </script>
@endpush
