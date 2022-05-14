@extends('Frontend.layouts.master')
@section('content')
<div class="inner-hero-section style--four">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape-2.png') }}" alt="image">
    </div> --}}
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>
<section class="pb-120 mt-minus-300">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-area">
                    <p style="text-align: center">{{ trans('translation.acest flux va fi pentru ') }} {{ $prize->name }}
                        {{ trans('translation.cu codul de') }} {{
                        $prize->prize_code }}</p>
                    <div class="col-lg-6" style="margin-left:auto; margin-right:auto; margin-bottom:20px">
                        <div class="clock-wrapper" style="border-radius: 25px !important;">
                            <p class="mb-2">{{ trans('translation.Incepe in') }}:</p>
                            <div class="clock" data-clock="{{ $prize->prize_date }}"></div>
                        </div>
                    </div>
                    <iframe width="100%" height="400px"
                        src="https://www.youtube.com/embed/live_stream?channel=UCwkcldYzAjKyTC67Pa8cc5w">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
