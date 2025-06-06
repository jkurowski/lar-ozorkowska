@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="apartments">
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mieszkania</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec position-relative">

            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle">Znajdź swój apartament!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 mx-auto">

                        @if ($investment->plan)
                            <div id="plan">
                                <div id="plan-holder" class="d-flex justify-content-center m-auto">
                                    <img src="{{ asset('/investment/plan/' . $investment->plan->file) }}"
                                        alt="{{ $investment->name }}" id="invesmentplan" usemap="#invesmentplan"
                                        class="d-block mx-auto main-building" loading="eager">
                                </div>
                                <map name="invesmentplan">
                                    @foreach ($investment->floors as $floor)
                                        @if ($floor->html)
                                            <area shape="poly"
                                                href="{{ route('front.developro.investment.floor', [$floor, Str::slug($floor->name)]) }}"
                                                title="{{ $floor->name }}" alt="floor-{{ $floor->id }}"
                                                data-item="{{ $floor->id }}" data-floornumber="{{ $floor->id }}"
                                                data-floortype="{{ $floor->type }}" coords="{{ cords($floor->html) }}">
                                        @endif
                                    @endforeach
                                </map>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        <div class="search-container">
                            <form id="mainsearch" method="get" action="" class="project-gradient">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="rooms" class="form-label">Ilość pokoi</label>
                                                    <select id="rooms" name="s_pokoje" class="form-select">
                                                        <option value="" {{ request('s_pokoje') == null ? 'selected' : '' }}>Wszystkie</option>
                                                        <option value="1" {{ request('s_pokoje') == 1 ? 'selected' : '' }}>1</option>
                                                        <option value="2" {{ request('s_pokoje') == 2 ? 'selected' : '' }}>2</option>
                                                        <option value="3" {{ request('s_pokoje') == 3 ? 'selected' : '' }}>3</option>
                                                        <option value="4" {{ request('s_pokoje') == 4 ? 'selected' : '' }}>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="area" class="form-label">Metraż</label>
                                                    <select id="area" name="s_metry" class="form-select">
                                                        <option value="">Wszystkie</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="select-container">
                                                    <label for="floor" class="form-label">Piętro</label>
                                                    <select id="floor" name="s_pietro" class="form-select">
                                                        <option value="" {{ request('s_pietro') == null ? 'selected' : '' }}>Wszystkie</option>
                                                        @foreach($floors as $f)
                                                            <option value="{{ $f->id }}" {{ request('s_pietro') == $f->id ? 'selected' : '' }}>{{ $f->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 align-self-center text-center mt-3 mt-sm-0 p-0">
                                        <button type="submit">
                                            <img src="{{ asset('images/search.svg') }}" alt="ikona szukaj" width="65" height="65" loading="lazy">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="search-results">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto pt-4 d-flex aligm-items-center justify-content-end">
                        <div class="list-view d-flex aligm-items-center">
                            <div id="list">
                                <img src="{{ asset('images/lista.svg') }}" alt="ikonka listy" class="list-view__icon">
                            </div>
                            <div id="grid" class="ps-3">
                                <img src="{{ asset('images/siatka.svg') }}" alt="ikonka siatki" class="list-view__icon active">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 mx-auto mt-3">
                        <div id="offerList" class="grid">
                            <div class="offerList offerList-list">
                                @if ($properties)
                                    @foreach ($properties as $r)
                                        <div class="offer-list-box position-relative mb-4">
                                            <div class="apartment-box project-gradient">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="apartment-box__name">
                                                            @if($r->id == 4)
                                                                <p class="">{{ $r->name_list }}</p>
                                                                <p class="mb-0">{{ $r->number }}</p>
                                                            @else
                                                                <p class="mb-0">Hi {{ $r->number }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartment-box__details row my-4">
                                                            <div class="col-sm-4 pe-0">
                                                                <p class="">Metraż: {{ $r->area }}
                                                                    m<sup>2</sup></p>
                                                            </div>
                                                            <div class="col-sm-4 text-center">
                                                                <p class="">Pokoje: {{ $r->rooms }}</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="">{{ $r->floor->name }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor->number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                            class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current fs-xl-xxl-small">Sprawdź</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="offer-list-box__status-container offer-list-box__status--{{ Str::slug(roomStatus($r->status)) }}">
                                                <div class="offer-list-box__status ">
                                                    <span>{{ roomStatus($r->status) }}</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor->number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                class="stretched-link"></a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="offerList offerList-grid">
                                <div class="row">
                                    @if ($properties)
                                        @foreach ($properties as $r)
                                            <div class="col-sm-6 col-lg-4 mb-4">
                                                <div class="offer-list-box position-relative">
                                                    <div class="apartment-box project-gradient mb-2">
                                                        <div class="apartment-box__img_wrapper">
                                                            <img src="{{ asset('investment/property/thumbs/webp/' . $r->file_webp) }}"
                                                                alt="Rzut {{ $r->name }}" class="apartment-box__img"
                                                                width="" height="60" loading="lazy">
                                                        </div>
                                                        <div class="apartment-box__name">
                                                            <p class="">{{ $r->name }}</p>
                                                        </div>
                                                        <div class="apartment-box__details row my-4">
                                                            <div class="col-sm-4 pe-0">
                                                                <p class="">Metraż: {{ $r->area }}
                                                                    m<sup>2</sup></p>
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
                                                                <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor->number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                                    class="project-link project-link--white z-2 border px-2 py-1 rounded border-color-current">Sprawdź</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="offer-list-box__status-container offer-list-box__status--{{ Str::slug(roomStatus($r->status)) }}">
                                                        <div class="offer-list-box__status ">
                                                            <span>{{ roomStatus($r->status) }}</span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('front.developro.investment.property', [$r, Str::slug($r->name), floorLevel($r->floor->number, true), number2RoomsName($r->rooms, true), round(floatval($r->area), 2) . '-m2']) }}"
                                                        class="stretched-link"></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/developro.min.css') }}" rel="stylesheet">
    <script>
        $(document).ready(function() {

            // Get the CSRF token from the meta tag
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            function fetchFilters(method) {
                let rooms;
                let area;
                let floor;

                if(method === 'load') {
                    rooms = {!! (request()->input('s_pokoje')) ? request()->input('s_pokoje') : "''" !!};
                } else {
                    rooms = $('#rooms').val();
                }

                if(method === 'load') {
                    area = {!! (request()->input('s_metry')) ? request()->input('s_metry') : "''" !!};
                } else {
                    area = $('#area').val();
                }

                if(method === 'load') {
                    floor = {!! (request()->input('s_pietro')) ? request()->input('s_pietro') : "''" !!};
                } else {
                    floor = $('#floor').val();
                }

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
                        //updateSelect('#rooms', response.filters.rooms, rooms);
                        updateSelect('#area', response.filters.areas, area);
                        //updateFloorSelect('#floor', response.filters.floors, floor);
                    }
                });
            }

            function updateSelect(selector, options, selectedValue) {
                // Convert all options to strings for comparison
                options = options.map(option => option.toString());
                selectedValue = selectedValue.toString(); // Convert selectedValue to string

                $(selector).html('<option value="">Wszystkie</option>');
                options.forEach(option => {
                    let selected = option === selectedValue ? 'selected' : '';
                    $(selector).append(`<option value="${option}" ${selected}>${option}</option>`);
                });
            }

            // function updateFloorSelect(selector, options, selectedValue) {
            //     $(selector).html('<option value="">Wszystkie</option>');
            //     $.each(options, function(key, option) {
            //         let id = option;
            //         let value = option === 'object' ? option : key;
            //         let selected = id === parseInt(selectedValue) ? 'selected' : '';
            //         let label = (option === 5) ? 'Parter' : `Piętro ${value}`;
            //         $(selector).append(`<option value="${option}" ${selected}>${label}</option>`);
            //     });
            // }

            $('#rooms, #area, #floor').on('change', function() {
                fetchFilters('update');
            });

            // Initial fetch
            fetchFilters('load');
        });
    </script>
@endpush
