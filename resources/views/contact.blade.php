@extends('layouts.header')
@section('content')

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Contact us</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>Contact us</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="container" style="margin-top: 20px; margin-bottom: -40;">
            @include('includes.flash')
        </div>
           
        <section class="contact-one">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-xl-4 col-lg-6">
                        <div class="contact-one__list">
                            <div class="contact-one__item">
                                <div class="contact-one__item__icon">
                                    <i class="icon-maps-and-flags"></i>
                                </div>
                                <div class="contact-one__item__content">
                                    <h5 class="contact-one__item__title">Mailing Address</h5>
                                    <p class="contact-one__item__text">Itaoluwo Ikorodu, Lagos State.</p>
                                    <p class="contact-one__item__text">Felele Lokoja, Kogi State</p>
                                </div>
                            </div>
                            <div class="contact-one__item">
                                <div class="contact-one__item__icon">
                                    <i class="icon-telephone"></i>
                                </div>
                                <div class="contact-one__item__content">
                                    <h5 class="contact-one__item__title">Quick Contact</h5>
                                    <a href="tel:+234-903-696-9352" class="contact-one__item__call">+234 903 696 9352</a>
                                    <a href="tel:+234-701-080-0585" class="contact-one__item__call">+234 701 080 0585</a>
                                </div>
                            </div>
                            <div class="contact-one__item">
                                <div class="contact-one__item__icon">
                                    <i class="icon-message"></i>
                                </div>
                                <div class="contact-one__item__content">
                                    <h5 class="contact-one__item__title">support email</h5>
                                    <a href="#" class="contact-one__item__call">israeljoshua026@gmail.com</a>
                                    <!-- <a href="#" class="contact-one__item__call">info@wallox.com</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-one__inner">
                            <div class="contact-one__bg" style="background-image: url(assets/images/shapes/contact-shape-1-1.png);"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-one__form__thumb real-image">
                                        <img src="assets/images/resources/contact1.png" alt="wallox image">
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    @if($errors->any())
                                        @include('includes.errors')
                                    @endif

                                    <form action="{{ route('contact.store') }}" method="POST" id="contact-form" class="contact_form contact-one__form form-one background-base wow fadeInUp" enctype="multipart/form-data" data-wow-duration="1500ms">
                                        @csrf
                                        <div class="form-one__group">
                                            <div class="form-one__control form-one__control--full">
                                                <input type="text" name="name" placeholder="name" value="{{ old('name') }}" required>
                                            </div>
                                            <div class="form-one__control form-one__control--full">
                                                <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                                            </div>
                                            <div class="form-one__control form-one__control--full">
                                                <input type="text" name="subject" placeholder="select subject" value="{{ old('subject') }}" required>
                                            </div>
                                            <div class="form-one__control form-one__control--full">
                                                <textarea name="message" placeholder="Write  a message" required></textarea>
                                            </div>
                                            <div class="form-one__control form-one__control--full">
                                                <button type="submit" class="wallox-btn wallox-btn--base wallox-btn__submite">get in touch <i class="icon-right-arrow"></i></button>
                                            </div>

                                            <!-- <button class="btn btn-warning">submit</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="contact-map">
            <div class="google-map__contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3952.3299188997953!2d6.7124250750057275!3d7.860499992161357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNTEnMzcuOCJOIDbCsDQyJzU0LjAiRQ!5e0!3m2!1sen!2sng!4v1757111504757!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- /.google-map -->
        </div>
        


@endsection