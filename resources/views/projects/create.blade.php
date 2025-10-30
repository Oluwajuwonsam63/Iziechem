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
                                    <form method="POST" action="{{ route('store_projects') }}" enctype="multipart/form-data">
                                        @csrf   
                                        <div class="login-page__group">
                                            <div class="login-page__input-box">
                                                <label for="category_id">{{ __('Category') }}</label>
                                                <select id="category_id" class="form-control @error('title') is-invalid @enderror" name="category_id" required>
                                                    <option value="">{{ __('Select Category') }}</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>                                     
                                            <div class="login-page__input-box">
                                                <label for="client">{{ __('Client Name') }}</label>
                                                <input id="client" type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{ old('client') }}" required autocomplete="client" autofocus>
                                                
                                                @error('client')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="service">{{ __('Service') }}</label>
                                                <input id="service" type="text" class="form-control @error('service') is-invalid @enderror" name="service" value="{{ old('service') }}" required autocomplete="service" autofocus>
                                                
                                                @error('service')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="keyword">{{ __('Keyword') }}</label>
                                                <input id="keyword" type="text" class="form-control @error('keyword') is-invalid @enderror" name="keyword" value="{{ old('keyword') }}" required autocomplete="keyword" autofocus>
                                                
                                                @error('keyword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="description">{{ __('Description') }}</label>
                                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                                
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="image1">{{ __('Image1') }}</label>
                                                <input id="image1" type="file" class="form-control @error('image1') is-invalid @endError" name="image1" required value="{{ old('image1') }}" onchange="previewImage(this)">                                                
                                                <img id="preview" src="" alt="Preview" style="max-width: 150px; margin-top: 10px; display: none;">
                                                @error('Image1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="image2">{{ __('Image2') }}</label>
                                                <input id="image2" type="file" class="form-control @error('image2') is-invalid @endError" name="image2" required value="{{ old('image2') }}" onchange="previewImage(this)">                                                
                                                <img id="preview" src="" alt="Preview" style="max-width: 150px; margin-top: 10px; display: none;">
                                                @error('Image2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="date">{{ __('Delivery Date') }}</label>
                                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                                                
                                                @error('date')
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