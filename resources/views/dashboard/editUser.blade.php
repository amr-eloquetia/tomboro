@extends('dashboard.layouts.master')

@section('title', 'Edit User')

@section('content')
<div class="account-form-area">
    <h3 class="title">Edit "{{ $user->username }}" Personal Info</h3>
    <div class="account-form-wrapper">
        <form method="POST" action="{{ route('editUser', $user->id) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="form-group">
                <label>Avatar</label>
                <div class="avatar-edit">
                    <input type='file' name='avatar' id="imageUpload" />
                    <label for="imageUpload"></label>
                </div>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" placeholder="{{ $user->username }}">
            </div>
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" id="firstname" placeholder="{{ $user->firstname }}">
            </div>
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="{{ $user->lastname }}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" id="address" placeholder="{{ $user->address }}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" id="phone" placeholder="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="{{ $user->email }}">
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
@endsection
