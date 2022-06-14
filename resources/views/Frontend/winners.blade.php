@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<section class="inner-hero-section style--four">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape-2.png') }}" alt="image">
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="inner-page-content">
                    <h2 class="title">{{ trans('translation.Nu ratați niciodată o tragere la sorți!') }}</h2>
                    <p>{{ trans('translation.Un mod simplu de a cumpăra bilete și de a câștiga mașina visurilor tale')
                        }}</p>
                    {{-- <p>many others anytime, anywhere</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- inner-hero-section end -->

<!-- winner details section start -->
<section class="mt-minus-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="winner-details-wrapper bg_img"
                    data-background="{{ URL::asset('assets/images/elements/winner-details.jpg') }}">
                    <div class="left"><img src="{{ URL::asset('assets/images/contest/1.png') }}" alt="image"></div>
                    <div class="body">
                        <p class="contest-number">{{ trans('translation.Concurs') }}: B2T</p>
                        <p class="contest-date"><span>{{ trans('translation.Tragerea la sorți a avut loc pe') }}
                                :</span> Saturday May 20, 2020</p>
                        <div class="line"></div>
                        <h4 class="title">{{ trans('translation.Ultimele cele mai mari numere câștigătoare') }}</h4>
                        <ul class="numbers">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                        </ul>
                        <div class="btn-grp">
                            {{-- <a href="#0" class="btn-border">Alerts</a> --}}
                            <a href="#0" class="btn-border">{{ trans('translation.Cum se revendică') }}</a>
                        </div>
                    </div>
                    <div class="right"><img src="{{ URL::asset('assets/images/contest/7.png') }}" alt="image"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- winner details section end -->
{{-- @include('Frontend.layouts.lastWinner') --}}
<section class="latest-winner-section position-relative pt-120 pb-120">
    <div class="el-1"><img src="assets/images/elements/w-el-1.png" alt="image"></div>
    <div class="el-2"><img src="assets/images/elements/w-el-2.png" alt="image"></div>
    <div class="el-3"><img src="assets/images/elements/w-el-3.png" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">{{ trans('translation.Faceți cunoștință cu ultimii') }}</span>
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
                                            id="check-number1" placeholder="Introduceti numarul biletului...">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-50" st>{{
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
                </div>
            </div><!-- tab-content end -->
        </div>
    </div><!-- row end -->
    </div>
</section>
@include('Frontend.layouts.supportSection')
@endsection
