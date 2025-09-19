@extends('layouts.signup')

@section('content')
<style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrolling on the body */

}
</style>


        <!-- Login Start -->
            <video autoplay muted loop style="position: fixed; top: 0; left: 0; width: 100vw; object-fit: cover; z-index: -1;">
                <source src="{{ asset('assets/vid/vid1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container">
                <div class="row gutter-y-30 align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="login-page__right wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="login-page__login-box" style="background: rgba(255, 255, 255, 0.9); border-radius: 30px; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-top: 15px; margin-bottom: 30px;">
                                <div class="login-page__content">
                                    <div class="login-page__logo">
                                        <a href="{{ url('/') }}">
                                            <img src="assets/images/logo4.png" width="155" alt="logo">
                                        </a>
                                    </div>
                                    <h2 class="login-page__title">{{ __('Login') }}</h2>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="login-page__group">
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
                                            <div class="login-page__input-box login-page__input-box--bottom">
                                                <div class="login-page__input-box__inner">
                                                    <input class="login-page__input-box__toggle" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="remember-policy" for="remember-policy">{{ __('remember me') }}</label>
                                                </div>
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="login-page__form__forgot">{{ __('forgot password?') }}</a>
                                                @endif
                                            </div>
                                            <div class="login-page__input-box">
                                                <div class="login-page__input-box__btn">
                                                    <button type="submit" class="wallox-btn wallox-btn--base">{{ __('Sign in') }}</button>
                                                </div>
                                                <div class="login-page__input-box__btn">
                                                    <a href="{{ route('auth.google') }}" class="wallox-btn wallox-btn__google"><img src="assets/images/shapes/google.png" alt> {{ __('Or sign in with Google') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="login-page__form__text">{{ __('Dont have an account?') }}<a href="{{ route('register') }}">{{ __('Sign up now') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login End -->
@endsection
