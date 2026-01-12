@extends('layouts.signup')

@section('content')

<section class="error-404">
    <div class="container">
        <div class="error-404__thumb wow fadeInUp" data-wow-duration="1500ms">
            <div class="error-404__thumb__item">
                <img src="assets/images/shapes/error-1-4.png" alt="error-404__thumb__item">
            </div>
            <div class="error-404__thumb__item__moon">
                <img src="assets/images/shapes/error-1-1.png" alt="error-404__thumb__item__moon">
            </div>
            <div class="error-404__thumb__item__earth">
                <img src="assets/images/shapes/error-1-2.png" alt="error-404__thumb__item__earth">
            </div>
            <div class="error-404__thumb__item__roket">
                <img src="assets/images/shapes/error-1-3.png" alt="error-404__thumb__item__roket">
            </div>
        </div>
        <h3 class="error-404__sub-title  wow fadeInUp" data-wow-duration="1500ms">Oops! Page Not Found</h3>
        {{-- <p class="error-404__text  wow fadeInUp" data-wow-duration="1500ms">Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim</p> --}}

        <div class="error-404__btns">
            <a href="{{ url('/') }}" class="wallox-btn wallox-btn--base">back to home</a>
        </div>
    </div>
</section>

@endsection