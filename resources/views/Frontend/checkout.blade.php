@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="{{ URL::route('contests') }}">Lottery</a></li>
                    <li><a href="#0">Contest No: B2T</a></li>
                    <li><a href="#0">Pick your Lottery Number</a></li>
                    <li class="active"><a href="#0">My Cart</a></li>
                    <li class="active">Checkout</li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<!-- inner-hero-section end -->

<!-- checkout section start -->
<section class="pb-120">
    @php $total = 0 @endphp
    @php $count = 0 @endphp
    @if(session('cart'))
    @foreach(session('cart') as $id => $details)
    @php $total += $details['price'] * $details['quantity'] @endphp
    @php $count += $details['price'] / $details['price'] @endphp
    @endforeach
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-area">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="checkout-form-area">

                                <div class="payment-details">
                                    <h3 class="title">Payment Option</h3>
                                    <form class="payment-form">
                                        <div class="payment-methods">
                                            <button type="button" class="checked">
                                                <i class="las la-credit-card"></i>
                                                <span>Credit Card</span>
                                            </button>

                                        </div>
                                        <h5 class="payment-form__title">Enter Your Card Details </h5>
                                        {{-- <form role="form" action="{{ route('stripe.post') }}" method="post"
                                            class="require-validation" data-cc-on-file="false"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-lg-12">
                                                    <label>Card Number</label>
                                                    <input type="text">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label>Name on the Card</label>
                                                    <input type="text">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Expiration</label>
                                                    <input type="text" placeholder="MM/YY">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>CVV</label>
                                                    <input type="text" placeholder="CVV">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <button type="submit" class="cmn-btn">Make payment</button>
                                                </div>
                                            </div>
                                        </form> --}}
                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="cmn-btn" onclick="makePayment()">Make
                                                payment</button>
                                        </div>
                                        <p class="info-text">By Clicking "Make Payment" you agree to the <a
                                                href="{{ route('terms') }}">terms
                                                and conditions</a></p>
                                </div>
                            </div><!-- checkout-form-area end -->
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-4">
                            <div class="checkout-wrapper">
                                <div class="checkout-wrapper__header">
                                    <h3>Checkout</h3>
                                </div>
                                <div class="checkout-wrapper__body">
                                    <ul class="price">
                                        <li>
                                            <div class="left">
                                                <h4 class="caption">Ticket Price</h4>
                                                <span>({{ $count }} tickets X {{ $details['price'] }} lei)</span>
                                            </div>
                                            <div class="right">
                                                <span class="price">{{ $total }} Lei</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left">
                                                <h4 class="caption">Total</h4>
                                            </div>
                                            <div class="right">
                                                <span id="totalAmount" class="price">{{ $total }} Lei</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- checkout-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout section end -->
@endsection

<script type="text/javascript">
    function makePayment() {
    var totalAmount = {!! json_encode($total) !!};
    console.log(totalAmount);

    var myHeaders = new Headers();
    myHeaders.append("x-api-key", "2R0X05Z-2Q6M92Q-JAK1K5W-NMSHCWZ");
    myHeaders.append("Content-Type", "application/json");
    console.log(totalAmount);

    var raw = JSON.stringify({
    "price_amount": totalAmount,
    "price_currency": "usd",
    "pay_currency": "btc",
    "ipn_callback_url": "https://nowpayments.io",
    "order_id": "RGDBP-21314",
    "order_description": "Test1"
    });

    var requestOptions = {
    method: 'POST',
    headers: myHeaders,
    body: raw,
    redirect: 'follow'
    };

    fetch("https://api.nowpayments.io/v1/payment", requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));


    fetch("https://api.nowpayments.io/v1/invoice", requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));


    }

    var myHeaders = new Headers();
    myHeaders.append("x-api-key", "2R0X05Z-2Q6M92Q-JAK1K5W-NMSHCWZ");
    myHeaders.append("Content-Type", "application/json");

    var requestOptions1 = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
    };

    fetch("https://api.nowpayments.io/v1/payment/?limit=10&page=0&sortBy=created_at", requestOptions1)
    .then(response => response.text())
    .then(result => console.log(JSON.stringify(result)))
    .catch(error => console.log('error', error));


</script>
