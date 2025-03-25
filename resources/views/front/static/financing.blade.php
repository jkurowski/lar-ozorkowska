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
                    <div class="col-xl-5 text-center text-sm-start">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Finansowanie</h1>
                            <p class="section-header__subtitle">PROFESJONALNA OPIEKA SPECJALISTY</p>
                        </div>
                        <div class="section-desc mb-4">
                            <p>Oferujemy pomoc na każdym etapie finansowania nieruchomości. Specjaliści z firmy GREMIUM
                                znajdą dla Ciebie najlepszą ofertę i przeprowadzą przez wszystkie formalności związane z
                                uzyskaniem kredytu. Odpowiedzą także na wszystkie Twoje pytania i rozwieją ewentualne
                                wątpliwości.</p>

                        </div>
                        <a href="{{ route('front.contact.index') }}" class="project-btn">Kontakt</a>
                    </div>
                    <div
                        class="photo-anim col-xl-6 offset-xl-1 position-relative d-flex justify-content-end align-items-end">
                        <div class="img-sec__bg blurred-bg">
                            <img src="{{ asset('images/finansowanie-tlo.jpg') }}" alt="grafika" width="340"
                                height="576" loading="eager">
                        </div>
                        <img src="{{ asset('images/finansowanie.png') }}" alt="kobieta" width="580" height="580"
                            loading="eager" class="sec__photo">
                    </div>

                </div>
            </div>
        </section>

        <x-cta></x-cta>
    </main>
@endsection
