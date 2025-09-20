@extends('layouts.header')

@section('content')

        <section class="login-page">
            <div class="container">
                <div class="row gutter-y-30 align-items-center">
                        @include('includes.create')
                    <div class="col-xl-6">
                        <div class="login-page__right wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="login-page__login-box">
                                <div class="login-page__content">
                                    <div class="login-page__logo">
                                        <a href="index.html">
                                            <img src="{{ asset('assets/images/logo4.png') }}" width="300" alt="logo">
                                        </a>
                                    </div>
                                        @include('includes.errors')
                                    <h1 class="login-page__title" style="text-align: center; font-size: 20px;">{{ __('Teams Details') }}</h1>
                                    <form method="POST" action="{{ route('store_teams') }}" enctype="multipart/form-data">
                                        @csrf                                        
                                        <div class="login-page__group">
                                            <div class="login-page__input-box">
                                                <label for="name">{{ __('Team Name') }}</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="image">{{ __('Client Image') }}</label>
                                                <input id="image" type="file" class="form-control @error('image') is-invalid @endError" name="image" required autocomplete="image" onchange="previewImage(this)">                                                
                                                <img id="preview" src="" alt="Preview" style="max-width: 150px; margin-top: 10px; display: none;">
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="role">{{ __('role') }}</label>
                                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                                @error('role')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="bio">{{ __('bio') }}</label>
                                                <textarea col='30' rows="10" id="bio"  class="form-control" name="bio" required autocomplete="bio">{{old('bio')}}</textarea>                  
                                                @error('bio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="sign">{{ __('Client Signature') }}</label>
                                                <input id="sign" type="file" class="form-control @error('sign') is-invalid @endError" name="sign" autocomplete="sign" onchange="previewImage(this)">                                                
                                                <img id="preview" src="" alt="Preview" style="max-width: 150px; margin-top: 10px; display: none;">
                                                @error('sign')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="phone">{{ __('Phone Number') }}</label>
                                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="+234 XXX XXX XXXX" pattern="^\+234[0-9]{10}$" title="Please enter a valid Nigerian phone number starting with +234" required autocomplete="phone" autofocus>
                                                <small class="form-text text-muted">Format: +234 XXX XXX XXXX (e.g., +234 803 123 4567)</small>
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="email">{{ __('Email') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="location">{{ __('Location') }}</label>
                                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" autocomplete="location" autofocus>
                                                
                                                @error('location')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="facebook">{{ __('Facebook') }}</label>
                                                <input id="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" autocomplete="facebook" autofocus>
                                                
                                                @error('facebook')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="instagram">{{ __('instagram') }}</label>
                                                <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" autocomplete="instagram" autofocus>
                                                
                                                @error('instagram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="youtube">{{ __('youtube') }}</label>
                                                <input id="youtube" type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ old('youtube') }}" autocomplete="youtube" autofocus>
                                                
                                                @error('youtube')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="linkedIn">{{ __('linkedIn') }}</label>
                                                <input id="linkedIn" type="text" class="form-control @error('linkedIn') is-invalid @enderror" name="linkedIn" value="{{ old('linkedIn') }}" autocomplete="linkedIn" autofocus>
                                                
                                                @error('linkedIn')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="x">{{ __('x') }}</label>
                                                <input id="x" type="text" class="form-control @error('x') is-invalid @enderror" name="x" value="{{ old('x') }}" autocomplete="x" autofocus>
                                                
                                                @error('x')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="tiktok">{{ __('tiktok') }}</label>
                                                <input id="tiktok" type="text" class="form-control @error('tiktok') is-invalid @enderror" name="tiktok" value="{{ old('tiktok') }}" autocomplete="tiktok" autofocus>
                                                
                                                @error('tiktok')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <div class="login-page__input-box__btn">
                                                    <button type="submit" class="wallox-btn wallox-btn--base" style="magrin-top: 20px;">{{ __('Create') }}</button>
                                                </div>
                                            </div>
                                            <div class="login-page__input-box">
                                                <div class="login-page__input-box__btn">
                                                    <button type="reset" class="wallox-btn wallox-btn--base" style="magrin-top: 20px;">{{ __('Reset') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

@section('scripts')
<script>
function previewImage(input) {
    var preview = document.getElementById('preview');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection