@extends('Frontend.layouts.master')
@section('content')

{{-- hero section --}}
<section class="hero"
    style="padding-top: 200px !important; background-image: none !important; padding-bottom:0 !important">
    <div class="container">
        @if(Session::has('alert-danger'))
        <div class="alert alert-danger alert-dismissible p-2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <a data-toggle="modal" data-target="#loginModal"><strong>{{ trans('translation.login error') }}</strong></a>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="hero__content col-lg-12">
                    <img src="{{ URL::asset('assets/images/bg/premiile.png') }}" alt="" style="width:100%">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- how to play --}}
<section class="position-relative overflow-hidden" style="padding:20px 0 80px 0">
    {{-- <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
        <img src="{{ URL::asset('assets/images/elements/play-el.png') }}" alt="image">
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-sm-left text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-lg-3 ">
                        <div class="col-lg-12 m-2 d-flex align-items-center rounded bg-dark"
                            style="min-height: 100px; padding-left:0 !important">
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <img src="{{ URL::asset('assets/images/prize-images/phones.png') }}" alt="image"
                                        style="width: 100px; height:100px;object-fit:cover">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <p style="text-transform: uppercase">{{ trans('translation.Telefoane') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="col-lg-12 m-2 d-flex align-items-center rounded bg-dark"
                            style="min-height: 100px; padding-left:0 !important">
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <img src="{{ URL::asset('assets/images/prize-images/watch.png') }}" alt="image"
                                        style="width: 100px; height:100px;object-fit:cover">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <p style="text-transform: uppercase">{{ trans('translation.Cesauri') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="col-lg-12 m-2 d-flex align-items-center rounded bg-dark"
                            style="min-height: 100px; padding-left:0 !important">
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <img src="{{ URL::asset('assets/images/prize-images/laptop.png') }}" alt="image"
                                        style="width: 100px; height:100px;object-fit:cover">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <p style="text-transform: uppercase">{{ trans('translation.Laptopuri') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="col-lg-12 m-2 d-flex align-items-center rounded bg-dark"
                            style="min-height: 100px; padding-left:0 !important">
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <img src="{{ URL::asset('assets/images/prize-images/avion.png') }}" alt="image"
                                        style="width: 100px; height:100px;object-fit:contain">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <p style="text-transform: uppercase">{{ trans('translation.vacante') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12 m-2 d-flex align-items-center rounded bg-dark" style="min-height: 140px">
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <img src="{{ URL::asset('assets/images/prize-images/motorcycle.png') }}"
                                        alt="image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <p style="text-transform: uppercase">{{ trans('translation.Motociclete') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-12 m-2 d-flex align-items-center rounded bg-dark" style="min-height: 140px">
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <img src="{{ URL::asset('assets/images/prize-images/car.png') }}" alt="image">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ URL::route('contests') }}">
                                    <p style="text-transform: uppercase">{{ trans('translation.Masini') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- @include('Frontend.layouts.contestSection') --}}
<section class=" position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow fadeInUp">
                <div class="">
                    <h2 class="" style="text-transform: uppercase">{{ trans('translation.Tombole in Curs') }}
                    </h2>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="col-lg-12">
                <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="contestTab" role="tablist">
                </ul>
                <div class="tab-content" id="contestTabContent">
                    <div class="tab-pane fade show active" id="car" role="tabpanel" aria-labelledby="car-tab">

                        <div class="row mb-none-30 mt-50">
                            @foreach ($prizes as $prize)

                            <div class="col-xl-4 col-md-6 mb-30">
                                <div class="contest-card" style="border-radius: 1.25rem !important">
                                    <a href="{{ URL::route('singlePrize',['prize_code'=> $prize->prize_code]) }}"
                                        class="item-link"></a>
                                    <div class="contest-card__thumb"
                                        style="border-radius: 1.25rem !important; background-color:none !important">
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
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next"
                                                href="#carouselExampleControls{{ $prize->id }}" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        {{-- @foreach ($prize->medias as $media)
                                        <img src="{{ URL::asset('storage/' .$media->path)}}" alt="image">

                                        @endforeach --}}
                                        {{-- <a href="#0" class="action-icon"><i class="far fa-heart"></i></a> --}}
                                        <div class="contest-num">
                                            <span>{{ trans('translation.Concurs') }}</span>
                                            <h4 class="number">{{ $prize->prize_code
                                                }}</h4>
                                        </div>
                                    </div>
                                    <div class="contest-card__content text-center">
                                        <div class="col-lg-12 mt-3">
                                            <h4 class="contest-card__name">{{
                                                $prize->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="contest-card__content">
                                        <div class="left">
                                            <p>{{ trans('translation.Pret') }}</p>
                                            <span class="contest-card__price">{{
                                                $prize->ticket_price }}
                                                lei</span>
                                        </div>
                                        <div class="right">
                                            <i class="las la-clock text-light"></i>
                                            <span class="">{{ $prize->prize_date }}
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- contest-card end -->
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div><!-- table content end -->
            </div>
        </div><!-- row end-->
        <div class="row mt-30">
            <div class="col-lg-12">
                <div class="btn-grp">
                    <a href="{{ URL::route('contests') }}" class="btn-border">{{ trans('translation.Vezi tot') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- @include('Frontend.layouts.winnerSection') --}}
{{-- @include('Frontend.layouts.lastWinner') --}}
<section class="latest-winner-section position-relative pt-120 pb-120">
    <div class="el-1"><img src="assets/images/elements/w-el-1.png" alt="image"></div>
    <div class="el-2"><img src="assets/images/elements/w-el-2.png" alt="image"></div>
    <div class="el-3"><img src="assets/images/elements/w-el-3.png" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    {{-- <span class="section-sub-title">Meet the latest winners from your favorite contest</span> --}}
                    <h2 class="section-title">{{ trans('translation.Ultimii câștigători') }}</h2>
                    <p>{{ trans('translation.Verificați numărul biletului dvs. pentru a vedea dacă sunteți câștigător.')
                        }}</p>
                </div>
            </div>
        </div><!-- row end -->

        <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="col-lg-12">
                <div class="tab-content mt-50" id="winnerTabContent">
                    <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">
                        <div class="row mb-none-30">
                            <div class="col-lg-4 mb-30">
                                <div class="number-check-wrapper">
                                    <h3 class="title">{{ trans('translation.Verifica biletul') }}</h3>
                                    <p>{{ trans('translation.Tineti in mana un bilet castigator?') }}</p><br>
                                    <p>{{ trans('translation.Lata un mod simplu de a afla.') }}</p>
                                    <form class="check-number-form">
                                        <input type="tel" class="form-control mt-30 mb-30" name="check-number1"
                                            id="check-number1"
                                            placeholder="{{ trans('translation.Introduceti numarul biletului...') }}">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-50">{{
                                                trans('translation.Verifica') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-30">
                                @foreach ($winners as $winner)
                                <div class="winner-card mb-30 rounded">
                                    <div class="winner-card__content col-lg-12">
                                        <div class="content-top text-center justify-content-center align-items-center">
                                            <div class="left">
                                                <h5>{{ $winner->name }}</h5>
                                            </div>
                                            <div class="right">
                                                <span>{{ trans('translation.Tragerea')
                                                    }}</span>
                                                <p>{{ $winner->date }}</p>
                                            </div>
                                        </div>
                                        <div class="content-bottom text-center">
                                            <div class="left col-md-6">
                                                <p>{{ trans('translation.Numerele castigatoare') }}:</p>
                                                <h2>{{ $winner->ticket_number }}</h2>
                                            </div>
                                            <div class="right col-md-6">
                                                <p>#{{ trans('translation.Concurs') }}:</p>
                                                <span class="contest-num">{{ $winner->prize_code }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- winner-card end -->
                                @endforeach

                                <div class="btn-grp">
                                    <a href="{{ URL::route('winners') }}" class="btn-border"><span>{{
                                            trans('translation.Vezi tot') }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- tab-content end -->
            </div>
        </div><!-- row end -->
    </div>
</section>
{{-- @include('Frontend.layouts.supportSection') --}}

@endsection
