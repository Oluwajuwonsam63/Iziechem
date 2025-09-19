@extends('layouts.signup')

@section('content')

<style>
html, body {
    height: 100vh;
    margin: 0;
    padding: 0;
    overflow: scroll;
}
</style>


        <!-- Login Start -->
        <section class="login-page" style="margin-right: auto; padding-bottom:100px; margin-left: auto; max-width: 100%; position: relative; margin-bottom: 60px">
            <video autoplay muted loop style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; object-fit: cover; z-index: -1;">
                <source src="{{ asset('assets/vid/vid1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container" style="min-height: 800px">
                <div class="row gutter-y-30 align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="login-page__right wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="login-page__login-box" style="background: rgba(255, 255, 255, 0.9); border-radius: 30px; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                <div class="login-page__content">
                                    <div class="login-page__logo" style="align-item: center; margin-bottom: 20px;">
                                        <a href="{{ url('/') }}">
                                            <img src="assets/images/logo4.png" width="155" alt="logo">
                                        </a>
                                    </div>
                                    <h2 class="login-page__title">{{ __('Register') }}</h2>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="login-page__group">
                                            <div class="login-page__input-box">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"  placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="email">{{ __('Email') }}</label>
                                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input type="password" placeholder="Enter Password" id="password" class="login-page__password form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                <span class="toggle-password pass-field-icon fa fa-fw fa-eye-slash"></span>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="password">{{ __('Confirm Password') }}</label>
                                                <input type="password" placeholder="Retype Password" class="login-page__password form-control @error('password') is-invalid @enderror form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                                <span class="toggle-password pass-field-icon fa fa-fw fa-eye-slash"></span>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <div class="login-page__input-box__btn">
                                                    <button type="submit" class="wallox-btn wallox-btn--base">{{ __('Sign Up') }}</button>
                                                </div>
                                                <div class="login-page__input-box__btn">
                                                    <a href="{{ route('auth.google') }}" class="wallox-btn wallox-btn__google"><img src="assets/images/shapes/google.png" alt> {{ __('Or sign up with Google') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="login-page__form__text">{{ __('You have an account?') }}<a href="{{ route('login') }}">{{ __('Sign in') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login End -->
@endsection
