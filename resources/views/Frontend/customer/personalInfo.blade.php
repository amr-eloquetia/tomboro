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
                        {{-- {{ URL::asset('storage/user_avatars/' .Auth::user()->avatar)}} --}}
                    </div>
                    <h3 class="user-card__name">{{Auth::user()->username}}</h3>
                    <span class="user-card__id">ID : 195359{{Auth::user()->id}}</span>
                </div><!-- user-card end -->
                <div class="user-action-card" style="background-image: none; background-color:#343a40">
                    <ul class="user-action-list">
                        <li><a href="{{ URL::route('userPanel') }}">{{ trans('translation.biletele mele') }}</a></li>
                        <li class="active"><a
                                href="{{ URL::route('userInfo') }}">{{trans('translation.Informațiipersonale')}}</a>
                        </li>
                        <li><a href="{{ URL::route('userTransactions') }}">{{ trans('translation.Tranzacții') }}</a>
                        </li>
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
            <div class="col-lg-8 mt-lg-0 mt-5">
                <div class="user-info-card" style="background-image: none; background-color:#343a40">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">{{trans('translation.Informațiipersonale')}}</h3>
                        <button type="button"><a href="#0" data-toggle="modal" data-target="#editInfoModal"><i
                                    class="far fa-edit"></i> {{ trans('translation.editează') }}</a></button>

                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">{{ trans('translation.Nume') }}</span>
                            <span class="value">{{Auth::user()->username}}</span>
                        </li>
                        <li>
                            <span class="caption">{{ trans('translation.adresa') }}</span>
                            <span class="value">{{Auth::user()->address}}</span>
                        </li>
                        <li>
                            <span class="caption">Status</span>
                            <span class="value status-active">Active</span>
                        </li>
                        <li>
                            <span class="caption">Email</span>
                            <span class="value">{{Auth::user()->email}}</span>
                        </li>
                        <li>
                            <span class="caption">Mobile</span>
                            <span class="value">{{Auth::user()->phone}}</span>
                        </li>
                    </ul>
                </div><!-- user-info-card end -->
                {{-- <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Account Settings</h3>
                        <button type="button"><a href="#0" data-toggle="modal" data-target="#editInfoModal"><i
                                    class="far fa-edit"></i> Edit</a></button>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">Language</span>
                            <span class="value">English (United States)</span>
                        </li>
                        <li>
                            <span class="caption">Time Zone</span>
                            <span class="value">(GMT-06:00) Central America</span>
                        </li>
                        <li>
                            <span class="caption">Status</span>
                            <span class="value status-active">Active</span>
                        </li>
                    </ul>
                </div>
                <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Email Addresses</h3>
                        <button type="button"><i class="far fa-edit"></i> Edit</button>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">Email</span>
                            <span class="value">{{Auth::user()->email}}</span>
                        </li>
                    </ul>
                </div>
                <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Phone</h3>
                        <button type="button"><i class="far fa-edit"></i> Edit</button>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">Mobile</span>
                            <span class="value">+1 234-567-8925</span>
                        </li>
                    </ul>
                </div>
                <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Security</h3>
                        <button type="button"><i class="far fa-edit"></i> Edit</button>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">Password</span>
                            <span class="value user-password">***************</span>
                        </li>
                    </ul>
                </div> --}}
                <!-- user-info-card end -->
            </div>
        </div>
    </div>
</div>
<!-- user section end -->
<div class="modal fade" id="editInfoModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                    <h3 class="title">Edit Personal Info</h3>
                    <div class="account-form-wrapper">
                        <form method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="form-group">
                                {{-- <div class="avatar-upload">
                                    <div class="obj-el"><img src="assets/images/elements/team-obj.png" alt="image">
                                    </div> --}}
                                    <div class="avatar-edit">
                                        <input type='file' name='avatar' id="imageUpload" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    {{-- <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url(assets/images/user/pp.png);">
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="username"
                                    placeholder="{{Auth::user()->username}}">
                            </div>
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" name="firstname" id="firstname"
                                    placeholder="{{Auth::user()->firstname}}">
                            </div>
                            <div class="form-group">
                                <label>Lastname</label>
                                <input type="text" name="lastname" id="lastname"
                                    placeholder="{{Auth::user()->firstname}}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" placeholder="{{Auth::user()->address}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="{{Auth::user()->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" placeholder="{{Auth::user()->email}}">
                            </div>
                            {{-- <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password" id="password" placeholder="password">
                            </div> --}}
                            <div class="form-group text-center mt-5">
                                <button type="submit" class="cmn-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
