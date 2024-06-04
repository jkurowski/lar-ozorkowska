@extends('layouts.page', ['body_class' => 'gallery-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec gallery sec-pad position-relative">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 mx-auto text-center">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title section-header__title--h1">Galeria inwestycji</h1>
                            <p class="section-header__subtitle">Poznaj nas bliżej</p>
                        </div>
                        <p class="section-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
                <ul class="nav nav-tabs mb-4" id="galleryTab" role="tablist">
                    @foreach($galleries as $key => $g)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($key == 0) active @endif" id="gallery{{ $g->id }}-tab" data-bs-toggle="tab" data-bs-target="#gallery{{ $g->id }}" type="button" role="tab" aria-controls="gallery{{ $g->id }}" aria-selected="true">
                                {{ $g->name }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="container">
                <div class="tab-content" id="galleryTabContent">
                    @foreach($galleries as $key => $g)
                        <div class="tab-pane @if($key == 0) active @endif" id="gallery{{ $g->id }}" role="tabpanel" aria-labelledby="gallery{{ $g->id }}-tab">
                            <div class="row justify-content-center">
                                @foreach($g->photos as $p)
                                    <div class="col-lg-4 mt-4">
                                        <div class="border-gradient-photo">
                                            <a href="/uploads/gallery/images/{{$p->file}}" class="swipebox" rel="gallery-{{ $g->id }}" title="">
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
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
