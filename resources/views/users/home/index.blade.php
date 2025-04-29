@extends('users.layouts.app')

@section('title', 'Home || Juta - Ecommerce Bootstrap 5 Template')

@extends('users.components.header')

@section('main_content')
    <!-- slider-main-area start -->
    <div class="slider-main-area">
        <div class="slider-active owl-carousel">
            <!-- slider-wrapper start -->
            <div class="slider-wrapper" style="background-image:url({{url('/frontend')}}/img/slider/home-1-01.jpg)">
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-lg-11 col-md-11">
                            <div class="slider-text-info style-1 slider-text-animation">
                                <h4 class="title1">Big sale up to 20% off</h4>
                                <h1 class="title2"><span>nike</span>  Black</h1>
                                <p>History Month Collection 2018</p>
                                <div class="slier-btn-1">
                                    <a title="shop now" href="#" class="shop-btn">Shopping now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-wrapper end -->
            <!-- slider-wrapper start -->
            <div class="slider-wrapper" style="background-image:url({{url('/frontend')}}/img/slider/home-1-02.jpg)">
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-lg-11 col-md-11">
                            <div class="slider-text-info style-1 slider-text-animation">
                                <h4 class="title1">trending products 2018</h4>
                                <h1 class="title2"><span>new</span>  lookbook</h1>
                                <p>Juta Store | Clothing & Sport Equipment</p>
                                <div class="slier-btn-1">
                                    <a title="shop now" href="#" class="shop-btn">Shopping now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-wrapper end -->
            <!-- slider-wrapper start -->
            <div class="slider-wrapper" style="background-image:url({{url('/frontend')}}/img/slider/home-1-03.jpg)">
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-lg-11 col-md-11">
                            <div class="slider-text-info style-1 slider-text-animation">
                                <h4 class="title1">top jacket of Juta</h4>
                                <h1 class="title2"><span>new </span>  jackets</h1>
                                <p>Aurora Shell Jacket Is Ready For Any Adventure.</p>
                                <div class="slier-btn-1">
                                    <a title="shop now" href="#" class="shop-btn">Shopping now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-wrapper end -->
        </div>
    </div>
    <!-- slider-main-area end -->

    <!-- our-service-area  start -->
    <div class="our-service-area mtb-40">
        <div class="container-fluid">
            <div class="our-service-inner">
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('/frontend')}}/img/icon/1.png" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Free delivery</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('/frontend')}}/img/icon/2.png" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Online Support 24/7</h3>
                            <p>Support online 24 hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('/frontend')}}/img/icon/3.png" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Money Return</h3>
                            <p>Back guarantee 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('/frontend')}}/img/icon/4.png" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Member Discount</h3>
                            <p>Onevery order over $130</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('/frontend')}}/img/icon/5.png" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>SECURE PAYMENT</h3>
                            <p>All cards accepted</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-service-area  end -->

    <!-- banner-area start -->
    <div class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-custom-4 col">
                    <!--single-banner-box start -->
                    <div class="single-banner-box mb-20">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/1.jpg" alt=""></a>
                    </div>
                    <!--single-banner-box end -->
                    <!--single-banner-box start -->
                    <div class="single-banner-box">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/2.jpg" alt=""></a>
                    </div>
                    <!--single-banner-box end -->
                </div>
                <div class="col-lg-4 centeritem col">
                    <!--single-banner-box start -->
                    <div class="single-banner-box">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/3.jpg" alt=""></a>
                    </div>
                    <!--single-banner-box end -->
                </div>
                <div class="col-lg-4 col-custom-4 col">
                    <!--single-banner-box start -->
                    <div class="single-banner-box mb-20">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/4.jpg" alt=""></a>
                    </div>
                    <!--single-banner-box end -->
                    <!--single-banner-box start -->
                    <div class="single-banner-box">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/5.jpg" alt=""></a>
                    </div>
                    <!--single-banner-box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area end -->

    <!-- daly-offer start -->
    <div class="daly-offer">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="dalyoffer-inner">
                        <p>Today Offer: $20 OFF orders $300 or more with code <span class="text1">“Juta-002"</span>+ Free shipping on orders over $60! <span class="text2">Offer Details</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- daly-offer end -->

    <!-- product-area start -->
    <div class="product-area pt-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <!-- product-tabs-list start -->
                        <div class="product-tabs-list">
                            <ul role="tablist" class="nav">
                                <li class="active" role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="new-arrivals" href="#new-arrivals" class="active show" aria-selected="true">New Arrival</a></li>
                                <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="best-sellers" href="#best-sellers">Bestseller</a></li>
                                <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="on-sellers" href="#on-sellers"> Featured Products</a></li>
                            </ul>
                        </div>
                        <!-- product-tabs-list end -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-title-dic">
                        <p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="new-arrivals" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/2.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$225.00</span>
                                                <span class="old-price">$250.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$270.00</span>
                                                <span class="old-price">$300.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/5.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$225.00</span>
                                                <span class="old-price">$250.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$150.00</span>
                                                <span class="old-price">$180.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$220.00</span>
                                                <span class="old-price">$240.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$220.00</span>
                                                <span class="old-price">$240.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="best-sellers" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/15.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/16.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$225.00</span>
                                                <span class="old-price">$250.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/17.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/18.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$270.00</span>
                                                <span class="old-price">$300.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$225.00</span>
                                                <span class="old-price">$250.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$150.00</span>
                                                <span class="old-price">$180.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$220.00</span>
                                                <span class="old-price">$240.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$220.00</span>
                                                <span class="old-price">$240.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="on-sellers" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/2.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$225.00</span>
                                                <span class="old-price">$250.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$270.00</span>
                                                <span class="old-price">$300.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/5.jpg" alt="">
                                        </a>
                                        <div class="label-product">-10% off</div>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$225.00</span>
                                                <span class="old-price">$250.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$150.00</span>
                                                <span class="old-price">$180.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$220.00</span>
                                                <span class="old-price">$240.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="single-product.html">
                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/12.jpg" alt="">
                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                            <div class="price-box">
                                                <span class="new-price">$220.00</span>
                                                <span class="old-price">$240.00</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area end -->

    <!-- banner-area start -->
    <div class="banner-area ptb-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-banner-box-2">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area end -->

    <!-- product-area start -->
    <div class="product-area pb-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" section-title-2">
                        <h2>Week Special Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-active-2 owl-carousel">
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/2.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$225.00</span>
                                        <span class="old-price">$250.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/5.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$200.00</span>
                                        <span class="old-price">$210.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/9.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html"> Jordan Brand Retro</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$340.00</span>
                                        <span class="old-price">$350.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Brand Max Thea</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$105.00</span>
                                        <span class="old-price">$150.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/13.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/14.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Brand Max Thea</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$105.00</span>
                                        <span class="old-price">$150.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/15.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/16.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Brand Air Max Thea</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$105.00</span>
                                        <span class="old-price">$150.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Brand ari Thea</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$205.00</span>
                                        <span class="old-price">$250.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                    <img class="secondary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                </a>
                                <div class="label-product">-10% off</div>
                                <!-- countdown start -->
                                <div class="countdown-deals" data-countdown="2023/03/01"></div>
                                <!-- countdown end -->
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <h4><a class="product_name" href="single-product.html">Brand Air Max Thea</a></h4>
                                    <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                    <div class="price-box">
                                        <span class="new-price">$105.00</span>
                                        <span class="old-price">$150.00</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                        <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                        <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area end -->

    <!-- product-area start -->
    <div class="product-area pb-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col">
                            <div class="section-title-3">
                                <h2>For men</h2>
                                <div class="product-tabs-list-2">
                                    <ul class="nav" role="tablist">
                                        <li role="presentation" class="active"><a aria-selected="true" class="active show" href="#for-men" aria-controls="for-men" role="tab" data-bs-toggle="tab">For men</a></li>
                                        <li role="presentation"><a href="#for-women" aria-controls="for-women" role="tab" data-bs-toggle="tab">For women</a></li>
                                        <li role="presentation"><a href="#for-kids" aria-controls="for-kids" role="tab" data-bs-toggle="tab">For kids </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div id="for-men" class="tab-pane active show" role="tabpanel">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel">
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/15.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/16.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/13.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/14.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/17.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/18.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$270.00</span>
                                                                <span class="old-price">$300.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="for-women" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel">
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/2.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$270.00</span>
                                                                <span class="old-price">$300.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/5.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/12.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="for-kids" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel">
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/15.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/16.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/17.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/18.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$270.00</span>
                                                                <span class="old-price">$300.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!--single-banner-box start -->
                    <div class="single-banner-box">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/8.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area end -->

    <!-- product-area start -->
    <div class="product-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col">
                            <div class="section-title-3">
                                <h2>For women</h2>
                                <div class="product-tabs-list-2">
                                    <ul class="nav" role="tablist">
                                        <li role="presentation" class="active"><a aria-selected="true" class="active show" href="#cat-tb-1" aria-controls="cat-tb-1" role="tab" data-bs-toggle="tab">Categories</a></li>
                                        <li role="presentation"><a href="#cat-tb-2" aria-controls="cat-tb-2" role="tab" data-bs-toggle="tab">New arrivals</a></li>
                                        <li role="presentation"><a href="#cat-tb-3" aria-controls="cat-tb-3" role="tab" data-bs-toggle="tab">Lookbook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div id="cat-tb-1" class="tab-pane active show" role="tabpanel">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel">
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/9.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$270.00</span>
                                                                <span class="old-price">$300.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/12.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="cat-tb-2" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel">
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/9.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/14.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/13.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/4.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$270.00</span>
                                                                <span class="old-price">$300.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/5.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/12.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="cat-tb-3" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="product-active-3 owl-carousel">
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/15.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/16.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/13.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/14.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Air Jordan XI Retro</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/17.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/18.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand Zoom KDX EP</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$270.00</span>
                                                                <span class="old-price">$300.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/19.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/20.jpg" alt="">
                                                        </a>
                                                        <div class="label-product">-10% off</div>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN 2018</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$225.00</span>
                                                                <span class="old-price">$250.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand FREE RN FLYKNIT</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$150.00</span>
                                                                <span class="old-price">$180.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img class="primary-image" src="{{url('/frontend')}}/img/product/10.jpg" alt="">
                                                            <img class="secondary-image" src="{{url('/frontend')}}/img/product/11.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Brand REACT HYPERDUNK</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div>
                                                            <div class="price-box">
                                                                <span class="new-price">$220.00</span>
                                                                <span class="old-price">$240.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!--single-banner-box start -->
                    <div class="single-banner-box">
                        <a href="#"><img src="{{url('/frontend')}}/img/banner/7.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area end -->

    <!-- newsletter-area start -->
    <div class="newsletter-area ptb-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-inner text-center newsletter-bg">
                        <h4 class="text">Join our</h4>
                        <h2>Newsletters now!</h2>
                        <p class="desc">Subscribe to the Juta mailing list to receive updates on new arrivals, offers and other discount information.</p>
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newletter-input popup-subscribe-form validate" target="_blank" novalidate>
                            <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address">
                            <button id="mc-submit" type="submit" class="btn btn-primary"><span>Subscribe !</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter-area end -->
@endsection

@extends('users.components.footer')

@extends('users.components.modal')
