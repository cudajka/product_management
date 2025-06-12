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
                    <!--sidebar-categories-box start  -->
                    <div class="sidebar-categories-box mt-95">
                        <div class="sidebar-title">
                            <h2>For men</h2>
                        </div>
                        <!-- category-sub-menu start -->
                        <div class="category-sub-menu">
                            <ul>
                                <li class="has-sub"><a href="#">Jackets</a>
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
                    <!--sidebar-categories-box end  -->
                    <!--sidebar-categories-box start  -->
                    <div class="sidebar-categories-box">
                        <div class="sidebar-title">
                            <h2>Filter By</h2>
                        </div>
                        <form>
                            @php
                                $requestPrice = request()->input('price', old('price'));
                                $requestSize = request()->input('sizes', old('sizes'));
                                $requestColor = request()->input('colors', old('colors'));
                                $requestBrand = request()->input('brands', old('brands'));
                            @endphp
                            <!-- btn-clear-all start -->
                            <button class="btn-clear-all">
                                <a href="{{route('landing_page.products.index')}}">Xóa tất cả</a>
                            </button>
                            <!-- btn-submit start -->
                            <button type="submit" class="btn-filter">Lọc</button>
                            <!-- btn-submit end -->
                            <!-- btn-clear-all end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-title">Giá</h5>
                                <div class="price-checkbox">
                                    <ul>
                                        @foreach($priceRanges as $range => $label)
                                            <li>
                                                <input type="radio" id="{{$range}}" name="price"
                                                       value="{{ $range }}"
                                                        {{ (!$requestPrice && $range === 'all') || $requestPrice === $range ? 'checked' : ''}}>
                                                <label class="ms-2" for="{{$range}}">{{ $label }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-title">Kích thước</h5>
                                <div class="size-checkbox">
                                    <ul>
                                        @foreach($sizes as $size)
                                            <li>
                                                <input
                                                    type="checkbox"
                                                    id="{{$size->number}}"
                                                    name="sizes[]"
                                                    value="{{$size->number}}"
                                                    {{ $requestSize && in_array($size->number, $requestSize) ? 'checked' : ''}}
                                                >
                                                <label class="ms-2" for="{{$size->number}}">{{ $size->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-title">Màu sắc</h5>
                                <div class="color-category">
                                    <ul>
                                        @foreach($colors as $color)
                                            <li>
                                                <input
                                                    id="{{$color->name}}"
                                                    type="checkbox"
                                                    name="colors[]"
                                                    value="{{$color->code}}"
                                                    {{ $requestColor && in_array($color->code, $requestColor) ? 'checked' : ''}}
                                                >
                                                <label class="ms-2" for="{{$color->name}}">{{ $color->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-title">Thương hiệu</h5>
                                <div class="color-category">
                                    <ul>
                                        @foreach($brands as $brand)
                                            <li>
                                                <input
                                                    id="{{$brand->name}}"
                                                    type="checkbox"
                                                    name="brands[]"
                                                    value="{{$brand->id}}"
                                                    {{ $requestBrand && in_array($brand->id, $requestBrand) ? 'checked' : ''}}
                                                >
                                                <label class="ms-2" for="{{$brand->name}}">{{ $brand->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
{{--                            <!-- filter-sub-area start -->--}}
{{--                            <div class="filter-sub-area">--}}
{{--                                <h5 class="filter-sub-titel">Compositions</h5>--}}
{{--                                <div class="categori-checkbox">--}}
{{--                                    <ul>--}}
{{--                                        <li><input type="checkbox" name="product-category"><a href="#">Cotton--}}
{{--                                                (5)</a></li>--}}
{{--                                        <li><input type="checkbox" name="product-category"><a href="#">Polyester--}}
{{--                                                (4)</a></li>--}}
{{--                                        <li><input type="checkbox" name="product-category"><a href="#">Viscose--}}
{{--                                                (4)</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- filter-sub-area end -->--}}
                            <!-- btn-submit start -->
                            <button type="submit" class="btn-filter">Lọc</button>
                            <!-- btn-submit end -->
                        </form>
                    </div>
                    <!--sidebar-categories-box end  -->

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
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                                                              data-bs-toggle="tab" role="tab"
                                                                              aria-controls="grid-view"
                                                                              href="#grid-view"><i class="fa fa-th"></i></a>
                                    </li>
                                    <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="list-view"
                                                               href="#list-view"><i class="fa fa-th-list"></i></a></li>
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
                                <form id="sort-form" method="GET">
                                    @foreach(request()->except('sort') as $key => $value)
                                        @if(is_array($value))
                                            @foreach($value as $v)
                                                <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                                            @endforeach
                                        @else
                                            <input type="hidden" name="{{ $key }}" value="{{$value}}">
                                        @endif
                                    @endforeach
                                    <select class="nice-select" name="sort" onchange="this.form.submit()">
                                        <option value="">Mặc định</option>
                                        <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Tên (A - Z)</option>
                                        <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Tên (Z - A)</option>
                                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Giá (thấp - cao)</option>
                                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Giá (cao - thấp)</option>
                                    </select>
                                </form>
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
                                                            <img class="primary-image"
                                                                 src="{{asset('storage/'.$product->thumbnail)}}" alt="">
                                                            <img class="secondary-image"
                                                                 src="{{asset('storage/'.$product->thumbnail)}}" alt="">
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
                                                            <h4><a class="product_name"
                                                                   href="{{route('landing_page.products.show', ['id' => $product->id])}}">{{$product->name}}</a>
                                                            </h4>
                                                            <div class="manufacturer"><a
                                                                    href="single-product.html">{{$product->brand->name}}</a>
                                                            </div>
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
                                                                <li class="add-cart">
                                                                    <a href="#" ><i class="ion-android-cart"></i> Thêm vào giỏ hàng</a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a class="links-details" href="single-product.html"><i class="ion-clipboard"></i></a>
                                                                </li>
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
                                                            <img alt="" src="{{asset('storage/'.$product->thumbnail)}}"
                                                                 class="primary-image">
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
                                                            <h4><a href="single-product.html"
                                                                   class="product_name">{{$product->name}}</a></h4>
                                                            <div class="manufacturer"><a
                                                                    href="single-product.html">{{$product->brand->name}}</a>
                                                            </div>
                                                            <div class="price-box">
                                                                @if($product->discount != '')
                                                                    <span class="new-price">{{ number_format($product->discount) }}₫</span>
                                                                    <span class="old-price">{{ number_format($product->price) }}₫</span>
                                                                @else
                                                                    <span class="new-price">{{ number_format($product->price) }}₫</span>
                                                                @endif
                                                            </div>
                                                            <p>Long printed dress with thin adjustable straps.
                                                                V-neckline and wiring under the bust with ruffles at the
                                                                bottom of the dress.</p>
                                                            <div class="list-add-actions">
                                                                <ul>
                                                                    <li class="add-cart"><a href="#">Thêm vào giỏ
                                                                            hàng</a></li>
                                                                    <li><a href="#" data-bs-target="#exampleModalCenter"
                                                                           data-bs-toggle="modal" class="quick-view"><i
                                                                                class="ion-android-open"></i></a></li>
                                                                    <li><a href="single-product.html"
                                                                           class="links-details"><i
                                                                                class="ion-clipboard"></i></a></li>
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
