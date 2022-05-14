@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section style--four">
    <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape-2.png') }}" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="#0">Lottery</a></li>
                    <li><a href="#0">Contest No: B2T</a></li>
                    <li class="active">Pick your Lottery Number</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- inner-hero-section end -->

<!-- video section start -->
<div class="pb-120 mt-minus-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-wrapper bg_img"
                    data-background="{{ URL::asset('assets/images/elements/video-bg.jpg') }}">
                    <a class="cmn-btn text-capitalize" href="https://www.youtube.com/embed/d6xn5uflUjg"
                        data-rel="lightcase:myCollection">watch video <i class="fas fa-play ml-2"></i></a>
                </div><!-- video-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- video section end -->

<!-- how to play section start -->
<section class="position-relative pt-120">
    <div class="play-elements">
        <img src="assets/images/elements/play-el.png" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-sm-left text-center">
                <div class="section-header">
                    <span class="section-sub-title">Need to know about</span>
                    <h2 class="section-title">How To Play</h2>
                    <p>Follow these 3 easy steps! </p>
                </div>
            </div>
        </div>
        <div class="row mb-none-30 justify-content-xl-start justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="play-card bg_img"
                    data-background="{{ URL::asset('assets/images/elements/card-bg-1.jpg') }}">
                    <div class="play-card__icon">
                        <img src="{{ URL::asset('assets/images/icon/play/1.png') }}" alt="image-icon">
                        <span class="play-card__number">01</span>
                    </div>
                    <div class="play-card__content">
                        <h3 class="play-card__title">Choose</h3>
                        <p>Register to RIFA & Choose your contest</p>
                    </div>
                </div><!-- play-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="play-card bg_img"
                    data-background="{{ URL::asset('assets/images/elements/card-bg-2.jpg') }}">
                    <div class="play-card__icon">
                        <img src="{{ URL::asset('assets/images/icon/play/2.png') }}" alt="image-icon">
                        <span class="play-card__number">02</span>
                    </div>
                    <div class="play-card__content">
                        <h3 class="play-card__title">buy</h3>
                        <p>Pick Your Numbers & Complete your Purchase</p>
                    </div>
                </div><!-- play-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="play-card bg_img"
                    data-background="{{ URL::asset('assets/images/elements/card-bg-3.jpg') }}">
                    <div class="play-card__icon">
                        <img src="{{ URL::asset('assets/images/icon/play/3.png') }}" alt="image-icon">
                        <span class="play-card__number">03</span>
                    </div>
                    <div class="play-card__content">
                        <h3 class="play-card__title">Win</h3>
                        <p>Start Dreaming, you're almost there</p>
                    </div>
                </div><!-- play-card end -->
            </div>
        </div>
    </div>
</section>
<!-- how to play section end -->

<!-- buy ticket section start -->
<section class="buy-ticket-section">
    <div class="winner-obj"><img src="assets/images/elements/winner-obj.png" alt="image"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-lg-left text-center">
                <div class="section-header">
                    <span class="section-sub-title">Dream Big Play Small</span>
                    <h2 class="section-title font-weight-bold">Will you be the next Winner?</h2>
                    <p>Playing the lottery is something many of us do to bring a bit of excitement to our day-to-day
                        routine.</p>
                </div>
                <div class="buy-btn-wrapper">
                    <span>Don't miss out! Next draw</span>
                    <img src="assets/images/elements/arrow.png" alt="image" class="arrow">
                    <a href="#0" class="cmn-btn">buy ticket now!</a>
                </div>
            </div>
        </div>
        <div class="row winner-stat-wrapper">
            <div class="col-lg-8 text-lg-left text-center">
                <h3 class="font-weight-normal winner-stat-wrapper__title">Let the Number Speak for Us</h3>
                <div class="row mb-none-30">
                    <div class="col-sm-6 mb-30">
                        <div class="counter-item style--three text-center">
                            <div class="counter-item__content">
                                <span>23</span>
                                <p>Last Month Winners</p>
                            </div>
                        </div><!-- counter-item end -->
                    </div>
                    <div class="col-sm-6 mb-30">
                        <div class="counter-item style--three text-center">
                            <div class="counter-item__content">
                                <span>2837K</span>
                                <p>Tickets Sold</p>
                            </div>
                        </div><!-- counter-item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- buy ticket section end -->

<!-- faq section start -->
<section class="pb-120 position-relative">
    <div class="faq-el"><img src="assets/images/elements/faq-el.png" alt="image"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-8 text-lg-left text-center">
                <div class="section-header">
                    <span class="section-sub-title">You Have Questions</span>
                    <h2 class="section-title font-weight-bold">WE HAVE ANSWERS</h2>
                    <p>Do not hesitate to send us an email if you can't find what you're looking for.</p>
                </div>
                <div class="accordion cmn-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Can I cancel my ticket?
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos
                                    consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate
                                    nam accusamus est a debitis, obcaecati beatae possimu distinctio?</p>
                            </div>
                        </div>
                    </div><!-- card end -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Can I enter promotions if I buy my tickets using Rifa lottery?
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                    </div><!-- card end -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                What are the different ticket types?
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos
                                    consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate
                                    nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                            </div>
                        </div>
                    </div><!-- card end -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                What are the draw close off times?
                            </button>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum dignissimos
                                    consectetur aspernatur expedita aut reiciendis magni tempore ullam libero, voluptate
                                    nam accusamus est a debitis, obcaecati beatae possimus veniam distinctio?</p>
                            </div>
                        </div>
                    </div><!-- card end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section end -->
@endsection
