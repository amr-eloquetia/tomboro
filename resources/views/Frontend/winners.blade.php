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
                    <h2 class="title">Never miss a draw!</h2>
                    <p>Easy way to buy tickets and win your dream car</p>
                    <p>many others anytime, anywhere</p>
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
                        <p class="contest-number">Contest No: B2T</p>
                        <p class="contest-date"><span>Draw took place on :</span> Saturday May 20, 2020</p>
                        <div class="line"></div>
                        <h4 class="title">Latest bigest Winning Numbers:</h4>
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
                            <a href="#0" class="btn-border">Alerts</a>
                            <a href="#0" class="btn-border">How to Claim</a>
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
                    <span class="section-sub-title">Meet the latest winners from your favorite contest</span>
                    <h2 class="section-title">Latest Winners</h2>
                    <p>Check your ticket number's to see if you are a Winner in the Dream Lottery.</p>
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
                                    <h3 class="title">Verifica biletul</h3>
                                    <p>Tineti in mana un bilet castigator?</p><br>
                                    <p>Lata un mod simplu de a afla.</p>
                                    <form class="check-number-form">
                                        <input type="tel" class="form-control mt-30 mb-30" name="check-number1"
                                            id="check-number1" placeholder="Introduceti numarul biletului...">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-50" st>Verifica</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-8 mb-30">
                                <div class="winner-card mb-30 rounded">
                                    <div class="winner-card__content col-lg-12">
                                        <div class="content-top text-center justify-content-center align-items-center">
                                            <div class="left">
                                                <h5>The Breeze Zodiac IX</h5>
                                            </div>
                                            <div class="right">
                                                <span>Tragerea la sorti a avut loc in data de</span>
                                                <p>Sambata, 20 Aprilie, 2022</p>
                                            </div>
                                        </div>
                                        <div class="content-bottom text-center">
                                            <div class="left col-md-6">
                                                <p>Numerele castigatoare:</p>
                                                <h2>123456</h2>
                                            </div>
                                            <div class="right col-md-6">
                                                <p>#CONCURS:</p>
                                                <span class="contest-num">B2T</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- winner-card end -->
                                <div class="winner-card mb-30 rounded">
                                    <div class="winner-card__content col-lg-12">
                                        <div class="content-top text-center justify-content-center align-items-center">
                                            <div class="left">
                                                <h5>The Breeze Zodiac IX</h5>
                                            </div>
                                            <div class="right">
                                                <span>Tragerea la sorti a avut loc in data de</span>
                                                <p>Sambata, 20 Aprilie, 2022</p>
                                            </div>
                                        </div>
                                        <div class="content-bottom text-center">
                                            <div class="left col-md-6">
                                                <p>Numerele castigatoare:</p>
                                                <h2>123456</h2>
                                            </div>
                                            <div class="right col-md-6">
                                                <p>#CONCURS:</p>
                                                <span class="contest-num">B2T</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- winner-card end -->
                                <div class="winner-card mb-30 rounded">
                                    <div class="winner-card__content col-lg-12">
                                        <div class="content-top text-center justify-content-center align-items-center">
                                            <div class="left">
                                                <h5>The Breeze Zodiac IX</h5>
                                            </div>
                                            <div class="right">
                                                <span>Tragerea la sorti a avut loc in data de</span>
                                                <p>Sambata, 20 Aprilie, 2022</p>
                                            </div>
                                        </div>
                                        <div class="content-bottom text-center">
                                            <div class="left col-md-6">
                                                <p>Numerele castigatoare:</p>
                                                <h2>123456</h2>
                                            </div>
                                            <div class="right col-md-6">
                                                <p>#CONCURS:</p>
                                                <span class="contest-num">B2T</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- winner-card end -->
                                <div class="winner-card mb-30 rounded">
                                    <div class="winner-card__content col-lg-12">
                                        <div class="content-top text-center justify-content-center align-items-center">
                                            <div class="left">
                                                <h5>The Breeze Zodiac IX</h5>
                                            </div>
                                            <div class="right">
                                                <span>Tragerea la sorti a avut loc in data de</span>
                                                <p>Sambata, 20 Aprilie, 2022</p>
                                            </div>
                                        </div>
                                        <div class="content-bottom text-center">
                                            <div class="left col-md-6">
                                                <p>Numerele castigatoare:</p>
                                                <h2>123456</h2>
                                            </div>
                                            <div class="right col-md-6">
                                                <p>#CONCURS:</p>
                                                <span class="contest-num">B2T</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- winner-card end -->
                                <div class="btn-grp">
                                    <a href="{{ URL::route('winners') }}" class="btn-border">Vezi Tot</a>
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
