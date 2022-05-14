@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Autentificare</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Adresa email">
                    @error('email')
                    <span class="mb-1">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="input-field mt-4">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Parola">
                    @error('password')
                    <span>
                        {{ $message }}
                    </span>
                    @enderror
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
