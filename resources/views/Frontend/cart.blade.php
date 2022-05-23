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

<!-- cart section start -->
<section class="pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-wrapper">
                    <h2 class="text-uppercase text-center mb-4">{{ trans('translation.coșul meu') }}</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="ticket-wrapper">
                                <div class="ticket-wrapper__header">
                                    <h3>{{ trans('translation.biletele dvs.') }}:</h3>
                                    <button type="button">{{ trans('translation.sterge toate') }}</button>
                                </div>
                                <div class="ticket-wrapper__body">
                                    <form action="{{ route('buy.tickets.update') }}" method="POST">
                                        @csrf @method('PUT')
                                        <table id="cart" class="table table-hover table-condensed">
                                            <thead class="text-light">
                                                <tr>
                                                    <th style="width:50%">{{ trans('translation.numar de bilet') }}</th>
                                                    <th style="width:10%">{{ trans('translation.Pret') }}</th>
                                                    <th style="width:10%">{{ trans('translation.eliminați') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $total = 0 @endphp
                                                @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                                <tr data-id="{{ $id }}">
                                                    <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-9">
                                                                <h4 class="nomargin">{{ $details['ticket number'] }}
                                                                </h4>
                                                                <input type="text"
                                                                    value="{{ $details['ticket number'] }}"
                                                                    name="ticket_number[]" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-th="Price" style="color:#fff !important">${{
                                                        $details['price']
                                                        }}</td>
                                                    <td class="actions" data-th="">
                                                        <button class="btn btn-danger btn-sm remove-from-cart"><i
                                                                class="las la-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        <h3><strong>Total ${{ $total }}</strong></h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        {{-- <a href="{{ url('/') }}" class="btn btn-warning"><i
                                                                class="fa fa-angle-left"></i> Continue
                                                            Shopping</a> --}}
                                                        <a href="{{ route('checkout') }}"><button
                                                                class="btn btn-success">Checkout</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        {{-- <a href="{{ url('/') }}" class="btn btn-warning"><i
                                                                class="fa fa-angle-left"></i> Continue
                                                            Shopping</a> --}}
                                                        <button type="submit" class="btn btn-success">Test</button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 mt-lg-0 mt-4">
                            <div class="checkout-wrapper">
                                <div class="checkout-wrapper__header">
                                    <h3>Your tickets:</h3>
                                </div>
                                <div class="checkout-wrapper__body">
                                    <ul class="price">
                                        <li>
                                            <div class="left">
                                                <h4 class="caption">Ticket Price</h4>
                                                <span>(8 tickets X $ 4.99)</span>
                                            </div>
                                            <div class="right">
                                                <span class="price">$39.92</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left">
                                                <h4 class="caption">Total</h4>
                                            </div>
                                            <div class="right">
                                                <span class="price">$39.92</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="checkout-wrapper__btn">
                                        <button type="submit" class="cmn-btn">buy tickets</button>
                                    </div>
                                </div>
                            </div><!-- checkout-wrapper end -->
                            <div class="mt-30">
                                <img src="{{ URL::asset('assets/images/elements/payment.png') }}" alt="image">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-12 pt-120">
                <div class="pick-lottery-package">
                    <h2 class="title">Choose a Quick Pick</h2>
                    <div class="lottery-package-list">
                        <a href="#0">3 Quick Picks For $14.97</a>
                        <a href="#0">5 Quick Picks For $24.95</a>
                        <a href="#0">10 Quick Picks For $49.90</a>
                        <a href="#0">20 Quick Picks For $99.80</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

</section>
<!-- cart section end -->
@endsection
