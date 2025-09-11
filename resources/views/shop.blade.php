@extends('layouts.header')
@section('content')

 <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Shop</h2>
                <div class="wallox-breadcrumb">
                    <ul class="wallox-breadcrumb__list list-unstyled">
                        <li><a href="index.html"><i class="icon-home"></i> Home</a></li>
                        <li><span>our Shop</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="product-one product-one--page">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3">
                        <div class="product__sidebar product__sidebar-right">

                            <div class="product__search-box product__sidebar__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <form action="#" class="product__search">
                                    <input type="text" placeholder="search items">
                                    <button type="submit" aria-label="search submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </form>
                            </div>

                            <div class="product__price-ranger wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <h3 class="product__sidebar--title">Filter by price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                    </div>
                                </div>
                            </div>

                            <div class="product__categories wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <h3 class="product__sidebar--title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="products.html"><i class="icon-right-arrow"></i>Kitchen Faucet</a></li>
                                    <li><a href="products.html"><i class="icon-right-arrow"></i>Toilet Bowl</a></li>
                                    <li><a href="products.html"><i class="icon-right-arrow"></i>Pipe Elbows</a></li>
                                    <li><a href="products.html"><i class="icon-right-arrow"></i>Pressure Reducing</a></li>
                                    <li><a href="products.html"><i class="icon-right-arrow"></i>Water Softeners</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-9">
                        <div class="product__info-top">
                            <div class="product__showing-text-box">
                                <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                            </div>
                            <div class="product__showing-sort">
                                <select class="selectpicker" aria-label="Sort by popular">
                                    <option selected>Sort by popular</option>
                                    <option value="1">Sort by view</option>
                                    <option value="2">Sort by price</option>
                                    <option value="3">Sort by ratings</option>
                                </select>
                            </div>
                        </div>

                        <div class="row gutter-y-30">
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                    <div class="product__item__img">
                                        <div class="product__item__img__item">
                                            <img src="assets/images/products/product-1-1.jpg" alt="product image">
                                        </div>
                                        <div class="product__item__btn">
                                            <a href="cart.html"><i class="far fa-heart"></i></a>
                                            <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.html">digital stickers</a></h4>
                                        <div class="product__item__price">$20.00</div>

                                        <a href="cart.html" class=" wallox-btn  wallox-btn--base product__item__link">Add to Cart
                                            <span class="product__item__link__icon">
                                                <i class="icon-cart"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                    <div class="product__item__img">
                                        <div class="product__item__img__item">
                                            <img src="assets/images/products/product-1-2.jpg" alt="product image">
                                        </div>
                                        <div class="product__item__btn">
                                            <a href="cart.html"><i class="far fa-heart"></i></a>
                                            <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.html">room wallpaper</a></h4>
                                        <div class="product__item__price">$20.00</div>

                                        <a href="cart.html" class=" wallox-btn  wallox-btn--base product__item__link">Add to Cart
                                            <span class="product__item__link__icon">
                                                <i class="icon-cart"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                    <div class="product__item__img">
                                        <div class="product__item__img__item">
                                            <img src="assets/images/products/product-1-3.jpg" alt="product image">
                                        </div>
                                        <div class="product__item__btn">
                                            <a href="cart.html"><i class="far fa-heart"></i></a>
                                            <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.html">digital stickers</a></h4>
                                        <div class="product__item__price">$20.00</div>

                                        <a href="cart.html" class=" wallox-btn  wallox-btn--base product__item__link">Add to Cart
                                            <span class="product__item__link__icon">
                                                <i class="icon-cart"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <div class="product__item__img">
                                        <div class="product__item__img__item">
                                            <img src="assets/images/products/product-1-4.jpg" alt="product image">
                                        </div>
                                        <div class="product__item__btn">
                                            <a href="cart.html"><i class="far fa-heart"></i></a>
                                            <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.html">wall stickers</a></h4>
                                        <div class="product__item__price">$20.00</div>

                                        <a href="cart.html" class=" wallox-btn  wallox-btn--base product__item__link">Add to Cart
                                            <span class="product__item__link__icon">
                                                <i class="icon-cart"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                    <div class="product__item__img">
                                        <div class="product__item__img__item">
                                            <img src="assets/images/products/product-1-5.jpg" alt="product image">
                                        </div>
                                        <div class="product__item__btn">
                                            <a href="cart.html"><i class="far fa-heart"></i></a>
                                            <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.html">digital stickers</a></h4>
                                        <div class="product__item__price">$20.00</div>

                                        <a href="cart.html" class=" wallox-btn  wallox-btn--base product__item__link">Add to Cart
                                            <span class="product__item__link__icon">
                                                <i class="icon-cart"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                    <div class="product__item__img">
                                        <div class="product__item__img__item">
                                            <img src="assets/images/products/product-1-6.jpg" alt="product image">
                                        </div>
                                        <div class="product__item__btn">
                                            <a href="cart.html"><i class="far fa-heart"></i></a>
                                            <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.html">pvc stickers</a></h4>
                                        <div class="product__item__price">$20.00</div>

                                        <a href="cart.html" class=" wallox-btn  wallox-btn--base product__item__link">Add to Cart
                                            <span class="product__item__link__icon">
                                                <i class="icon-cart"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- /.product-one product-one--page -->

@endsection