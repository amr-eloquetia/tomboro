@extends('Frontend.layouts.master')
@section('content')

<!-- inner-hero-section start -->

<!-- inner-hero-section end -->

<!-- contest-details-section start -->
<section class="pb-120">
    <div class="container" style="margin-top: 200px">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="clock-wrapper">
                    <p class="mb-2">{{ trans('translation.Acest concurs se încheie în') }}:</p>
                    <div class="clock" data-clock="{{ $prize->prize_date }}"></div>
                </div><!-- clock-wrapper end -->
            </div>
            <div class="col-lg-12">

                <div class="contest-cart">
                    <h4 class="text-center text-warning col-md-12">{{ trans('translation.Intră acum') }}</h4>

                    <h2 class="col-md-12 text-center mb-3">{{ $prize->name }}</h2>

                    <div class="contest-cart__left">
                        <div class="contest-cart__slider-area">
                            <div class="contest-cart__thumb-slider" style="height: 400px">
                                @foreach ($prize->medias as $media)
                                <div class="single-slide"><img src="{{ URL::asset('storage/' .$media->path)}}"
                                        alt="image">
                                </div>
                                @endforeach
                                @foreach ($prize->medias as $media)
                                <div class="single-slide"><img src="{{ URL::asset('storage/' .$media->path)}}"
                                        alt="image"></div>
                                @endforeach

                            </div><!-- contest-cart__thumb-slider end -->
                            <div class="contest-cart__nav-slider">
                                @foreach ($prize->medias as $media)
                                <div class="single-slide"><img src="{{ URL::asset('storage/' .$media->path)}}"
                                        alt="image"></div>
                                @endforeach
                            </div><!-- contest-cart__nav-slider end -->
                        </div>
                    </div><!-- contest-cart__left end -->
                    <div class="contest-cart__right">
                        {{-- <h4 class="subtitle">{{ trans('translation.Intră acum pentru o șansă de a câștiga') }}</h4>
                        --}}
                        {{-- <h3 class="contest-name">{{ $prize->name }}</h3> --}}
                        <p>{{ trans('translation.Acest concurs are un număr maxim de') }} {{ $prize->ticket_amount }} {{
                            trans('translation.intrari') }}.</p>
                        <div class="contest-num">{{ trans('translation.Concurs') }} no: <span>{{ $prize->prize_code
                                }}</span></div>
                        <h4 class="text-uppercase">{{ trans('translation.bilete vândute') }}</h4>
                        <div class="ticket-amount">
                            <span class="left">0</span>
                            <span class="right">{{ $tickets->count() }}</span>
                            <div class="progressbar"
                                data-perc="{{ $tickets->where('availability', 0)->count() * 100 / $tickets->count() }}%">
                                <div class="bar"></div>
                            </div>
                            <p>Only {{ $tickets->where('availability', 1)->count() }} remaining!</p>
                        </div>
                        <div class="ticket-price">
                            <span class="amount">{{ $prize->ticket_price }} lei</span>
                            <small>{{ trans('translation.pe bilet') }}</small>
                        </div>
                        <div class="d-flex flex-wrap align-items-center mb-30">
                            {{-- <div class="select-quantity">
                                <span class="caption">Quantity</span>
                                <div class="quantity">
                                    <input type="number" min="0" max="100" step="1" value="1">
                                </div>
                            </div> --}}
                            <div class="mt-sm-0 mt-3"><a href="{{ route('buy.tickets',$prize->prize_code) }}"
                                    class="cmn-btn style--three">{{ trans('translation.cumpara bilet') }}</a></div>
                        </div>
                        <ul class="social-links align-items-center">
                            <li>Share :</li>
                            <li><a href="https://www.facebook.com/Tomboro-105024392235539" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/TomboroT" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/tomboro_/" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div><!-- contest-cart__right end -->
                </div><!-- contest-cart end -->
            </div><!-- col-lg-12 end -->
            <div class="col-lg-10">
                <div class="contest-description">
                    <ul class="nav nav-tabs justify-content-center mb-30 pb-4 border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="cmn-btn active" id="description-tab" data-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true"><span class="mr-3"></span>
                                {{ trans('translation.descriere') }}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="cmn-btn" id="details-tab" data-toggle="tab" href="#details" role="tab"
                                aria-controls="details" aria-selected="false"><span class="mr-3"></span>{{
                                trans('translation.detalii de concurs') }}</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="content-block">
                                <h3 class="title">{{ trans('translation.descriere') }}</h3>
                                <p>{{ $prize->description }}</p>
                            </div><!-- content-block end -->
                        </div>
                        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                            <div class="content-block">
                                <h3 class="title">{{
                                    trans('translation.detalii de concurs') }}</h3>
                                <p>{{ $prize->details }}</p>
                            </div><!-- content-block end -->
                        </div>
                    </div><!-- tab-content end -->
                </div><!-- contest-description end -->
            </div>
        </div>
    </div>
</section>
<!-- contest-details-section end  -->

@endsection
