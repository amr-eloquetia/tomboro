@extends('Frontend.layouts.master')
@section('content')
<div class="inner-hero-section">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape.png') }}" alt="image">
    </div>
    <div class="container"> --}}
        {{-- <div class="row">
            <div class="col-lg-6">
                <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="#0">Fair Gambling</a></li>
                </ul>
            </div>
        </div>
    </div> --}}
</div>
<section class="pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout-area">
                    {{!! trans('translation.fair gambling page') !!}}

                    {{-- <div class="row" style="display: flex; flex-direction:column">
                        <h2>Fair gambling explained at tombola</h2><br>
                        <p>If you’re new to bingo, or even gambling in general, you may not only be wondering how it
                            works,
                            but also if it’s fair. That’s why, to help put your mind at ease, we’ve answered some of the
                            questions you may have on fair bingo.</p><br>
                        <h3>Is the game fair? How do I know it is not fixed?</h3><br>
                        <p>All results on tombola are randomly generated and cannot be predetermined - we use an
                            industry
                            standard Random Number Generator to determine the outcome of each game. The game is of the
                            high
                            quality you rightly expect from tombola.</p><br>
                        <h3>Game Testing</h3><br>
                        <p>All tombola games use the same RNG and have been tested by an independent auditor, approved
                            by
                            the Gambling Commission (GB) and the Gibraltar Gambling Commissioner. tombola ensures all
                            games
                            are put through rigorous tests before releasing it for customers to access.<br>
                            Gaming Associates has evaluated the RNG, scaling, mapping algorithms, and the online games
                            against technical standards for the jurisdictions of the United Kingdom and Gibraltar. The
                            evaluation has been performed through source code review, functionality testing, emulation,
                            verification of mathematical treatise, and statistical analysis.<br>
                            Click here to view the latest RNG and games certificate.</p><br>
                        <h3>Is online bingo different to land based bingo?</h3><br>
                        <p>There are many similarities between playing bingo online and playing it in a land based bingo
                            club. Every player has a ticket and marks off the numbers on the ticket as they are called.
                            The
                            player that marks off all their numbers first is the winner. Along the way there are often
                            smaller prizes for crossing off One Line or Two Lines on the ticket first. However, when
                            you’re
                            playing online bingo, you don’t have to worry about keeping up with the caller because our
                            games
                            can be set to mark automatically.</p><br>
                        <h3>How does bingo work? Is online bingo fixed?</h3><br>
                        <p>For anyone new to the online bingo world, our how to play bingo online guide is a great place
                            to
                            start. Is online bingo fixed? In a word, no. While you can’t see the balls being drawn in
                            real
                            life, we use a Random Number Generator to pick the numbers for each bingo game so they are
                            fair.
                            For more information about tombola and playing with us please head to our Bingo Advice, Help
                            and
                            FAQs page.</p>
                    </div> --}}
                </div>
            </div>
        </div>
</section>
@endsection
