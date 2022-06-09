@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape.png') }}" alt="image">
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="#0">Lottery</a></li>
                    <li><a href="#0">Contest No: B2T</a></li>
                    <li class="active">Pick your Lottery Number</li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<!-- inner-hero-section end -->

<!-- lottery-details start -->
<section class="pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="lottery-wrapper">
                    <h2 class="text-uppercase text-center">{{ trans('translation.Alegeți biletele') }}
                    </h2>
                    {{-- <p>Choose your lucky ticket.</p> --}}
                    <div class="row mt-50 mb-none-30">
                        @foreach ($tickets as $ticket)
                        @if ($ticket->availability == 1)
                        <div class="col-lg-4 mb-30">
                            <div class="lottery-single">
                                <img src="{{ URL::asset('assets/images/ticket/tickets.png') }}" />
                                <p class="ticket-number">{{ $ticket->ticket_number }}</p>
                                <p class="btn-holder"><a class="btn btn-success btn-block text-center" role="button"
                                        onClick="getTicket(this.id)" id="{{ $ticket->ticket_number }}"
                                        href="{{ route('add.to.cart', $ticket->id) }}">{{ trans('translation.adăugați')
                                        }}</a>
                                </p>
                            </div>
                            <!-- lottery-single end -->
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">{{ $tickets->links() }}</div>
                </div><!-- lottery-wrapper end -->
            </div><!-- col-lg-12 -->
            {{-- <div class="col-lg-12 mt-50">
                <div class="lottery-wrapper">
                    <h2 class="lottery-wrapper__title">Your tickets</h2>
                    <div class="row mt-50 mb-none-30" id="yourTickets">

                    </div>
                </div>

                <div class="buy-lottery-ticket">
                    <div class="left">
                        <div class="sub-total-price">
                            <p>Number of tickets X {{ $ticket->price }}</p>
                            <span>Total Price: {{ $ticket->price * 3 }} </span>
                        </div>
                    </div>
                    <div class="right"><a href="#0" class="cmn-btn">buy tickets</a></div>
                </div>
            </div>
            <div class="col-lg-12 pt-120">
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
<!-- lottery-details end -->
@endsection
<style>
    .createdP {
        background: brown;
    }

    .clicked {
        background: brown !important;
    }

    .ticket-number {
        width: 100px;
        height: 50px;
        position: absolute;
        top: calc(50% - 25px);
        left: calc(50% - 50px);
        color: darkblue;
        font-size: 1.7rem;
        font-weight: 700;
    }
</style>
<script type="text/javascript">
    function getTicket(ticket_number)
    {
        $ticketNumber = ticket_number;
        document.getElementById($ticketNumber).onclick = null;
        var div = document.createElement("div");
        div.className ="col-lg-4 mb-30";
        var p =document.createElement("p");
        p.className = "createdP";
        var text = document.createTextNode($ticketNumber);
        p.appendChild(text);
        div.appendChild(p);
        var element = document.getElementById("yourTickets");
        element.appendChild(div);
        document.getElementById($ticketNumber).classList.add('clicked');
    }

</script>
