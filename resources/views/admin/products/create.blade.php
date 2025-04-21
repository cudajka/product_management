@extends('admin.layouts.app')

@section('title', 'Thêm sản phẩm')

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Thêm sản phẩm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Danh sách sản phẩm</a></li>
                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tổng quan</h5>

                                <div class="col">
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="status" class="col-form-label col-sm-2">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="status">
                                                <option value="1" selected>Còn hàng</option>
                                                <option value="0">Hết hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="price" class="col-sm-2 col-form-label">Giá <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="price" name="price" required>
                                        </div>
                                        <label for="discount" class="col-sm-2 col-form-label">Chiết khấu</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="discount" name="discount">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="category_id" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="category_id">
                                                @foreach($productCategories as $key => $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="brand_id" class="col-sm-2 col-form-label">Thương hiệu</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="brand_id">
                                                @foreach($brands as $key => $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="description" class="form-label">Mô tả sản phẩm</label>
                                        {{--                                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>--}}
                                        <!-- TinyMCE Editor -->
                                        <textarea class="tinymce-editor" id="description" name="description" rows="3">

                                </textarea><!-- End TinyMCE Editor -->
                                    </div>
                                </div>

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
                            </div>
                        </div>

                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Ảnh sản phẩm</h5>

                                <div class="col-md mb-3">
                                    <label for="thumbnail" class="form-label">Ảnh thumbnail</label>
                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                                </div>

                                <div class="col-md mb-3">
                                    <label for="thumbnail" class="form-label">Thư viện ảnh</label>
                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" multiple>
                                </div>
                            </div>
                        </div> <!-- End Add product images -->

                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">SEO</h5>

                                <div class="col-md mb-3">
                                    <label for="meta_title" class="form-label">Tiêu đề meta</label>
                                    <textarea id="meta_title" class="form-control" name="meta_title"></textarea>
                                </div>
                                <div class="col-md mb-3">
                                    <label for="meta_keywords" class="form-label">Từ khóa meta</label>
                                    <textarea id="meta_keywords" class="form-control" name="meta_keywords"></textarea>
                                </div>
                                <div class="col-md mb-3">
                                    <label for="meta_description" class="form-label">Mô tả meta</label>
                                    <textarea id="meta_description" class="form-control" name="meta_description"></textarea>
                                </div>
                            </div>
                        </div> <!-- End SEO -->
                    </div>
                </div>
            </form><!-- End Multi Columns Form -->
        </section>

    </main><!-- End #main -->
@endsection

@extends('admin.components.footer')
