@extends('layouts.page', ['body_class' => 'contact-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 mx-auto">
                        <div class="section-header text-center mb-3">
                            <h1 class="section-header__title section-header__title--h1">Kontakt</h1>
                        </div>
                        <div class="section-desc text-center mb-5">
                            <p>Masz pytania? Chcesz poznać szczegóły oferty lub po prostu dowiedzieć się więcej? <br>Nasi doradcy są tu dla Ciebie – chętnie opowiedzą o inwestycji i pomogą wybrać apartament dopasowany do Twoich potrzeb. <br>Zrób pierwszy krok – resztą zajmiemy się wspólnie.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center me-sm-5 mb-4 mb-md-0">
                                    <img src="{{ asset('images/phone-black.svg') }}" alt="telefon" width="70" height="70">
                                    <div class="contact-details">
                                        <p>zadzwoń</p>
                                        <a href="tel:+48536882090">536 882 090</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/email.svg') }}" alt="email" width="70" height="70">
                                    <div class="contact-details">
                                        <p>napisz</p>
                                        <a href="mailto:sprzedaz@ozorkowska28.pl">sprzedaz@ozorkowska28.pl</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pe-4 pe-sm-0 ps-4 ps-sm-0">
                    <div class="col-12 col-md-11 col-lg-10 mx-auto cta__box project-gradient">
                        <form class="contact-form row validateForm" id="contactForm" method="post" action="{{ route('front.contact.form') }}">
                            {{ csrf_field() }}
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
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="box-anim mb-3">
                                    <label for="name" class="lab-anim">Imię</label>
                                    <input name="form_name" type="text" class="form-control validate[required] @error('form_name') is-invalid @enderror" id="name" value="{{ old('form_name') }}">
                                    @error('form_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="box-anim mb-3">
                                    <label for="phone" class="lab-anim">Telefon</label>
                                    <input name="form_phone" type="tel" class="form-control validate[required] @error('form_phone') is-invalid @enderror" id="phone" value="{{ old('form_phone') }}">
                                    @error('form_phone')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="box-anim mb-3">
                                    <label for="email" class="lab-anim">Adres e-mail</label>
                                    <input name="form_email" type="email" class="form-control validate[required] @error('form_email') is-invalid @enderror" id="email" value="{{ old('form_email') }}">
                                    @error('form_email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4 box-anim">
                                    <label for="Message" class="lab-anim">Wiadomość</label>
                                    <textarea id="Message" name="form_message" class="form-control validate[required] @error('form_message') is-invalid @enderror" rows="2" maxlength="3000" required></textarea>
                                    @error('form_message')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="rodo">
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
                                        <input name="form_page" type="hidden" value="Kontakt">
                                        <script type="text/javascript">
                                            @if(config('services.recaptcha.v3_site_key') && config('services.recaptcha.v3_secret_key'))
                                            document.write("<button type=\"submit\" class=\"project-btn project-btn--white g-recaptcha\" data-sitekey=\"{{ config('services.recaptcha.v3_site_key') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\">WYŚLIJ</button>");
                                            @else
                                            document.write("<button class=\"project-btn project-btn--white\" type=\"submit\">WYŚLIJ</button>");
                                            @endif
                                        </script>
                                        <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
                                </div>
                            </div>
                            <div class="d-none d-xl-block col-6 d-flex align-items-end">
                                <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta-woman" width="550" height="522" loading="lazy">
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
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 500);
        });
        @endif
        @if ($errors->any())
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            var firstError = $('.invalid-feedback:visible').first();
            if (firstError.length) {
                var scrollTo = firstError.offset().top - aboveHeight - 60;
                $('html, body').animate({ scrollTop: scrollTo }, 500);
            }
        });
        @endif
    </script>
@endpush
