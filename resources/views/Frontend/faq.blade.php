@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section style--four">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape-2.png') }}" alt="image">
    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="#0">Pages</a></li>
                    <li class="active">Faq</li>
                </ul>
            </div>
        </div>
    </div> --}}
</div>
<!-- inner-hero-section end -->

<!-- faq section start -->
<section class="pb-120 mt-minus-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-top-wrapper pt-120" style="background-image: none; background-color:#343a40">
                    <div class="section-header text-center">
                        <span class="section-sub-title">{{ trans('translation.aveți întrebări') }}</span>
                        <h2 class="section-title">{{ trans('translation.avem răspunsuri') }}</h2>
                        <p>{{ trans('translation.faq subtitle') }}</p>
                    </div>
                    <ul class="nav nav-tabs cmn-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab"
                                aria-controls="ticket" aria-selected="false">{{ trans('translation.Bilete') }}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="banking-tab" data-toggle="tab" href="#banking" role="tab"
                                aria-controls="banking" aria-selected="true">banking</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="winning-tab" data-toggle="tab" href="#winning" role="tab"
                                aria-controls="winning" aria-selected="false">{{ trans('translation.Câștiguri') }}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="result-tab" data-toggle="tab" href="#result" role="tab"
                                aria-controls="result" aria-selected="false">{{ trans('translation.Rezulate') }}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab"
                                aria-controls="about" aria-selected="false">{{ trans('translation.Despre Tomboro')
                                }}</a>
                        </li>
                    </ul>
                </div><!-- faq-top-wrapper end -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-body-wrapper">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                            <div class="accordion cmn-accordion" id="faqAcc-one">
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-1">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                                            aria-controls="collapse1">
                                            {{ trans('translation.Cum imi cumpar bilete?') }}
                                        </button>
                                    </div>
                                    <div id="collapse1" class="collapse show" aria-labelledby="h-1"
                                        data-parent="#faqAcc-one">
                                        <div class="card-body">
                                            <p>{{ trans('translation.Poti cumpara bilete raspunde') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-2">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                            {{ trans('translation.Exista un numar maxim de bilete') }}
                                        </button>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="h-2"
                                        data-parent="#faqAcc-one">
                                        <div class="card-body">
                                            <p>{{ trans('translation.numar maxim de bilete raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-3">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            {{ trans('translation.De ce nu imi apare ca am achizitionat un bilet?') }}
                                        </button>
                                    </div>
                                    <div id="collapse3" class="collapse" aria-labelledby="h-3"
                                        data-parent="#faqAcc-one">
                                        <div class="card-body">
                                            <p>{{ trans('translation.achizitionat un bilet raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="banking" role="tabpanel"
                            aria-labelledby="banking-tab">
                            <div class="accordion cmn-accordion" id="faqAcc-two">
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="headingOne">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{ trans('translation.Cum depozitez banii in contul Tomboro?') }}
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#faqAcc-two">
                                        <div class="card-body">
                                            <p>{{ trans('translation.depozite banii raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="headingTwo">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            {{ trans('translation.Ce va reflecta plata pe cardul meu de credit?') }}
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#faqAcc-two">
                                        <div class="card-body">
                                            <p>{{ trans('translation.card reflect raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="headingThree">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            {{ trans('translation.nu merge sa depozitez') }}
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#faqAcc-two">
                                        <div class="card-body">
                                            <p>{{ trans('translation.verifati daca cardul este valid') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                {{-- <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="headingFour">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Am I allowed to withdraw my deposit?
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#faqAcc-two">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
                                                dignissimos consectetur aspernatur expedita aut reiciendis magni tempore
                                                ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae
                                                possimus veniam distinctio?</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="headingFive">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Which payment methods are accepted by Rifa Lottos?
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-parent="#faqAcc-two">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
                                                dignissimos consectetur aspernatur expedita aut reiciendis magni tempore
                                                ullam libero, voluptate nam accusamus est a debitis, obcaecati beatae
                                                possimus veniam distinctio?</p>
                                        </div>
                                    </div>
                                </div><!-- card end --> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="winning" role="tabpanel" aria-labelledby="winning-tab">
                            <div class="accordion cmn-accordion" id="faqAcc-three">
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-4">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                            aria-controls="collapse4">
                                            {{ trans('translation.Cum ridic premiul?') }}
                                        </button>
                                    </div>
                                    <div id="collapse4" class="collapse show" aria-labelledby="h-4"
                                        data-parent="#faqAcc-three">
                                        <div class="card-body">
                                            <p>{{ trans('translation.Cum ridic premiul raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-5">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            {{ trans('translation.In cat timp imi pot ridica premiul?') }}
                                        </button>
                                    </div>
                                    <div id="collapse5" class="collapse" aria-labelledby="h-5"
                                        data-parent="#faqAcc-three">
                                        <div class="card-body">
                                            <p>{{ trans('translation.ridica premiul raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-6">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse6" aria-expanded="false"
                                            aria-controls="collapse6">
                                            {{ trans('translation.Ce fac daca nu imi ridic premiul la timp?') }}
                                        </button>
                                    </div>
                                    <div id="collapse6" class="collapse" aria-labelledby="h-6"
                                        data-parent="#faqAcc-three">
                                        <div class="card-body">
                                            <p>{{ trans('translation.ridic premiul la timp raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-6">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse21" aria-expanded="false"
                                            aria-controls="collapse21">
                                            {{ trans('translation.Ce premii sunt?') }}
                                        </button>
                                    </div>
                                    <div id="collapse21" class="collapse" aria-labelledby="h-6"
                                        data-parent="#faqAcc-three">
                                        <div class="card-body">
                                            <p>{{ trans('translation.Puteti vedea premiile') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                            <div class="accordion cmn-accordion" id="faqAcc-four">
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-7">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
                                            aria-controls="collapse7">
                                            {{ trans('translation.Cum sunt anunțat dacă am castigat?') }}
                                        </button>
                                    </div>
                                    <div id="collapse7" class="collapse show" aria-labelledby="h-7"
                                        data-parent="#faqAcc-four">
                                        <div class="card-body">
                                            <p>{{ trans('translation.castigator raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-8">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse8" aria-expanded="false"
                                            aria-controls="collapse8">
                                            {{ trans('translation.Cand aflu că am câștigat?') }}
                                        </button>
                                    </div>
                                    <div id="collapse8" class="collapse" aria-labelledby="h-8"
                                        data-parent="#faqAcc-four">
                                        <div class="card-body">
                                            <p>{{ trans('translation.aflu câștigat raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-9">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse9" aria-expanded="false"
                                            aria-controls="collapse9">
                                            {{ trans('translation.nu vreau sa imi dau datele') }}
                                        </button>
                                    </div>
                                    <div id="collapse9" class="collapse" aria-labelledby="h-9"
                                        data-parent="#faqAcc-four">
                                        <div class="card-body">
                                            <p>{{ trans('translation.nu vrea sa imi dau datele raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <div class="accordion cmn-accordion" id="faqAcc-five">
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-10">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse10" aria-expanded="true"
                                            aria-controls="collapse10">
                                            {{ trans('translation.Ce este Tomboro?') }}
                                        </button>
                                    </div>
                                    <div id="collapse10" class="collapse show" aria-labelledby="h-10"
                                        data-parent="#faqAcc-five">
                                        <div class="card-body">
                                            <p>{{ trans('translation.Ce este Tomboro raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-11">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse11" aria-expanded="false"
                                            aria-controls="collapse11">
                                            {{ trans('translation.Cand a apărut Tomboro?') }}
                                        </button>
                                    </div>
                                    <div id="collapse11" class="collapse" aria-labelledby="h-11"
                                        data-parent="#faqAcc-five">
                                        <div class="card-body">
                                            <p>{{ trans('translation.Cand a aparut Tomboro raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                                <div class="card" style="background-color: #343a40">
                                    <div class="card-header" style="background-color: #343a40" id="h-12">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse12" aria-expanded="false"
                                            aria-controls="collapse12">
                                            {{ trans('translation.Cine administrează Tomboro?') }}
                                        </button>
                                    </div>
                                    <div id="collapse12" class="collapse" aria-labelledby="h-12"
                                        data-parent="#faqAcc-five">
                                        <div class="card-body">
                                            <p>{{ trans('translation.Cine administrează Tomboro raspunse') }}</p>
                                        </div>
                                    </div>
                                </div><!-- card end -->
                            </div>
                        </div>
                    </div><!-- tab-content end -->
                </div><!-- faq-body-wrapper end -->
            </div>
        </div>
    </div>
</section>
<!-- faq section end -->
@endsection
