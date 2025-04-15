@extends('backend.layouts.app')

@section('title', 'Thêm sản phẩm')

@extends('backend.components.header')

@extends('backend.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Thêm sản phẩm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
{{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm sản phẩm</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('products.store')}}" class="row g-3" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="status" class="form-label">Trạng thái</label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option value="1" selected>Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Giá</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>
                                <div class="col-md-6">
                                    <label for="category_id" class="form-label">Loại sản phẩm</label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="category_id">
                                            @foreach($productCategories as $key => $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="brand_id" class="form-label">Thương hiệu</label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="brand_id">
                                            @foreach($brands as $key => $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Mô tả sản phẩm</label>
{{--                                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>--}}
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" id="description" name="description">

                                    </textarea><!-- End TinyMCE Editor -->
                                </div>
{{--                                <div class="col-md-6">--}}
{{--                                    <label for="inputCity" class="form-label">Ảnh thumbnail</label>--}}
{{--                                    <input type="text" class="form-control" id="inputCity">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <label for="inputState" class="form-label">State</label>--}}
{{--                                    <select id="inputState" class="form-select">--}}
{{--                                        <option selected>Choose...</option>--}}
{{--                                        <option>...</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <label for="inputZip" class="form-label">Zip</label>--}}
{{--                                    <input type="text" class="form-control" id="inputZip">--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" id="gridCheck">--}}
{{--                                        <label class="form-check-label" for="gridCheck">--}}
{{--                                            Check me out--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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
