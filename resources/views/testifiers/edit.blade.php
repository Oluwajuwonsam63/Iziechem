@extends('layouts.header')

@section('content')

    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary d-inline-flex align-items-center gap-2" style="font-weight: 500; margin-left:20px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Back
        </a>
    </div>

        <section class="login-page">
            <div class="container">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-xl-6">
                        <div class="login-page__left wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="login-page__thumb real-image">
                                <img src="{{ asset('assets/images/resources/work7.png') }}" alt="login image">
                            </div>
                            <div class="login-page__thumb-two">
                                <img src="{{ asset('assets/images/resources/work8.png') }}" alt="wallox image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="login-page__right wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="login-page__login-box">
                                <div class="login-page__content">
                                    <div class="login-page__logo">
                                        <a href="index.html">
                                            <img src="{{ asset('assets/images/logo4.png') }}" width="300" alt="logo">
                                        </a>
                                    </div>
                                    <h1 class="login-page__title" style="text-align: center; font-size: 20px;">{{ __('Testifier Details') }}</h1>
                                    <form method="POST" action="{{ route('update_testifiers', $testifier->id) }}" enctype="multipart/form-data">
                                        @csrf                                        
                                        <div class="login-page__group">
                                            <div class="login-page__input-box">
                                                <label for="name">{{ __('Client Name') }}</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $testifier->name) }}" required autocomplete="name" autofocus>
                                                
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
                                                <label for="message">{{ __('Message') }}</label>
                                                <textarea col='30' rows="10" id="message"  class="form-control" name="message" required autocomplete="message">{{old('message', $testifier->message)}}</textarea>                  
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box" style="margin-bottom: 20px;">
                                                <label for="rating">{{ __('rating') }}</label>
                                                <input id="rating" type="number" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating', $testifier->rating) }}" required autocomplete="rating" autofocus style="max-width: 60px;" min="1" max="5">
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            

                                            <div class="login-page__input-box">
                                                <div class="login-page__input-box__btn">
                                                    <button type="submit" class="wallox-btn wallox-btn--base" style="magrin-top: 20px;">{{ __('Update') }}</button>
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