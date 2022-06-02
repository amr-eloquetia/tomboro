@extends('Frontend.layouts.master')
@section('content')
<!-- inner-hero-section start -->
<div class="inner-hero-section style--five">
</div>
<!-- inner-hero-section end -->

<!-- user section start -->
<div class="mt-minus-150 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user-card" style="background-image: none; background-color:#343a40">
                    <div class="avatar-upload">
                        <div class="obj-el"><img src="{{ URL::asset('assets/images/elements/team-obj.png') }}"
                                alt="image"></div>
                        {{-- <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div> --}}
                        <div class="avatar-preview">
                            <div id="imagePreview"
                                style="background-image: url('{{ asset('storage/user_avatars/' .Auth::user()->avatar) }}');">
                            </div>
                        </div>
                    </div>
                    <h3 class="user-card__name">{{Auth::user()->username}}</h3>
                    <span class="user-card__id">ID : 195359{{Auth::user()->id}}</span>
                </div><!-- user-card end -->
                <div class="user-action-card" style="background-image: none; background-color:#343a40">
                    <ul class="user-action-list">
                        <li><a href="{{ URL::route('userPanel') }}">{{ trans('translation.biletele mele') }}</a></li>
                        <li><a href="{{ URL::route('userInfo') }}">{{trans('translation.Informațiipersonale')}}</a></li>
                        <li class="active"><a href="{{ URL::route('userTransactions') }}">{{
                                trans('translation.Tranzacții') }}</a></li>
                        <li><a href="{{ URL::route('contact') }}">{{ trans('translation.Centru de asistență') }}</a>
                        </li>
                        <li><a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-light">Logout</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div><!-- user-action-card end -->
            </div>
            <div class="col-lg-8 mt-lg-0 mt-4">
                {{-- <div class="transaction-balance-wrapper" style="background-image: none; background-color:#343a40">
                    <div class="left">
                        <div class="transaction-balance" style="background-image: none; background-color:#2f3235">
                            <h4 class="balance">$2956.00</h4>
                            <span>Available Balance</span>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#0" class="transaction-action-btn"
                            style="background-image: none; background-color:#2f3235">
                            <img src="{{ URL::asset('assets/images/icon/transaction/1.png') }}" alt="image">
                            <span>Deposit</span>
                        </a>
                        <a href="#0" class="transaction-action-btn ml-4"
                            style="background-image: none; background-color:#2f3235">
                            <img src="{{ URL::asset('assets/images/icon/transaction/2.png') }}" alt="image">
                            <span>Withdraw</span>
                        </a>
                    </div>
                </div> --}}
                <!-- transaction-balance-wrapper end -->
                <div class="all-transaction" style="background-image: none; background-color:#343a40; margin-top:0">
                    <div class="all-transaction__header">
                        <h3 class="title">All Transactions</h3>
                        {{-- <div class="date-range">
                            <input type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en"
                                class="datepicker-here form-control" data-position='top left'
                                placeholder="min - max date">
                            <i class="las la-calendar-alt"></i>
                        </div> --}}
                    </div>
                    <div class="table-responsive-xl">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ trans('translation.data') }}</th>
                                    <th>{{ trans('translation.Descriere') }}</th>
                                    <th>Pay. method</th>
                                    <th>{{ trans('translation.suma') }}</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody style="background-image: none; background-color:#2f3235">
                                {{-- <tr>
                                    <td>
                                        <div class="date">
                                            <span>16</span>
                                            <span>APR</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p>Withdraw</p>
                                        <span>Withdraw to Bank account</span>
                                    </td>
                                    <td>
                                        <p>Visa</p>
                                    </td>
                                    <td>
                                        <span class="amount minus-amount">- $562 (USD)</span>
                                    </td>
                                    <td>
                                        <div class="status-pending"><i class="fas fa-ellipsis-h"></i></div>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="load-more">
                        <button type="button">Show More Lotteries <i class="las la-angle-down ml-2"></i></button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- user section end -->
@endsection
