@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('invite.update') }}" class="sign-in-form">
                @csrf
                <input type="text" value="{{request()->input('invite_token')}}" name="invite_token" hidden>
                <h2 class="title">Resetare parola</h2>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Parola">
                    @error('password')
                    <span>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Repeta parola">
                </div>
                <div class="input-field-ckeckbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                        ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Doresc sa raman autentificat
                    </label>
                </div>
                <input type="submit" value="{{ __('Login') }}" class="btn solid" />
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <img src="{{ URL::asset('img/logo-delta.png') }}" style="max-width: 300px; margin: auto;"
                class="image nexyo-logo" alt="" />
        </div>
    </div>
</div>
@endsection
