<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="left d-flex align-items-center">
                        <a href="tel:65655655"><i class="las la-phone-volume"></i> {{ trans('translation.Suport') }}</a>
                        <ul class="navbar-nav ml-3">
                            @php $locale = session()->get('locale'); @endphp
                            <li class="nav-item dropdown" style="display: flex">
                                @switch($locale)
                                @case('en')
                                <a class="d-flex align-items-center justify-content-center text-light pl-2"
                                    href="lang/en">En</a>
                                @break
                                @default
                                <a class="d-flex align-items-center justify-content-center text-light pl-2"
                                    href="lang/ro">Ro</a>
                                @endswitch
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                    style="min-width:4rem !important">
                                    <a class="dropdown-item" href="lang/ro">Ro</a>
                                    <a class="dropdown-item" href="lang/en">En</a>
                                </div>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- {{ trans('translation.limbă') }} --}}
                                    <span class="caret"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @php $total = 0 @endphp
                @php $count = 0 @endphp
                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                @php $count += $details['price'] / $details['price'] @endphp
                @endforeach
                @endif
                <div class="col-sm-6">
                    <div class="right">
                        <div class="product__cart">
                            <span class="total__amount">{{ $total }} Lei</span>
                            <a href="{{ URL::route('cart') }}" class="amount__btn">
                                <i class="las la-shopping-basket"></i>
                                <span class="cart__num">{{ $count }}</span>
                            </a>
                        </div>
                        @if (Auth::user())
                        <a href="{{ URL::route('userPanel') }}" class="user__btn"><i class="las la-user"></i></a>
                        @else
                        <a href="#0" class="user__btn" data-toggle="modal" data-target="#loginModal"><i
                                class="las la-user"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header__top end -->
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <a class="site-logo site-title" href="{{ URL::route('home') }}">
                    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="site-logo">
                    <span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">
                        <li>
                            <a href="{{ URL::route('home') }}">{{ trans('translation.Acasa') }}</a>
                        </li>
                        <li>
                            <a href="{{ URL::route('contests') }}">{{ trans('translation.Concursuri') }}</a>
                        </li>
                        <li><a href="{{ URL::route('winners') }}">{{ trans('translation.Câștigătorii') }}</a></li>
                        {{-- <li><a href="{{ URL::route('checkout') }}">Checkout</a></li> --}}
                        <li><a href="{{ URL::route('liveStream') }}">{{ trans('translation.Urmăriți în Live') }}</a>
                        </li>
                        <li><a href="{{ URL::route('contact') }}">contact</a></li>
                        <li><a href="{{ URL::route('aboutUs') }}">{{ trans('translation.despre noi') }}</a></li>
                    </ul>
                    <div class="nav-right">
                        <a href="{{ URL::route('contests') }}" class="cmn-btn style--three btn--sm"><img
                                src="{{ asset('assets/images/icon/btn/tag.png') }}" alt="icon" class="mr-2">{{
                            trans('translation.cumpara bilet') }}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- header__bottom end -->
</header>
