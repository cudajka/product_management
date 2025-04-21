@extends('admin.layouts.app')

@section('title', 'Sửa sản phẩm: '.$editProduct->name)

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Sửa sản phẩm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Sửa sản phẩm</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sửa sản phẩm</h5>

                            <!-- Multi Columns Form -->
                            <form method="post" action="{{route('products.update', ['product'=>$editProduct->id])}}"
                                  class="row g-3" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                {{--                                <input type="hidden" name="product_id" value="{{$editProduct->id}}">--}}
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{$editProduct->name}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="status" class="form-label">Trạng thái</label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option value="1" {{($editProduct->status == 1) ? "selected" : ""}}>Còn
                                                hàng
                                            </option>
                                            <option value="0" {{($editProduct->status == 0) ? "selected" : ""}}>Hết
                                                hàng
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Giá</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                           value="{{$editProduct->price}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="category_id" class="form-label">Loại sản phẩm</label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example"
                                                name="category_id">
                                            @foreach($productCategories as $key => $value)
                                                <option
                                                    value="{{$value->id}}" {{($editProduct->category_id) == $value->id ? "selected" : ""}}>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="brand_id" class="form-label">Thương hiệu</label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="brand_id">
                                            @foreach($brands as $key => $value)
                                                <option
                                                    value="{{$value->id}}" {{($editProduct->brand_id) == $value->id ? "selected" : ""}}>{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Mô tả sản phẩm</label>
                                    <!-- TinyMCE Editor -->
                                    <textarea class="tinymce-editor" id="description"
                                              name="description">{{$editProduct->description}}</textarea>
                                    <!-- End TinyMCE Editor -->
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
