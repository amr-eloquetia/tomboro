@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</div>
<!-- inner-hero-section end -->

<!-- about section start -->
<section class="mt-minus-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-wrapper pt-120">
                    <div class="about-wrapper__header">
                        <div class="about-wrapper__title-top">{{ trans('translation.Câteva cuvinte despre noi') }}</div>
                        <h2 class="text-uppercase">{{ trans('translation.about us title') }}</h2>
                    </div>
                    <div class="about-wrapper__content">
                        <p>{{ trans('translation.about us p1') }}</p>
                        <p>{{ trans('translation.about us p2') }}</p>
                    </div>
                </div><!-- about-wrapper-->
                <div class="row counter-wrapper style--two mb-none-30 justify-content-center" style="box-shadow: none">
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="counter-item style--two">
                            <div class="counter-item__content">
                                <span>{{ $winners->count() }}</span>
                                <h4 class="text-light ">{{ trans('translation.Câștigătorii') }}</h4>
                            </div>
                        </div>
                    </div><!-- counter-item end -->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="counter-item style--two">
                            <div class="counter-item__content">
                                <span>{{ $tickets->count() + 24563}}</span>
                                <h4 class="text-light">{{ trans('translation.bilete vândute') }}</h4>
                            </div>
                        </div>
                    </div><!-- counter-item end -->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="counter-item style--two">
                            <div class="counter-item__content">
                                <span>{{ $prizes->count() }}</span>
                                <h4 class="text-light">{{ trans('translation.total concursuri') }}</h4>
                            </div>
                        </div>
                    </div><!-- counter-item end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- features section start -->
<section class="pt-120 pb-120 position-relative">
    {{-- <div class="feature-car">
        <img src="assets/images/elements/feature-car.png" alt="image" style="max-width:90% !important">
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center">
                    <span class="section-sub-title">{{ trans('translation.aboutUs span') }}</span>
                    <h2 class="section-title style--two">{{ trans('translation.ce face Tomboro diferit?') }}</h2>
                    <p>{{ trans('translation.diferit p') }}</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-9">
                <div class="row mb-none-30">
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="feature-card style--two">
                            <div class="feature-card__icon">
                                <div class="inner"><img src="{{ URL::asset('assets/images/icon/feature/5.png') }}"
                                        alt="image"></div>
                            </div>
                            <div class="feature-card__content">
                                <h3>{{ trans('translation.Fără comision pe câștiguri') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="feature-card style--two">
                            <div class="feature-card__icon">
                                <div class="inner"><img src="{{ URL::asset('assets/images/icon/feature/6.png') }}"
                                        alt="image"></div>
                            </div>
                            <div class="feature-card__content">
                                <h3>{{ trans('translation.Joc sigur și securizat') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="feature-card style--two">
                            <div class="feature-card__icon">
                                <div class="inner"><img src="{{ URL::asset('assets/images/icon/feature/7.png') }}"
                                        alt="image"></div>
                            </div>
                            <div class="feature-card__content">
                                <h3>{{ trans('translation.cele mai mari jackpoturi de loterie') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="feature-card style--two">
                            <div class="feature-card__icon">
                                <div class="inner"><img src="{{ URL::asset('assets/images/icon/feature/8.png') }}"
                                        alt="image"></div>
                            </div>
                            <div class="feature-card__content">
                                <h3>{{ trans('translation.Sistem de plată instant') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="feature-card style--two">
                            <div class="feature-card__icon">
                                <div class="inner"><img src="{{ URL::asset('assets/images/icon/feature/9.png') }}"
                                        alt="image"></div>
                            </div>
                            <div class="feature-card__content">
                                <h3>{{ trans('translation.Suport dedicate') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="feature-card style--two">
                            <div class="feature-card__icon">
                                <div class="inner"><img src="{{ URL::asset('assets/images/icon/feature/10.png') }}"
                                        alt="image"></div>
                            </div>
                            <div class="feature-card__content">
                                <h3>{{ trans('translation.Afiliați nelimitate') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- features section end -->
@endsection
