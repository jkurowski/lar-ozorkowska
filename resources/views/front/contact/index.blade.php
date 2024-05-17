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
                    <div class="col-xl-5 mx-auto">
                        <div class="section-header text-center mb-3">
                            <h1 class="section-header__title section-header__title--h1">Kontakt</h1>
                            <p class="section-header__subtitle">skontaktuj się z nami</p>
                        </div>
                        <div class="section-desc text-center mb-5">
                            <p> Skontaktuj się z naszymi doradcami, aby poznać wszystkie szczegóły oferty.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center me-sm-5 mb-4 mb-md-0">
                                    <img src="{{ asset('images/phone.svg') }}" alt="telefon" width="70" height="70">
                                    <div class="contact-details">
                                        <p>zadzwoń</p>
                                        <a href="tel:+48705548142">705 548 142</a>
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
                <div class="row mt-5">
                    <div class="col-11 col-sm-10 mx-auto cta__box project-gradient">
                        <div class="cta__img-bg">
                            <img src="{{ asset('images/tlo-cta2.jpg') }}" alt="budynek" class="" width="476"
                                height="569" loading="lazy">
                        </div>
                        <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta__img" width="550"
                            height="522" loading="lazy">
                        <div class="row">
                            <div class="col-xl-6">
                                <form class="contact-form">
                                    <div class="box-anim mb-3">
                                        <label for="name" class="lab-anim">Imię i Nazwisko / Nazwa firmy</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="box-anim mb-3">
                                        <label for="phone" class="lab-anim">Telefon</label>
                                        <input type="tel" class="form-control" id="phone">
                                    </div>
                                    <div class="box-anim mb-3">
                                        <label for="email" class="lab-anim">Adres e-mail</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-4 box-anim">
                                        <label for="Message" class="lab-anim">Wiadomość</label>
                                        <textarea id="Message" name="Message" class="form-control" rows="2" maxlength="3000" required></textarea>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="check1">
                                        <label class="form-check-label" for="check1">Akceptuję <a
                                                href="polityka-prywatnosci.html">Politykę prywatności*.</a> </label>
                                    </div>
                                    <div class="text-center text-sm-end">
                                        <button type="submit"
                                            class="project-btn project-btn--white"><span>Wyślij</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
