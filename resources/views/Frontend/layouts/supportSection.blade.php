<section class="pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header text-center">
                    <span class="section-sub-title">{{ trans('translation.Luați legătura') }}</span>
                    <h2 class="section-title">{{ trans('translation.suport clienti') }}</h2>
                    <p>{{ trans('translation.Aveți o întrebare?') }}</p>
                </div>
            </div>
        </div>
        <div class="row mb-none-30">
            <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="support-card" style="background-image:none; background-color:#343a40">
                    <div class="support-card__thumb">
                        <img src="{{ URL::asset('assets/images/icon/support/1.png') }}" alt="image">
                    </div>
                    <div class="support-card__content">
                        <h3 class="support-card__title">{{ trans('translation.Discutați cu echipa noastră de asistență')
                            }}</h3>
                        <p>{{ trans('translation.Aveți o întrebare despre concursuri?') }}</p>
                        <div class="btn-grp justify-content-xl-start mt-3">
                            <a href="tel:+40720517673" class="btn-border btn-sm text-capitalize">{{
                                trans('translation.sunați-ne') }}<i class="fas fa-phone-alt ml-2"></i></a>
                            <a href="mailto:support@tomboro.ro" class="cmn-btn btn-sm text-capitalize">Email <i
                                    class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div><!-- support-card end -->
            </div>
            <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="support-card" style="background-image:none; background-color:#343a40">
                    <div class="support-card__thumb">
                        <img src="{{ URL::asset('assets/images/icon/support/2.png') }}" alt="image">
                    </div>
                    <div class="support-card__content">
                        <h3 class="support-card__title">{{ trans('translation.ghidul nostru la tomboro') }}</h3>
                        <p>{{ trans('translation.Consultați întrebările frecvente pentru a vedea dacă vă putem ajuta.')
                            }} </p>
                        <div class="btn-grp justify-content-xl-start mt-3">
                            <a href="{{ URL::route('faq') }}" class="btn-border btn-sm text-capitalize">{{
                                trans('translation.Intrebări frecvente și ajutor') }}</a>
                        </div>
                    </div>
                </div><!-- support-card end -->
            </div>
        </div>
    </div>
</section>
