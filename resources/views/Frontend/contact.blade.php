@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section style--six">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape-2.png') }}" alt="image">
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</div>
<!-- inner-hero-section end -->

<!-- contact section start -->
<section class="mt-minus-270 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">Contact</h2>
                    <p>{{ trans('translation.contact page welcome') }}</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form-wrapper">
                                <h3 class="title">{{ trans('translation.Trimiteți-ne un mesaj') }}</h3>
                                <form class="contact-form" id="contact_form_submit">
                                    <div class="form-group">
                                        <label>{{ trans('translation.Nume') }} <sup>*</sup></label>
                                        <input type="text" name="name" id="name"
                                            placeholder="{{ trans('translation.introduceți numele complet') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ trans('translation.Email') }} <sup>*</sup></label>
                                        <input type="email" name="email" id="email"
                                            placeholder="{{ trans('translation.introduceți e-mailul dvs.') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ trans('translation.Subiect') }} <sup>*</sup></label>
                                        <input type="text" name="subject" id="subject"
                                            placeholder="{{ trans('translation.introduceți subiectul') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ trans('translation.Mesaj') }} <sup>*</sup></label>
                                        <textarea name="message" id="message"
                                            placeholder="{{ trans('translation.introduceți mesajul') }}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="cmn-btn w-100">{{ trans('translation.Trimite')
                                            }}</button>
                                    </div>
                                </form><!-- contact-form e nd -->
                            </div><!-- contact-form-wrapper end -->
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-info-wrapper">
                                <div class="d-flex flex-wrap justify-content-between w-100">
                                    <div class="contact-info">
                                        <div class="contact-info__icon"><img
                                                src="{{ URL::asset('assets/images/icon/contact/1.png') }}" alt="image">
                                        </div>
                                        <div class="contact-info__content">
                                            <p>{{ trans('translation.Numar de telefon') }}</p>
                                            <span>+40720517673</span>
                                        </div>
                                    </div><!-- contact-info end -->
                                    <div class="contact-info">
                                        <div class="contact-info__icon"><img
                                                src="{{ URL::asset('assets/images/icon/contact/2.png') }}" alt="image">
                                        </div>
                                        <div class="contact-info__content">
                                            <p>Email</p>
                                            <span> support@tomboro.ro</span>
                                        </div>
                                    </div><!-- contact-info end -->
                                </div>
                                <div class="contact-thumb">
                                    {{-- <img src="{{ URL::asset('assets/images/elements/contact.png') }}" alt="image">
                                    --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-120 mb-none-30">
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="social-card">
                    <div class="social-card__icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-card__content">
                        <h3>130k</h3>
                        <span>Followers</span>
                    </div>
                </div><!-- social-card end -->
            </div>
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="social-card">
                    <div class="social-card__icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="social-card__content">
                        <h3>35k</h3>
                        <span>Members</span>
                    </div>
                </div><!-- social-card end -->
            </div>
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="social-card">
                    <div class="social-card__icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="social-card__content">
                        <h3>47k</h3>
                        <span>Followers</span>
                    </div>
                </div><!-- social-card end -->
            </div>
            <div class="col-lg-3 col-sm-6 mb-30">
                <div class="social-card">
                    <div class="social-card__icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="social-card__content">
                        <h3>29k</h3>
                        <span>Subscribers</span>
                    </div>
                </div><!-- social-card end -->
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->
@endsection
