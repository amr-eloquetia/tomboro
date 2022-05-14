@extends('Frontend.layouts.master')
@section('content')
<div class="inner-hero-section style--three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">{{ trans('translation.Acasa') }}</a></li>
                    <li class="active">{{ trans('translation.Concurs') }}</li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<!-- contest section start  -->
<section class="pb-120 mt-minus-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contest-wrapper">
                    <div class="contest-wrapper__header">
                        <h2 class="contest-wrapper__title">{{ trans('translation.Tombole in Curs') }}</h2>
                        <ul class="nav nav-tabs winner-tab-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="dream-tab" data-toggle="tab" href="#dream" role="tab"
                                    aria-controls="dream" aria-selected="true">
                                    <div class="icon-thumb">
                                        <img src="{{ URL::asset('assets/images/prize-images/car.png') }}" alt="image"
                                            style="width: 100px; height:100px;object-fit:cover">
                                    </div>
                                    <span>{{ trans('translation.Masini') }}</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="bike-tab" data-toggle="tab" href="#bike" role="tab"
                                    aria-controls="bike" aria-selected="false">
                                    <div class="icon-thumb">
                                        <img src="{{ URL::asset('assets/images/prize-images/motorcycle.png') }}"
                                            alt="image" style="width: 100px; height:100px;object-fit:cover">
                                    </div>
                                    <span>{{ trans('translation.Motociclete') }}</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="phone-tab" data-toggle="tab" href="#phone" role="tab"
                                    aria-controls="phone" aria-selected="false">
                                    <div class="icon-thumb">
                                        <img src="{{ URL::asset('assets/images/prize-images/phones.png') }}" alt="image"
                                            style="width: 100px; height:100px;object-fit:cover">
                                    </div>
                                    <span>{{ trans('translation.Telefoane') }}</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="watch-tab" data-toggle="tab" href="#watch" role="tab"
                                    aria-controls="watch" aria-selected="false">
                                    <div class="icon-thumb">
                                        <img src="{{ URL::asset('assets/images/prize-images/watch.png') }}" alt="image"
                                            style="width: 100px; height:100px;object-fit:cover">
                                    </div>
                                    <span>{{ trans('translation.Cesauri') }}</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="laptop-tab" data-toggle="tab" href="#laptop" role="tab"
                                    aria-controls="laptop" aria-selected="false">
                                    <div class="icon-thumb">
                                        <img src="{{ URL::asset('assets/images/prize-images/laptop.png') }}" alt="image"
                                            style="width: 100px; height:100px;object-fit:cover">
                                    </div>
                                    <span>{{ trans('translation.Laptopuri') }}</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="money-tab" data-toggle="tab" href="#money" role="tab"
                                    aria-controls="money" aria-selected="false">
                                    <div class="icon-thumb">
                                        <img src="{{ URL::asset('assets/images/prize-images/bani.png') }}" alt="image"
                                            style="width: 100px; height:100px;object-fit:cover">
                                    </div>
                                    <span>{{ trans('translation.Bani') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="contest-wrapper__body">
                        <div class="row contest-filter-wrapper justify-content-center mt-30 mb-none-30">
                            <div class="col-lg-3 col-sm-6 mb-30">
                                <div class="filter__option filter--dropdown">
                                    @if (empty($sort))
                                    <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle"
                                        style="border: grey 1px solid; padding:10px 20px; border-radius:50px; margin:3px 10px"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{
                                        trans('translation.sortare după preț') }}</a>
                                    <span class="icon-arrow-down"></span>
                                    </a>
                                    @else
                                    <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle"
                                        style="border: grey 1px solid; padding:10px 20px; border-radius:50px; margin:3px 10px"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $sort }}
                                        <span class="icon-arrow-down"></span>
                                    </a>
                                    @endif

                                    <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1"
                                        style="background: #2b2b2b">
                                        <li>
                                            <a href="{{ url('contests/lowest-first') }}" style="margin:3px 10px">{{
                                                trans('translation.ieftine') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('contests/highest-first') }}" style="margin:3px 10px">{{
                                                trans('translation.scumpe') }}</a>
                                        </li>


                                    </ul>
                                </div><!-- end .filter__option -->
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-30">
                                <select>
                                    <option>ALL</option>
                                    <option>Filter</option>
                                    <option>Filter</option>
                                    <option>Filter</option>
                                    <option>Filter</option>
                                    <option>Filter</option>
                                    <option>Filter</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-30">
                                <form class="contest-search-form">
                                    <input type="text" placeholder="SEARCH HERE">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div><!-- row end -->

                        <div class="tab-content mt-50" id="myTabContent">
                            <div class="tab-pane fade show active" id="dream" role="tabpanel"
                                aria-labelledby="dream-tab">
                                <div class="row mb-none-30 mt-50">
                                    @foreach ($prizes as $prize)
                                    @if ($prize->category_id === 1)
                                    <div class="col-xl-4 col-md-6 mb-30">
                                        <div class="contest-card">
                                            <a href="{{ URL::route('singlePrize',['prize_code'=> $prize->prize_code]) }}"
                                                class="item-link"></a>
                                            <div class="contest-card__thumb">
                                                <div id="carouselExampleControls{{ $prize->id }}" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach ($prize->medias as $media)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img class="d-block w-100"
                                                                src="{{ URL::asset('storage/' .$media->path)}}"
                                                                alt="First slide">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <a class="carousel-control-prev"
                                                        href="#carouselExampleControls{{ $prize->id }}" role="button"
                                                        data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next"
                                                        href="#carouselExampleControls{{ $prize->id }}" role="button"
                                                        data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                {{-- @foreach ($prize->medias as $media)
                                                <img src="{{ URL::asset('storage/' .$media->path)}}" alt="image">
                                                @endforeach --}}
                                                <div class="contest-num">
                                                    <span>contest no:</span>
                                                    <h4 class="number">{{ $prize->prize_code }}</h4>
                                                </div>
                                            </div>
                                            <div class="contest-card__content">
                                                <div class="left">
                                                    <h5 class="contest-card__name">{{ $prize->name }}</h5>
                                                </div>
                                                <div class="right"
                                                    style="display: flex; flex-direction:column; justify-content:center;">
                                                    <p>Pret</p>
                                                    <span class="contest-card__price">{{ $prize->ticket_price }}
                                                        lei</span>
                                                </div>
                                            </div>
                                            <div class="contest-card__footer" style="padding: 15px !important">
                                                <ul class="contest-card__meta">
                                                    <li style="width: 40%">
                                                        <i class="las la-clock"></i>
                                                        <span>{{ $prize->prize_date }}</span>
                                                    </li>
                                                    <li style="justify-content:flex-end">
                                                        <i class="las la-ticket-alt"></i>
                                                        <span>{{ $prize->ticket_amount }}</span>
                                                        <p>{{ trans('translation.total bilete') }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- contest-card end -->
                                    </div>
                                    @endif

                                    @endforeach

                                </div>
                            </div>
                            <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">

                                <div class="row mb-none-30 mt-50">
                                    @foreach ($prizes as $prize)
                                    @if ($prize->category_id === 2)
                                    <div class="col-xl-4 col-md-6 mb-30">
                                        <div class="contest-card">
                                            <a href="{{ URL::route('singlePrize',['prize_code'=> $prize->prize_code]) }}"
                                                class="item-link"></a>
                                            <div class="contest-card__thumb">
                                                @foreach ($prize->medias as $media)
                                                <img src="{{ URL::asset('storage/' .$media->path)}}" alt="image">

                                                @endforeach
                                                {{-- <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                --}}
                                                <div class="contest-num">
                                                    <span>contest no:</span>
                                                    <h4 class="number">{{ $prize->prize_code }}</h4>
                                                </div>
                                            </div>
                                            <div class="contest-card__content">
                                                <div class="left">
                                                    <h5 class="contest-card__name">{{ $prize->name }}</h5>
                                                </div>
                                                <div class="right"
                                                    style="display: flex; flex-direction:column; justify-content:center">
                                                    <p>Pret</p>
                                                    <span class="contest-card__price">{{ $prize->ticket_price }}
                                                        lei</span>
                                                </div>
                                            </div>
                                            <div class="contest-card__footer" style="padding: 15px !important">
                                                <ul class="contest-card__meta">
                                                    <li style="width: 40%">
                                                        <i class="las la-clock"></i>
                                                        <span>{{ $prize->prize_date }}</span>
                                                    </li>
                                                    <li style="justify-content:flex-end">
                                                        <i class="las la-ticket-alt"></i>
                                                        <span>{{ $prize->ticket_amount }}</span>
                                                        <p>{{ trans('translation.total bilete') }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- contest-card end -->
                                    </div>
                                    @endif

                                    @endforeach

                                </div>

                            </div>
                            <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                                <div class="row mb-none-30 mt-50">
                                    @foreach ($prizes as $prize)
                                    @if ($prize->category_id === 3)
                                    <div class="col-xl-4 col-md-6 mb-30">
                                        <div class="contest-card">
                                            <a href="{{ URL::route('singlePrize',['prize_code'=> $prize->prize_code]) }}"
                                                class="item-link"></a>
                                            <div class="contest-card__thumb">
                                                @foreach ($prize->medias as $media)
                                                <img src="{{ URL::asset('storage/' .$media->path)}}" alt="image">

                                                @endforeach
                                                {{-- <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                --}}
                                                <div class="contest-num">
                                                    <span>contest no:</span>
                                                    <h4 class="number">{{ $prize->prize_code }}</h4>
                                                </div>
                                            </div>
                                            <div class="contest-card__content">
                                                <div class="left">
                                                    <h5 class="contest-card__name">{{ $prize->name }}</h5>
                                                </div>
                                                <div class="right"
                                                    style="display: flex; flex-direction:column; justify-content:center">
                                                    <p>Pret</p>
                                                    <span class="contest-card__price">{{ $prize->ticket_price }}
                                                        lei</span>
                                                </div>
                                            </div>
                                            <div class="contest-card__footer" style="padding: 15px !important">
                                                <ul class="contest-card__meta">
                                                    <li style="width: 40%">
                                                        <i class="las la-clock"></i>
                                                        <span>{{ $prize->prize_date }}</span>
                                                    </li>
                                                    <li style="justify-content:flex-end">
                                                        <i class="las la-ticket-alt"></i>
                                                        <span>{{ $prize->ticket_amount }}</span>
                                                        <p>{{ trans('translation.total bilete') }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- contest-card end -->
                                    </div>
                                    @endif

                                    @endforeach

                                </div>

                            </div>
                            <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">

                                <div class="row mb-none-30 mt-50">
                                    @foreach ($prizes as $prize)
                                    @if ($prize->category_id === 4)
                                    <div class="col-xl-4 col-md-6 mb-30">
                                        <div class="contest-card">
                                            <a href="{{ URL::route('singlePrize',['prize_code'=> $prize->prize_code]) }}"
                                                class="item-link"></a>
                                            <div class="contest-card__thumb">
                                                @foreach ($prize->medias as $media)
                                                <img src="{{ URL::asset('storage/' .$media->path)}}" alt="image">

                                                @endforeach
                                                {{-- <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                --}}
                                                <div class="contest-num">
                                                    <span>contest no:</span>
                                                    <h4 class="number">{{ $prize->prize_code }}</h4>
                                                </div>
                                            </div>
                                            <div class="contest-card__content">
                                                <div class="left">
                                                    <h5 class="contest-card__name">{{ $prize->name }}</h5>
                                                </div>
                                                <div class="right"
                                                    style="display: flex; flex-direction:column; justify-content:center">
                                                    <p>Pret</p>
                                                    <span class="contest-card__price">{{ $prize->ticket_price }}
                                                        lei</span>
                                                </div>
                                            </div>
                                            <div class="contest-card__footer" style="padding: 15px !important">
                                                <ul class="contest-card__meta">
                                                    <li style="width: 40%">
                                                        <i class="las la-clock"></i>
                                                        <span>{{ $prize->prize_date }}</span>
                                                    </li>
                                                    <li style="justify-content:flex-end">
                                                        <i class="las la-ticket-alt"></i>
                                                        <span>{{ $prize->ticket_amount }}</span>
                                                        <p>{{ trans('translation.total bilete') }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- contest-card end -->
                                    </div>
                                    @endif

                                    @endforeach

                                </div>

                            </div>
                            <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">

                                <div class="row mb-none-30 mt-50">
                                    @foreach ($prizes as $prize)
                                    @if ($prize->category_id === 5)
                                    <div class="col-xl-4 col-md-6 mb-30">
                                        <div class="contest-card">
                                            <a href="{{ URL::route('singlePrize',['prize_code'=> $prize->prize_code]) }}"
                                                class="item-link"></a>
                                            <div class="contest-card__thumb">
                                                @foreach ($prize->medias as $media)
                                                <img src="{{ URL::asset('storage/' .$media->path)}}" alt="image">

                                                @endforeach
                                                {{-- <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                --}}
                                                <div class="contest-num">
                                                    <span>contest no:</span>
                                                    <h4 class="number">{{ $prize->prize_code }}</h4>
                                                </div>
                                            </div>
                                            <div class="contest-card__content">
                                                <div class="left">
                                                    <h5 class="contest-card__name">{{ $prize->name }}</h5>
                                                </div>
                                                <div class="right"
                                                    style="display: flex; flex-direction:column; justify-content:center">
                                                    <p>Pret</p>
                                                    <span class="contest-card__price">{{ $prize->ticket_price }}
                                                        lei</span>
                                                </div>
                                            </div>
                                            <div class="contest-card__footer" style="padding: 15px !important">
                                                <ul class="contest-card__meta">
                                                    <li style="width: 40%">
                                                        <i class="las la-clock"></i>
                                                        <span>{{ $prize->prize_date }}</span>
                                                    </li>
                                                    <li style="justify-content:flex-end">
                                                        <i class="las la-ticket-alt"></i>
                                                        <span>{{ $prize->ticket_amount }}</span>
                                                        <p>{{ trans('translation.total bilete') }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- contest-card end -->
                                    </div>

                                    @endif

                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- contest-wrapper end -->
            </div>
        </div>
    </div>
</section>
<!-- contest section end -->

<!-- contest feature section start -->
<section class="pb-120">
    <div class="container">
        <div class="row mb-none-30 justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="icon-item2">
                    <div class="icon-item2__icon">
                        <img src="{{  URL::asset('assets/images/icon/contest-feature/1.png') }}" alt="image">
                    </div>
                    <div class="icon-item2__content">
                        <h3 class="title">{{ trans('translation.Achiziționarea securizată') }}</h3>
                        <p>{{ trans('translation.Plătiți cu metode de plată sigure.') }}</p>
                    </div>
                </div><!-- icon-item2 end -->
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="icon-item2">
                    <div class="icon-item2__icon">
                        <img src="{{ URL::asset('assets/images/icon/contest-feature/2.png') }}" alt="image">
                    </div>
                    <div class="icon-item2__content">
                        <h3 class="title">{{ trans('translation.Valoare excelentă') }}</h3>
                        <p>{{ trans('translation.Oferim prețuri competitive pentru fiecare bilet de loterie.') }}</p>
                    </div>
                </div><!-- icon-item2 end -->
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="icon-item2">
                    <div class="icon-item2__icon">
                        <img src="{{ URL::asset('assets/images/icon/contest-feature/3.png') }}" alt="image">
                    </div>
                    <div class="icon-item2__content">
                        <h3 class="title">{{ trans('translation.Livrare gratuită în întreaga lume') }}</h3>
                        <p><span>{{ trans('translation.service3') }}</span></p>
                    </div>
                </div><!-- icon-item2 end -->
            </div>
        </div>
    </div>
</section>
<!-- contest feature section end -->

@endsection
