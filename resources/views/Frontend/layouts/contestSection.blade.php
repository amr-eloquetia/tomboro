<section class="position-relative pt-120 pb-120">
    <div class="bg-el"><img src="{{ URL::asset('assets/images/elements/contest-bg.png') }}" alt="image"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                    <span class="section-sub-title">Try your chance at winning</span>
                    <h2 class="section-title">Current Contest</h2>
                    <p>Participants buy tickets and lots are drawn to determine the winners.</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="col-lg-12">
                <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="contestTab" role="tablist">
                    {{-- <li class="nav-item" role="presentation">
                        <a class="cmn-btn d-flex align-items-center " id="car-tab" data-toggle="tab" href="#car"
                            role="tab" aria-controls="car" aria-selected="true"><span class="mr-3"><img
                                    src="{{ URL::asset('assets/images/icon/btn/car.png') }}" alt="icon"></span> Dream
                            Car</a>
                    </li> --}}
                    {{-- <li class="nav-item" role="presentation">
                        <a class="cmn-btn style--two d-flex align-items-center" id="lifestyle-tab" data-toggle="tab"
                            href="#lifestyle" role="tab" aria-controls="lifestyle" aria-selected="false"><span
                                class="mr-3"><img src="{{ URL::asset('assets/images/icon/btn/box.png') }}"
                                    alt="icon"></span>All
                            lifestyle</a>
                    </li> --}}
                </ul>
                <div class="tab-content" id="contestTabContent">
                    <div class="tab-pane fade show active" id="car" role="tabpanel" aria-labelledby="car-tab">

                        <div class="row mb-none-30 mt-50">
                            @foreach ($prizes as $prize)

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
                                            <span>contest no:</span>
                                            <h4 class="number">{{ $prize->prize_code }}</h4>
                                        </div>
                                    </div>
                                    <div class="contest-card__content">
                                        <div class="left">
                                            <h5 class="contest-card__name">{{ $prize->name }}</h5>
                                        </div>
                                        <div class="right">
                                            <span class="contest-card__price">{{ $prize->ticket_price }}
                                                lei</span>
                                            <p>ticket price</p>
                                        </div>
                                    </div>
                                    <div class="contest-card__footer">
                                        <ul class="contest-card__meta">
                                            <li>
                                                {{-- <i class="las la-clock"></i> --}}
                                                <span style="font-size: 16px !important">{{ $prize->prize_date }}</span>
                                            </li>
                                            <li>
                                                {{-- <i class="las la-ticket-alt"></i> --}}
                                                <span>{{ $prize->ticket_amount }}</span>
                                                <p>Total tickets</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- contest-card end -->
                            </div>


                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
                        <div class="row mb-none-30">
                            <div class="col-xl-4 col-md-6 mb-30">
                                <div class="contest-card">
                                    <a href="contest-details-one.html" class="item-link"></a>
                                    <div class="contest-card__thumb">
                                        <img src="{{ URL::asset('assets/images/contest/4.png') }}" alt="image">
                                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                        <div class="contest-num">
                                            <span>contest no:</span>
                                            <h4 class="number">r9d</h4>
                                        </div>
                                    </div>
                                    <div class="contest-card__content">
                                        <div class="left">
                                            <h5 class="contest-card__name">The Fabia Magnum</h5>
                                        </div>
                                        <div class="right">
                                            <span class="contest-card__price">$3.99</span>
                                            <p>ticket price</p>
                                        </div>
                                    </div>
                                    <div class="contest-card__footer">
                                        <ul class="contest-card__meta">
                                            <li>
                                                <i class="las la-clock"></i>
                                                <span>5d</span>
                                            </li>
                                            <li>
                                                <i class="las la-ticket-alt"></i>
                                                <span>9805</span>
                                                <p>Remaining</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                                <div class="contest-card">
                                    <a href="contest-details-one.html" class="item-link"></a>
                                    <div class="contest-card__thumb">
                                        <img src="{{ URL::asset('assets/images/contest/5.png') }}" alt="image">
                                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                        <div class="contest-num">
                                            <span>contest no:</span>
                                            <h4 class="number">pr2</h4>
                                        </div>
                                    </div>
                                    <div class="contest-card__content">
                                        <div class="left">
                                            <h5 class="contest-card__name">The Omega Navigator</h5>
                                        </div>
                                        <div class="right">
                                            <span class="contest-card__price">$3.99</span>
                                            <p>ticket price</p>
                                        </div>
                                    </div>
                                    <div class="contest-card__footer">
                                        <ul class="contest-card__meta">
                                            <li>
                                                <i class="las la-clock"></i>
                                                <span>5d</span>
                                            </li>
                                            <li>
                                                <i class="las la-ticket-alt"></i>
                                                <span>9805</span>
                                                <p>Remaining</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                                <div class="contest-card">
                                    <a href="contest-details-one.html" class="item-link"></a>
                                    <div class="contest-card__thumb">
                                        <img src="{{ URL::asset('assets/images/contest/6.png') }}" alt="image">
                                        <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                        <div class="contest-num">
                                            <span>contest no:</span>
                                            <h4 class="number">w03</h4>
                                        </div>
                                    </div>
                                    <div class="contest-card__content">
                                        <div class="left">
                                            <h5 class="contest-card__name">Shelby Cobra</h5>
                                        </div>
                                        <div class="right">
                                            <span class="contest-card__price">$3.99</span>
                                            <p>ticket price</p>
                                        </div>
                                    </div>
                                    <div class="contest-card__footer">
                                        <ul class="contest-card__meta">
                                            <li>
                                                <i class="las la-clock"></i>
                                                <span>5d</span>
                                            </li>
                                            <li>
                                                <i class="las la-ticket-alt"></i>
                                                <span>9805</span>
                                                <p>Remaining</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- contest-card end -->
                            </div>
                        </div>
                    </div>
                </div><!-- table content end -->
            </div>
        </div><!-- row end-->
        <div class="row mt-30">
            <div class="col-lg-12">
                <div class="btn-grp">
                    <a href="{{ URL::route('contests') }}" class="btn-border">browse more</a>
                </div>
            </div>
        </div>
    </div>
</section>
