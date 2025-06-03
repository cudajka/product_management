@extends('landing_page.layouts.app')

@section('title', 'Sản phẩm || Juta - Ecommerce Bootstrap 5 Template')

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
    <div class="content-wraper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--sidebar-categores-box start  -->
                    <div class="sidebar-categores-box mt-95">
                        <div class="sidebar-title">
                            <h2>For men</h2>
                        </div>
                        <!-- category-sub-menu start -->
                        <div class="category-sub-menu">
                            <ul>
                                <li class="has-sub"><a href="# ">Jackets</a>
                                    <ul>
                                        <li><a href="#">Florals</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shorts</a></li>
                                        <li><a href="#">Stripes</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Jeans</a>
                                    <ul>
                                        <li><a href="#">Hoodies</a></li>
                                        <li><a href="#">Sweaters</a></li>
                                        <li><a href="#">Vests</a></li>
                                        <li><a href="#">Wedges</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Men</a>
                                    <ul>
                                        <li><a href="#">Crochet</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#"> Jeans</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Women</a>
                                    <ul>
                                        <li><a href="#">Casual</a></li>
                                        <li><a href="#">Chinos</a></li>
                                        <li><a href="#">Joggers</a></li>
                                        <li><a href="#">Tailored</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- category-sub-menu end -->
                    </div>
                    <!--sidebar-categores-box end  -->
                    <!--sidebar-categores-box start  -->
                    <div class="sidebar-categores-box">
                        <div class="sidebar-title">
                            <h2>Filter By</h2>
                        </div>
                        <!-- btn-clear-all start -->
                        <button class="btn-clear-all">Clear all</button>
                        <!-- btn-clear-all end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Price</h5>
                            <div class="price-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="radio" name="price-filter" checked=""><a href="#">$10.00 - $11.00 (1)</a></li>
                                        <li><input type="radio" name="price-filter"><a href="#">$14.00 - $15.00 (2)</a></li>
                                        <li><input type="radio" name="price-filter"><a href="#">$16.00 - $17.00 (2)</a></li>
                                        <li><input type="radio" name="price-filter"><a href="#">$18.00 - $19.00 (1)</a></li>
                                        <li><input type="radio" name="price-filter"><a href="#"> $24.00 - $28.00 (5)</a></li>
                                        <li><input type="radio" name="price-filter"><a href="#"> $30.00 - $32.00 (1)</a></li>
                                        <li><input type="radio" name="price-filter"><a href="#"> $50.00 - $53.00 (2) </a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Size</h5>
                            <div class="size-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="checkbox" name="product-size"><a href="#">S (1)</a></li>
                                        <li><input type="checkbox" name="product-size"><a href="#">M (4)</a></li>
                                        <li><input type="checkbox" name="product-size"><a href="#">L (2)</a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Color</h5>
                            <div class="color-categoriy">
                                <form action="#">
                                    <ul>
                                        <li><span class="white"></span><a href="#">White (1)</a></li>
                                        <li><span class="black"></span><a href="#">Black (1)</a></li>
                                        <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                        <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Compositions</h5>
                            <div class="categori-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="checkbox" name="product-categori"><a href="#">Cotton (5)</a></li>
                                        <li><input type="checkbox" name="product-categori"><a href="#">Polyester (4)</a></li>
                                        <li><input type="checkbox" name="product-categori"><a href="#">Viscose (4)</a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                    </div>
                    <!--sidebar-categores-box end  -->

                    <!-- shop-banner start -->
                    <div class="shop-banner">
                        <div class="single-banner">
                            <a href="#"><img src="img/banner/shop-banner.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- shop-banner end -->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-95">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-bs-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                                <span>Showing 1 to 9 of 15</span>
                            </div>
                        </div>
                        <!-- product-select-box start -->
                        <div class="product-select-box">
                            <div class="product-short">
                                <p>Sort By:</p>
                                <select class="nice-select">
                                    <option value="trending">Relevance</option>
                                    <option value="sales">Name (A - Z)</option>
                                    <option value="sales">Name (Z - A)</option>
                                    <option value="rating">Price (Low &gt; High)</option>
                                    <option value="date">Rating (Lowest)</option>
                                    <option value="price-asc">Model (A - Z)</option>
                                    <option value="price-asc">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="shop-product-area">
                                    <div class="row">
                                        @foreach($products as $product)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-40">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="{{route('landing_page.products.show', ['id' => $product->id])}}">
                                                            <img class="primary-image" src="{{asset('storage/'.$product->thumbnail)}}" alt="">
                                                            <img class="secondary-image" src="{{asset('storage/'.$product->thumbnail)}}" alt="">
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
                                                            <h4><a class="product_name" href="{{route('landing_page.products.show', ['id' => $product->id])}}">{{$product->name}}</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">{{$product->brand->name}}</a></div>
                                                            <div class="price-box">
                                                                @if($product->discount != '')
                                                                    <span class="new-price">{{ number_format($product->discount) }}₫</span>
                                                                    <span class="old-price">{{ number_format($product->price) }}₫</span>
                                                                @else
                                                                    <span class="new-price">{{ number_format($product->price) }}₫</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="#"><i class="ion-android-cart"></i> Thêm vào giỏ hàng</a></li>
                                                                <li><a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="list-view" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        @foreach($products as $product)
                                            <div class="row product-layout-list">
                                                <div class="col-lg-4 col-md-5 ">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img alt="" src="{{asset('storage/'.$product->thumbnail)}}" class="primary-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-7">
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
                                                            <h4><a href="single-product.html" class="product_name">{{$product->name}}</a></h4>
                                                            <div class="manufacturer"><a href="single-product.html">{{$product->brand->name}}</a></div>
                                                            <div class="price-box">
                                                                @if($product->discount != '')
                                                                    <span class="new-price">{{ number_format($product->discount) }}₫</span>
                                                                    <span class="old-price">{{ number_format($product->price) }}₫</span>
                                                                @else
                                                                    <span class="new-price">{{ number_format($product->price) }}₫</span>
                                                                @endif
                                                            </div>
                                                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                                            <div class="list-add-actions">
                                                                <ul>
                                                                    <li class="add-cart"><a href="#">Thêm vào giỏ hàng</a></li>
                                                                    <li><a href="#" data-bs-target="#exampleModalCenter" data-bs-toggle="modal" class="quick-view"><i class="ion-android-open"></i></a></li>
                                                                    <li><a href="single-product.html" class="links-details"><i class="ion-clipboard"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <p>Showing 1-12 of 13 item(s)</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="pagination-box">
                                            <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
@endsection

@extends('landing_page.components.footer')

@extends('landing_page.components.modal')
