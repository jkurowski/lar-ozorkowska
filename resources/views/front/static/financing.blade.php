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
                        <li class="breadcrumb-item active" aria-current="page">Finansowanie</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec finance-sec position-relative sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 text-center text-sm-start align-items-center d-flex">
                        <div>
                            <div class="section-header mb-3">
                                <h1 class="section-header__title section-header__title--h1">Finansowanie</h1>
                                <p class="section-header__subtitle">PROFESJONALNA OPIEKA SPECJALISTY</p>
                            </div>
                            <div class="section-desc mb-4">
                                <p>Obsługą kredytów hipotecznych dla klientów zajmie się: <br><b>Pan Michał Chrakowiecki</b></p>
                                <div class="cta__contact">
                                    <div class="d-flex align-items-center me-sm-5">
                                        <img src="{{ asset('images/phone.svg') }}" alt="Numer telefonu">
                                        <div class="cta__contact-details">
                                            <a href="tel:+48603751281">603 751 281</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/email.svg') }}" alt="Adres e-mail">
                                        <div class="cta__contact-details">
                                            <a href="mailto:m.chrakowiecki@gremiumkredyty.pl">m.chrakowiecki@gremiumkredyty.pl</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="photo-anim col-xl-6 offset-xl-1 position-relative d-flex justify-content-center align-items-end">
                        <img src="{{ asset('images/sprzedawca-michal-2.jpg') }}" alt="Obsługą kredytów hipotecznych" width="600" height="600" loading="eager" class="w-100 h-auto">
                    </div>

                </div>
            </div>
        </section>

        <x-cta></x-cta>
    </main>
@endsection
