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
                                    <h1 class="login-page__title" style="text-align: center; font-size: 20px;">{{ __('CREATE POST') }}</h1>
                                    <form method="POST" action="{{ route('store_posts') }}" enctype="multipart/form-data">
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
                                                <label for="title">{{ __('title') }}</label>
                                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                                
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="keywords">{{ __('Keywords') }}</label>
                                                <input id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" value="{{ old('keywords') }}" required autocomplete="keywords" autofocus>
                                                
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="meta_desc">{{ __('Meta Description') }}</label>
                                                <input id="meta_desc" type="text" class="form-control @error('meta_desc') is-invalid @enderror" name="meta_desc" value="{{ old('meta_desc') }}" required autocomplete="meta_desc" autofocus>
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="image">{{ __('Image') }}</label>
                                                <input id="image" type="file" class="form-control @error('image') is-invalid @endError" name="image" required autocomplete="image" onchange="previewImage(this)">                                                
                                                <img id="preview" src="" alt="Preview" style="max-width: 150px; margin-top: 10px; display: none;">
                                                @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login-page__input-box">
                                                <label for="description">{{ __('Description') }}</label>
                                                <textarea col='30' rows="10" id="description"  class="form-control" name="description" required autocomplete="description">{{old('description')}}</textarea>
                                                
                                                @error('Name')
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