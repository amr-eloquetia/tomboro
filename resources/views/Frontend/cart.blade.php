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
                                                                    name="ticket_number[]" hidden />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-th="Price" style="color:#fff !important">{{
                                                        $details['price']
                                                        }} Lei</td>
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
                                                        <h3><strong>Total {{ $total }} Lei</strong></h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        {{-- <a href="{{ url('/') }}" class="btn btn-warning"><i
                                                                class="fa fa-angle-left"></i> Continue
                                                            Shopping</a> --}}
                                                        {{-- <a href="{{ route('checkout') }}"><button
                                                                class="btn btn-success">Checkout</button></a> --}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        {{-- <a href="{{ url('/') }}" class="btn btn-warning"><i
                                                                class="fa fa-angle-left"></i> Continue
                                                            Shopping</a> --}}
                                                        <button type="submit" class="btn btn-success">Checkout</button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- cart section end -->
@endsection
