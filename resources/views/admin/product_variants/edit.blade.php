@extends('backend.layouts.app')

@section('title', 'Sửa số lượng')

@extends('backend.components.header')

@extends('backend.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>sửa số lượng</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Sửa số lượng</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section d-flex">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sửa số lượng</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('product_variants.update', ['product_variant' => $editProductVariant->id])}}" class="row g-3" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Sản phẩm</label>
                                    <input type="text" class="form-control" id="product_id" name="product_id" value="{{$editProductVariant->productName}}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="size_id" class="form-label">Kích thước</label>
                                    <input type="text" class="form-control" id="size_id" name="size_id" value="{{$editProductVariant->sizeNumber}}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="color_id" class="form-label">Màu sắc</label>
                                    <input type="text" class="form-control" id="color_id" name="color_id" value="{{$editProductVariant->colorName}}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="quantity" class="form-label">Số lượng</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="">
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

@extends('backend.components.footer')
