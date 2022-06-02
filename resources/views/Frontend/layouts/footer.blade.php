<footer class="" style="position: relative; background-color:#2b2b2b">
    {{-- <div class="bg-shape--top"><img src="{{ URL::asset('assets/images/elements/round-shape-2.png') }}" alt="image">
    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                <div class="subscribe-area">
                    <div class="left">
                        <span class="subtitle">Subscribe to Tomboro</span>
                        <h3 class="title">To Get Exclusive Benefits</h3>
                    </div>
                    <div class="right">
                        <form class="subscribe-form">
                            <input type="email" name="subscribe_email" id="subscribe_email"
                                placeholder="Enter Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-12 align-items-center">
                <ul class="short-links justify-content-center">
                    <li><a href="{{ URL::route('aboutUs') }}">{{ trans('translation.despre noi') }}</a></li>
                    <li><a href="{{ URL::route('faq') }}">FAQs</a></li>
                    <li><a href="{{ URL::route('contact') }}">Contact</a></li>
                    <li><a href="{{ URL::route('fairGambling') }}">Fair Gambling</a></li>
                    <li><a href="{{ URL::route('safePlay') }}">Safe Play</a></li>
                    <li><a href="{{ URL::route('terms') }}">{{ trans('translation.termeni si conditii') }}</a></li>
                    <li><a href="{{ URL::route('privacy') }}">Privacy</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row py-3 align-items-center">
            <div class="col-lg-6">
                <p class="copy-right-text text-lg-left text-center mb-lg-0 mb-3">Copyright © 2022.All Rights Reserved By
                    <a href="{{ URL::route('home') }}">Tomboro</a>
                </p>
            </div>
            <div class="col-lg-6">
                <ul class="social-links justify-content-lg-end justify-content-center">
                    <li><a href="https://www.facebook.com/Tomboro-105024392235539" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/TomboroT" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/tomboro_/" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
