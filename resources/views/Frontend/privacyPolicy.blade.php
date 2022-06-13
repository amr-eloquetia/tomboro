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
                    <li><a href="#0">Privacy Policy</a></li>
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
                    {{!! trans('translation.privacy policy') !!}}
                    {{-- <div class="row" style="display: flex; flex-direction:column">
                        <h2>Privacy policy</h2>
                        <h3>Introduction</h3>
                        <p>
                            As a "data controller" (meaning we are responsible for deciding what personal
                            information we collect about you and what reasons we use it for) tombola
                            (International) plc is committed to protecting and respecting your privacy.<br>
                            When you register play and contact tombola the data controller is tombola
                            International Plc.
                        </p><br>
                        <p>Address- tombola International Plc , UK address . If you need have any queries
                            concerning your personal data contact us at support@tomboro.ro.
                        </p><br>
                        <p>Please read the following policy to understand how we collect and use information
                            about users of our websites, tombola bingo www.tombola.co.uk and tombola arcade
                            www.tombolaarcade.co.uk including versions of our websites viewed on mobile phones,
                            tablets or other electronic devices (in all cases referred to as the 'websites').
                            The Privacy Policy should be read in conjunction with the tombola Terms and
                            Conditions and any additional applicable terms posted to the websites.
                        </p><br>
                        <h3>Information Collected</h3>
                        <p>We collect information from you when you visit our website, use our app. Sometimes,
                            this information is provided to us by you – like when you register for the first
                            time and when you make use of our products or get in touch with us.The provision of
                            information to us is voluntary; however, if you do not provide us with Transaction
                            information or Preference information, we may not be able to provide our service or
                            parts of it to you or provide you with updates.
                        </p><br>
                        <table>
                            <tr>
                                <th>
                                    <p>Category of personal data</p>
                                </th>
                                <th>
                                    <p>Examples of your personal data</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>Contact information</p>
                                </td>
                                <td>
                                    <p>Name, Address, Email Address, Telephone Number</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Transaction information</p>
                                </td>
                                <td>
                                    <p>Contact information, together with your username, online
                                        account details, deposits made and withdrawn, stakes placed, payment details,
                                        any
                                        communications we have about your purchases, games played</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Legal information</p>
                                </td>
                                <td>
                                    <p>Your date of birth, fraud checks or flags raised about your
                                        transactions, payment card refusals, complaints</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Preference information</p>
                                </td>
                                <td>
                                    <p>Your marketing preferences, your account settings including
                                        any default preferences, any preferences we have observed, such as the types of
                                        offers that interest you, or the areas of our website that you visit.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Communications with us</p>
                                </td>
                                <td>
                                    <p> Communications we may have with you, whether relating to a
                                        transaction or not. Please note that calls to our customer services team may be
                                        recorded
                                    </p>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Voluntary information</p>
                                </td>
                                <td>
                                    <p>Any voluntary information you provide us with, such as your
                                        gender, responses to surveys or competition entries, your favourite types of
                                        online
                                        game.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Observed information</p>
                                </td>
                                <td>
                                    <p>Details of your online browsing activities on our website, such
                                        as the pages, products or areas of our website that you visit, or which link has
                                        brought you to our website from our email communications or other websites.<br>
                                        This information may be identifiable to you because you are logged in to your
                                        account, or because we have collected details of your IP address or the device
                                        that
                                        you have used to access the website. This will also collected the geographic
                                        region
                                        which your device reports to us that you are located in.<br>

                                        Customer specific: When logged into your account we collect information about
                                        your
                                        device (make and model) and from your web browser such as browser type and
                                        version,
                                        your IP address (to validate location) and Browser User Agent (to enhance your
                                        experience on the site) and we generate a unique device identifier for you on
                                        tombola or use the actual device identifier generated by iOS and Android when
                                        using
                                        the app. We use global and session tracking cookies for fraud and user journey
                                        tracking to maximise user experience and flow through our websites and we use
                                        request cookies to help us diagnose if users are having any problems on the
                                        websites. For more information on cookies, please see our cookies policy.<br>

                                        Website users = Google analytics anonymous data collection about spend times on
                                        website, customer journey on website and which sites users are coming from and
                                        going
                                        to without tying it to specific users.</p>
                                </td>
                            </tr>
                        </table><br>

                        <p>We hold this information on our servers securely in Ireland. Players can use the
                            tombola bingo and arcade websites with the same login details.</p><br>
                        <h3>Purposes</h3><br>
                        <p>We use the personal data we collect about you for various purposes. To do this we
                            must rely on a specific "lawful bases" for processing that personal data. The tables
                            below sets out under which basis we process different information about you, an
                            explanation of the purpose of that processing and the specific rights in relation to
                            your personal data, which may depend on the basis we process it for.</p><br>
                        <table>
                            <th>
                                <p>What personal data do we use?</p>
                            </th>
                            <th>
                                <p>Lawful basis and purpose</p>
                            </th>
                            <tr>
                                <td>
                                    <p>Contact information <br> Observed information</p>
                                </td>
                                <td>
                                    <p>Consent: to send you direct marketing in accordance with the preferences you
                                        select
                                        when you sign up to receive updates, purchase products, or via our preferences
                                        center.<br>

                                        To collect certain personal data about you via cookies or other similar
                                        technologies, as more fully described in our Cookies Policy.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Transaction information</p>
                                </td>
                                <td>
                                    <p>Performance of our contract with you: to take payment for our services and to
                                        provide our services to you, to deal with any customer support queries and
                                        provide
                                        customer service or any after sales services.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Legal information, Transaction information, Communications (where
                                        relevant), Preference information in the case of marketing and cookie
                                        preferences
                                        only</p>
                                </td>
                                <td>
                                    <p> Complying with legal obligations: To confirm your identity and your age, to keep
                                        records required by law or to evidence our compliance with laws, including tax
                                        laws,
                                        consumer protection laws, our regulatory requirements, and data protection laws.
                                        To
                                        provide information to law enforcement agencies or other authorities where we
                                        are
                                        required to do so.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Transaction information, Legal information, Communications, Preference
                                        information</p>
                                </td>
                                <td>
                                    <p>Our legitimate interests: For our internal business administration, to manage
                                        Player
                                        accounts, including keeping general records of customers, sales, customer care
                                        and
                                        other interactions, and to monitor, investigate and protect genuine customers
                                        and
                                        our business from fraud to minimise the risk of false details being used, and
                                        abuse
                                        of card details by fraudsters. This is necessary in order for us to operate
                                        efficiently, deal with any issues which may arise and to protect ourselves
                                        against
                                        any future legal claims and ourselves and others against fraudulent
                                        transactions.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Contact information, Preference information, Communications, Voluntary
                                        information</p>
                                </td>
                                <td>
                                    <p> To manage any competitions or other promotions that you have chosen to
                                        participate
                                        in.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Contact information</p>
                                </td>
                                <td>
                                    <p>To publish your username if you are a winner on our website and on our social
                                        media
                                        channels. </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Transaction information, Preference information
                                        Communications, Preference information, Voluntary information, Observed
                                        information</p>
                                </td>
                                <td>
                                    <p>To target our direct marketing to you (where you have consented to receive it):
                                        This
                                        means that we use the information you provide us with and that we observe from
                                        your
                                        interactions with us to build a better picture of the type of offers and
                                        products/services we can provide which you might be interested in, so that the
                                        communications you receive are more relevant to you. Without using this
                                        information,
                                        we could only send generic communications to you, and we'd rather not be
                                        cluttering
                                        up your inbox! We believe this is justified as you are in control over whether
                                        you
                                        receive our direct marketing, through our preference centre and each time we
                                        contact
                                        you.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Transaction information, Preference
                                        information
                                        Communications, Preference information, Voluntary information, Observed
                                        information</p>
                                </td>
                                <td>
                                    <p>To improve our marketing activity more generally: This means we use information
                                        about you and about our other customers to work out what is working and what is
                                        not
                                        in terms of our marketing activity or our sales performance, so that we can
                                        develop
                                        our websites, products and offers to be more relevant to our customers
                                        generally, to
                                        improve your online experience and the products we offer. We will also use
                                        information provided by your device to recommend the intended geographic website
                                        for
                                        the location it reports you as being in.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Transaction information
                                        Contact information
                                        Observed information</p>
                                </td>
                                <td>
                                    <p>We monitor customer use of our services to identify customers who may need
                                        support
                                        and to provide support to customers (including by setting and monitoring limits
                                        on
                                        stakes/deposits) in respect of their use and frequency of use of our online
                                        games,
                                        as required by the Gambling Commission.</p>
                                </td>
                            </tr>

                        </table><br>


                        <h3>Requesting your rights</h3><br>
                        <p>You have certain legal rights, which are briefly summarised below, in relation to
                            any personal data about you which we hold.<br>
                            Where our processing of your personal data is based on your consent, you have the
                            right to withdraw your consent at any time. If you do decide to withdraw your
                            consent we will stop processing your personal data for that purpose, unless there is
                            another lawful basis we can rely on – in which case, we will let you know. Your
                            withdrawal of your consent won't impact any of our processing up to that point.<br>
                            Where our processing of your personal data is necessary for our legitimate
                            interests, you can object to this processing at any time. If you do this, we will
                            need to show either a compelling reason why our processing should continue, which
                            overrides your interests, rights and freedoms or that the processing is necessary
                            for us to establish, exercise or defend a legal claim.</p><br>
                        <table>
                            <th>
                                <p>Your right</p>
                            </th>
                            <th>
                                <p>What does it mean?</p>
                            </th>
                            <th>
                                <p>Limitations and conditions of your right</p>
                            </th>
                            <tr>
                                <td>
                                    <p>Right of access</p>
                                </td>
                                <td>
                                    <p>Subject to certain conditions, you are entitled to have access to
                                        your personal data (this is more commonly known as submitting a "data subject
                                        access
                                        request").</p>
                                </td>
                                <td>
                                    <p>If possible, you should specify the type of information you would like to
                                        see to ensure that our disclosure is meeting your expectations.
                                        We must be able to verify your identity. Your request may not impact the rights
                                        and
                                        freedoms of other people, eg privacy and confidentiality rights of other
                                        individuals.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Right to data portability</p>
                                </td>
                                <td>
                                    <p>Subject to certain conditions, you are entitled to receive
                                        the personal data which you have provided to us and which is processed by us by
                                        automated means, in a structured, commonly-used machine readable format.</p>
                                </td>
                                <td>
                                    <p>If you
                                        exercise this right, you should specify the type of information you would like
                                        to
                                        receive (and where we should send it) where possible to ensure that our
                                        disclosure
                                        is meeting your expectations.
                                        This right only applies if the processing is based on your consent or on our
                                        contract with you and when the processing is carried out by automated means (ie
                                        not
                                        for paper records). It covers only the personal data that has been provided to
                                        us by
                                        you.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rights in relation to inaccurate personal or incomplete data</p>
                                </td>
                                <td>
                                    <p>You may challenge the
                                        accuracy or completeness of your personal data and have it corrected or
                                        completed,
                                        as applicable.<br>
                                        We encourage you to notify us of any changes regarding your personal data as
                                        soon as
                                        they occur, including changes to your contact details, telephone number.</p>
                                </td>
                                <td>
                                    <p>This right
                                        only applies to your own personal data. When exercising this right, please be as
                                        specific as possible.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Right to object to or restrict our data processing</p>
                                </td>
                                <td>
                                    <p>Subject to certain conditions,
                                        you have the right to object to or ask us to restrict the processing of your
                                        personal data.</p>
                                </td>
                                <td>
                                    <p>As stated above, this right applies where our processing of your
                                        personal data is necessary for our legitimate interests. You can also object to
                                        our
                                        processing of your personal data for direct marketing purposes.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Right to erasure</p>
                                </td>
                                <td>
                                    <p>Subject to certain conditions, you are entitled to have your
                                        personal data erased (also known as the "right to be forgotten"), eg where your
                                        personal data is no longer needed for the purposes it was collected for, or
                                        where
                                        the relevant processing is unlawful.</p>
                                </td>
                                <td>
                                    <p>We may not be in a position to erase your
                                        personal data, if for example,
                                        A) we need it to comply with a legal obligation, or B) exercise or defend legal
                                        claims.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Right to withdrawal of consent</p>
                                </td>
                                <td>
                                    <p>As stated above, where our processing of your
                                        personal data is based on your consent you have the right to withdraw your
                                        consent
                                        at any time.</p>
                                </td>
                                <td>
                                    <p>If you withdraw your consent, this will only take effect for future
                                        processing.</p>
                                </td>
                            </tr>
                        </table><br>

                        <p>If you have a question or concern about your privacy and rights on tombola, please
                            do not hesitate to contact Us.</p>
                        <p>Free telephone number: +40720517673</p>
                        <p>E-mail: support@tomboro</p><br>
                        <p>If you wish to exercise any of your rights please contact the Data Compliance
                            Officer: dp@tombola.com</p>
                        <p>You also have the right to lodge a complaint with your local supervisory authority.
                            In the UK this is the Information Commissioner's Office and more information can be
                            found at https://ico.org.uk/.</p><br>
                        <h3>Who do we share personal information with and where are they?</h3><br>
                        <p>Your personal data may be processed by us and/or our business partners, suppliers,
                            sub-processing certain services on our behalf for the purposes specified above. For
                            example, we share information with security verification companies, for the purpose
                            of card/payment processing, identity and security checking (the Customer's credit
                            rating will be unaffected) or investigations on Tombola's behalf.</p><br>
                        <p>Such third parties have access to personal data solely for the purposes of
                            performing the services specified in the applicable engagement, or to comply with
                            applicable laws and not for any other purpose.</p><br>
                        <p>We will have in place an agreement with our service providers which will restrict
                            how they are able to process your personal information and require them to keep it
                            secure.</p><br>
                        <p>We may also use service providers in less direct ways, such as in the provision of
                            our payment and finance systems, fraud verification. We may exchange information
                            with other companies and organisations for the purposes of age verification, data
                            cleansing, fraud protection, credit checks and/or risk reduction.</p><br>
                        <p>If you have been found to have defrauded or cheated the company or any service
                            including game manipulation or payment fraud, including stolen credit cards, or
                            fraudulent activity (including chargeback or other reversal of a payment) or money
                            laundering, we reserve the right to share this information, including your identity
                            with other online gaming websites, banks, credit companies and agencies.</p><br>
                        <p>Data privacy laws across the countries in the European Union, Norway, Iceland and
                            Liechtenstein, (the European Economic Area) are the same or very similar. We have
                            called this area 'Europe' for ease. If it is necessary for us to transfer your
                            personal information outside Europe we will only make that transfer if we use a
                            method approved as privacy-safe by the data privacy regulators in Europe:</p><br>
                        <ul>
                            <li>• the country to which the personal information is to be transferred has been
                                approved by them;</li>
                            <li>• the recipient of the personal information is in the USA and has certified they
                                will comply with the Privacy Shield rules to protect personal information, approved
                                by them;</li>
                            <li>• the recipient of the personal information is legally bound to protect your
                                personal information under binding corporate rules approved by them;</li>
                            <li>• we have made sure that there is a contract to protect your personal data with the
                                recipient, using a template approved by them;</li>
                            <li>• the transfer is needed for another reason approved by them, such as to make an
                                international delivery of a prize at your request; or</li>
                            <li>• where you explicitly consent to the transfer.</li>
                        </ul><br>
                        <p>If any service provider is based outside of the European Economic Area, we will
                            ensure that the provider is either a current subscriber to the EU/US Privacy Shield,
                            or we have an appropriate contract for the international transfer of personal
                            information with them.</p><br>
                        <p>We may share any of your personal data with a prospective purchaser or purchaser of
                            any part of our business, on the basis of our legitimate interests and the interests
                            of our purchaser, so that they can appropriately value the business and assess any
                            risks and continue doing business with you after the acquisition.
                            In addition we may be required by law or by a court to disclose certain information
                            about you or any engagement we may have with you to relevant regulatory, law
                            enforcement and/or other competent authorities. We may also need to share your
                            information in order to enforce or apply our legal rights under any agreed terms of
                            business.</p><br>
                        <h3>How long do we keep your information for?</h3><br>
                        <p>If you are our customer we will keep your personal data during the period your
                            account remains active and then, after your account becomes inactive, for as long as
                            is necessary in connection with both our and your legal rights and obligations. This
                            may mean that we keep some types of personal data for longer than others.</p><br>
                        <p>We will only retain your personal data for a limited period of time. This will
                            depend on a number of factors, including:</p><br>
                        <ul>
                            <li>• any laws or regulations that we are required to follow, especially regulatory
                                requirements related to our online gambling licenses;</li>
                            <li>• whether we are in a legal or other type of dispute with each other or any third
                                party;</li>
                            <li>• the type of information that we hold about you; and</li>
                            <li>• whether we are asked by you or a regulatory authority to keep your personal data
                                for a valid reason.</li>
                        </ul><br>

                        <p>Any personal data contained in any work related correspondence or records may be
                            retained for longer, dependant on the retention period of the file that your
                            personal data is held on.</p><br>
                        <h3>Your account</h3><br>
                        <p>Access to your personal account information is restricted to you by your unique
                            username and password. All details are stored under the strictest supervision. We
                            want to ensure complete trust with our Players and to make playing tombola an
                            enjoyable experience.</p><br>
                        <h3>Security</h3><br>
                        <p>We have implemented suitable security policies and rules and fully understand the
                            importance of information security and the need to store it correctly. We store all
                            personal information within a secure network meaning data, passed back and forth
                            between your computer and our systems is secured using a public key cryptography.
                            Your computer exchanges key information with our servers to create a private
                            conversation that only your computer and our servers can understand.</p><br>
                        <p>Our links with our payment gateways use technology to transmit any payment
                            information securely. They in turn have secure encrypted links between themselves
                            and all of the major banks to allow the payment to be processed. Tombola employees
                            do NOT have access to your full credit/debit card details.</p><br>
                        <h3>Protection of Children</h3><br>
                        <p>The services on tombola are not intended for or directed to persons under the age of
                            18. Any person who provides their information to us through our Websites represent
                            that they are over 18. We reserve the right to access and verify any information
                            submitted to us by you. If we become aware that a minor has attempted to or has
                            submitted personal information via the Websites, we will take action to remove such
                            information from our records.</p><br>
                        <h3>Marketing contact</h3><br>
                        <p>You may opt out of receiving communications offering commercial goods or services at
                            any time by adjusting your contact preferences within the "My Account" area of the
                            websites, or by sending a request to support@tomboro.ro in accordance with our
                            Privacy Policy.</p><br>
                        <p>After 48 hours you will no longer receive any marketing via direct mail/email/SMS
                            text. However, we may still need to correspond with you regarding account details,
                            prize fulfilment and other operational matters and you consent to continue to
                            receive these account communications even after you have opted-out of commercial
                            offerings solicitations.</p><br>
                        <h3>Changes to our Policy</h3><br>
                        <p>We reserve the right to update this privacy policy at any time but do not want to
                            bother you about minor changes, so we will only provide you with a new privacy
                            policy when we make any updates with a significant impact on your privacy which you
                            should know about. The latest privacy policy with any other updates will always be
                            available on our websites for you to check. We may also notify you in other ways
                            from time to time about our use of your personal information. This privacy notice
                            was originally created and published May 2018.</p><br>
                        <h3>Contact Information</h3><br>
                        <ul>
                            <li>• Free telephone number: +40 720 517 673</li>
                            <li>• E-mail: support@tomboro.ro</li>
                            <li>• Last updated on 20/03/2022</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
</section>
@endsection
<style>
    table,
    tr,
    td,
    th {
        border: 1px solid white;
        padding: 10px;
    }

    h2 {
        text-align: center;
    }

    ul {
        margin-left: 12px !important;
    }
</style>
