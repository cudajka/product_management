@extends('admin.layouts.app')

@section('title', 'Thêm số lượng')

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Thêm số lượng</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Thêm số lượng</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section d-flex">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm số lượng</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('product_variants.store')}}" class="row g-3" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="product_id" class="form-label">Sản phẩm</label>
                                    <div class="col">
                                        <select class="form-select" id="product_id" aria-label="Default select example"
                                                name="product_id">
                                            @foreach($products as $key => $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="size_id" class="form-label">Kích thước</label>
                                    <div class="col">
                                        <select class="form-select" id="size_id" aria-label="Default select example"
                                                name="size_id">
                                            @foreach($sizes as $key => $size)
                                                <option value="{{$size->id}}">{{$size->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="color_id" class="form-label">Màu sắc</label>
                                    <div class="col">
                                        <select class="form-select" id="color_id" aria-label="Default select example"
                                                name="color_id">
                                            @foreach($colors as $key => $color)
                                                <option value="{{$color->id}}">{{$color->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="quantity" class="form-label">Số lượng</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                                    <button type="reset" class="btn btn-secondary">Đặt lại</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@extends('admin.components.footer')
