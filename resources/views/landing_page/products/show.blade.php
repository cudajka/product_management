@extends('landing_page.layouts.app')

@section('title', $product->name.' || Juta - Ecommerce Bootstrap 5 Template')

@extends('landing_page.components.header')

@section('main_content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cửa hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- content-wraper start -->
    <div class="content-wraper mt-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="row single-product-area">
                        <div class="col-xl-4  col-lg-6 offset-xl-1 col-md-5 col-sm-12">
                            <div class="single-product-tab">
                                @php
                                    $firstImage = collect($groupedImages)->first(); // lấy danh sách ảnh của màu đầu tiên
                                @endphp
                                <div class="zoomWrapper">
                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                            <img id="zoom1" src="{{ $firstImage ? asset('storage/' . optional($firstImage)->image_path) : '' }}" data-zoom-image="{{ $firstImage ? asset('storage/' . $firstImage->image_path) : '' }}" alt="big-1">
                                        </a>
                                    </div>
                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                            @foreach($groupedImages as $img)
                                                <li class="">
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('storage/'.$img->image_path) }}" data-zoom-image="{{ asset('storage/'.$img->image_path) }}"><img src="{{ asset('storage/'.$img->image_path) }}" alt="zo-th-1"/></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12">
                            <!-- product-thumbnail-content start -->
                            <div class="quick-view-content">
                                <div class="product-info">
                                    <h2>{{$product->name}}</h2>
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        @if($product->discount != '')
                                            <span class="new-price">{{ number_format($product->discount) }}₫</span>
                                            <span class="old-price">{{ number_format($product->price) }}₫</span>
                                        @else
                                            <span class="new-price">{{ number_format($product->price) }}₫</span>
                                        @endif
                                    </div>
                                    <p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
                                    <div class="modal-size">
                                        <h4>Size</h4>
                                        <select>
                                            @foreach($sizes as $size)
                                                <option title="{{$size->name}}" value="{{$size->id}}">{{$size->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-color">
                                        <h4>Color</h4>
                                        <div class="color-list">
                                            <ul>
                                                @foreach($relatedProducts as $item)
                                                    <li>
                                                        <a href="{{route('landing_page.products.show', ['id' => $item->id])}}" class="active">
                                                            <img src="{{asset('storage/'.$item->thumbnail)}}" alt="">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="quick-add-to-cart">
                                        <form class="modal-cart">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" value="1" min="1">
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="instock">
                                        <p>In stock </p>
                                    </div>
                                    <div class="social-sharing">
                                        <h3>Share</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- product-thumbnail-content end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-review">
                <div class="row">
                    <div class="col">
                        <div class="product-info-detailed">
                            <div class="discription-tab-menu">
                                <ul role="tablist" class="nav">
                                    <li class="active"><a href="#description" data-bs-toggle="tab" class="active show">Description</a></li>
                                    <li><a href="#review" data-bs-toggle="tab">Reviews (1)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="discription-content">
                            <div class="tab-content">
                                <div class="tab-pane fade in active show" id="description">
                                    <div class="description-content">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <div id="review" class="tab-pane fade">
                                    <form class="form-review">
                                        <div class="review">
                                            <table class="table table-striped table-bordered table-responsive">
                                                <tbody>
                                                <tr>
                                                    <td class="table-name"><strong>Palora Themes</strong></td>
                                                    <td class="text-right">08/06/2018</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.</p>
                                                        <ul>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="review-wrap">
                                            <h2>Write a review</h2>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="control-label">Your Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="control-label">Your Review</label>
                                                    <textarea class="form-control"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating">
                                                    &nbsp;Good
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons clearfix">
                                            <div class="pull-right">
                                                <button class="button-review" type="button">Continue</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->

    <!-- product-area start -->
    <div class="product-area ptb-95">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="section-title-3">
                        <h2>Same Category:</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-active-3 owl-carousel">
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="single-product.html">
                                    <img class="primary-image" src="img/product/3.jpg" alt="">
                                    <img class="secondary-image" src="img/product/4.jpg" alt="">
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
                                    <img class="primary-image" src="img/product/9.jpg" alt="">
                                    <img class="secondary-image" src="img/product/10.jpg" alt="">
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
                                    <img class="primary-image" src="img/product/11.jpg" alt="">
                                    <img class="secondary-image" src="img/product/12.jpg" alt="">
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
                                    <img class="primary-image" src="img/product/4.jpg" alt="">
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
                                    <img class="primary-image" src="img/product/6.jpg" alt="">
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
                                    <img class="primary-image" src="img/product/10.jpg" alt="">
                                    <img class="secondary-image" src="img/product/11.jpg" alt="">
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
                                    <img class="primary-image" src="img/product/3.jpg" alt="">
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
    <!-- product-area end -->

@endsection

@extends('landing_page.components.footer')

@extends('landing_page.components.modal')
