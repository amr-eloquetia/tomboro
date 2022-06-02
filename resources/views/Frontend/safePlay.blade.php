@extends('Frontend.layouts.master')
@section('content')
<div class="inner-hero-section">
    {{-- <div class="bg-shape"><img src="{{ URL::asset('assets/images/elements/inner-hero-shape.png') }}" alt="image">
    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="page-list">
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="#0">Safe Play</a></li>
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
                    <div class="row" style="display: flex; flex-direction:column">
                        <h2>Tomboro SafePlay</h2><br>
                        <p>We want you to have fun when you’re playing on tombola.co.uk and tombolaarcade.co.uk, but it
                            is
                            also extremely important to us that you are in control of what you’re spending. With this in
                            mind we’ve created a few tools to help you stay in control of your spending.</p><br>
                        <h3>Deposit Limits</h3><br>
                        <p>You can set yourself a maximum amount that you would like to deposit in either a week or a
                            day.
                            You can do this yourself in the “my account” section and it will apply across tombola.co.uk
                            and
                            tombolaarcade.co.uk<br>
                            A week runs from midnight on Monday to 23:59:59 the following Sunday. A day runs from
                            midnight -
                            midnight. Please note that there is a site maximum of £500.00 per week which applies to
                            everyone.<br>
                            If you are lowering your limit then this change will happen immediately.<br>
                            If you are increasing your limit then the change will take 24 hours to come into effect. You
                            can
                            choose to lock your limit into place, which means you will not be able to increase your
                            limit
                            until the lock period has elapsed.<br>
                            Customer services are unable to alter limits set by players.</p><br>
                        <h3>Stake Limits</h3><br>
                        <p>You can set yourself a maximum amount that you would like to stake per single game, on either
                            the bingo or arcade site. We call this your stake limit.<br>
                            If you choose to apply a stake limit the change takes effect immediately, and the stake
                            limit
                            stays in place until you make changes. If you decide to turn off your stake limit, or raise
                            the
                            amount, a 24 hour cool off period will be applied before you may confirm the change.<br>
                            For more control over your spending you can also choose to lock your stake limit in place
                            for a
                            set period of time. Once you've locked your limits you will still be able to lower them at
                            any
                            time but you cannot increase them until the lock period has ended.<br>
                            If you have any queries about using stake limits, please speak to our friendly Safe Play
                            team or
                            call 0800 29 888 73.</p><br>
                        <h3>Time Keeper</h3><br>
                        <p>Time Keeper allows you to keep track of how long you’ve been playing. Once activated The Time
                            Keeper clock will start when a real money gaming transaction is made.<br>

                            The Time Keeper notification will appear once the selected time period has elapsed, and at
                            the
                            point when you attempt to make another real money gaming transaction.
                            Time Keeper is available in the My Account section on tombola.co.uk</p><br>

                        <h3>Cooling Off</h3><br>
                        <p>You can temporarily exclude yourself from the site for any period of time from 24 hours up to
                            6
                            weeks in your account settings. Please note that your account will be frozen immediately and
                            cannot be reactivated until the time period has elapsed.</p><br>
                        <h3>Self Exclusion</h3><br>
                        <p>If you feel that you need to exclude yourself from the site for any reason, you can exclude
                            yourself from the website for either 6 months, 12 months, or permanently. You can do this
                            yourself in your account settings.<br>
                            Please note that once you have self excluded this cannot be reversed and your account cannot
                            be
                            reactivated until the time period has elapsed. If you decide to self exclude yourself
                            permanently from the website, you will no longer be able to access the website.</p><br>
                        <h3>GamCare</h3><br>
                        <p>GamCare, the UK's National centre for information, advice and practical help regarding the
                            social impact of gambling, is pleased to award GamCare Certification to tombola
                            (International)
                            plc to acknowledge their achievement in implementing the GamCare Player Protection Code of
                            Practice for Remote Gambling in relation to tombola.co.uk gaming service.<br>
                            tombola (International) plc continue to apply high standards in player protection and social
                            responsibility and recognise the need to assist their customers to play responsibly. To
                            achieve
                            GamCare Certification, tombola (International) plc has implemented the following practices
                            at
                            www.tombola.co.uk/<br>
                            Age verification systems<br>
                            Controls for customer spend<br>
                            Self exclusion options for players<br>
                            Information about playing responsibly and sources of advice and support<br>
                            Training for customer services in problem gambling and social responsibility<br>
                            Consultation with GamCare when developing new technologies and products<br>
                            Support for the work GamCare carries out in addressing the social impact of gambling<br>
                            For further information visit GamCare</p><br>
                        <h3>Over 18s Only</h3><br>
                        <p>In the United Kingdom it is illegal for someone who is under 18 years of age to gamble.
                            tombola
                            (International) plc takes age verification seriously. You must be 18 or over to register and
                            place bets with us. We may ask for age verification information from you and suspend your
                            account until information proving an appropriate age is provided. Bets placed by under 18s
                            may
                            be voided.<br>
                            There are a number of third party applications that parents can use to monitor/restrict the
                            use
                            of their computer’s access to the internet:<br>
                            netnanny<br>
                            Cybersitter<br>
                            Cyberpatrol</p><br>
                        <h3>Staying in Control</h3><br>
                        <p>Online gaming is an exciting pastime for adults and at tombola we want the gaming experience
                            to
                            stay fun.<br>
                            We want you to stay in control and we ask that you only wager funds you can afford to lose -
                            it's all about playing safely and staying in control!<br>
                            With this in mind you may find the following helpful:</p><br>
                        <ul>
                            <li>• Gambling can be an exciting, enjoyable pastime and is NOT a way of making money.</li>
                            <li>• Never attempt to make up funds lost by staking further funds.</li>
                            <li>• We only want you to wager funds that you can afford to lose.</li>
                            <li>• If you don't feel in control use our tools, speak to one of the Safe Play team or get
                                help
                                from Gamcare.</li>
                            <li>• Keep a record of how much you have spent and how long you have spent gambling.</li>
                            <li>• Finally if you have developed a problem it is very important to seek help and advice.
                                Please
                                talk to Gamcarethey are the experts. Gamcare is the UK's national centre for
                                information, advice
                                and practical help regarding gambling and its social effects.</li>
                        </ul><br>
                        <h3>Do you have a gambling problem?</h3><br>
                        <ul>
                            <li>• Do you stay away from work or college to gamble?</li>
                            <li>• Do you gamble to escape from a boring or unhappy life?</li>
                            <li>• When you run out of money while you're playing, do you feel lost and in despair, and
                                feel the
                                need to gamble again as soon as possible?</li>
                            <li>• Do you gamble until your last penny is gone, even the bus fare home or the cost of a
                                cup of
                                tea?</li>
                            <li>• Have you ever lied to cover up the amount of money or time you have gambled?</li>
                            <li>• Have others ever criticised your gambling?</li>
                            <li>• Have you lied, stolen or borrowed just to get money to gamble or to pay gambling
                                debts?</li>
                            <li>• Are you reluctant to spend 'gambling money' on anything else?</li>
                            <li>• Have you lost interest in your family, friends or other interests?</li>
                            <li>• After losing, do you feel you must try and win back your losses as soon as possible?
                            </li>
                            <li>• Do arguments, frustrations or disappointments make you want to gamble?</li>
                            <li>• Do you feel depressed or even suicidal because of your gambling?</li>
                        </ul><br>

                        <p>If you have answered yes to some of the above questions then it's highly likely you may have
                            developed a gambling problem. If you would like some advice and support then, contact
                            Gamcare on
                            their helpline.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
<style>
    h2 {
        text-align: center;
    }

    ul {
        margin-left: 12px !important;
    }
</style>
