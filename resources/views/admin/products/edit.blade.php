@extends('admin.layouts.app')

@section('title', 'Cập nhật sản phẩm'. ': '. $editProduct->name)

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cập nhật sản phẩm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Danh sách sản phẩm</a></li>
                    <li class="breadcrumb-item active">Cập nhật sản phẩm</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <form action="{{route('products.update', ['product'=>$editProduct->id])}}" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')

                <input type="hidden" name="delete_old_thumbnail" id="delete_old_thumbnail" value="0">

                <div class="row">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tổng quan</h5>

                                <div class="col-md">
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" value="{{$editProduct->name}}" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="status" class="col-form-label col-sm-2">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="status">
                                                <option value="1" {{($editProduct->status == 1) ? "selected" : ""}}>Còn hàng</option>
                                                <option value="0" {{($editProduct->status == 0) ? "selected" : ""}}>Hết hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="price" class="col-sm-2 col-form-label">Giá <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="number" step="1000" min="0" class="form-control" id="price" name="price" value="{{$editProduct->price}}" required>
                                        </div>
                                        <label for="discount" class="col-sm-2 col-form-label">Chiết khấu</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="discount" name="discount" value="{{$editProduct->discount}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="category_id" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="category_id">
                                                @foreach($productCategories as $key=>$productCategory)
                                                    <option value="{{$productCategory->id}}" {{($editProduct->category_id) == $productCategory->id ? "selected" : ""}}>{{$productCategory->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="brand_id" class="col-sm-2 col-form-label">Thương hiệu</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="brand_id">
                                                @foreach($brands as $key=>$brand)
                                                    <option value="{{$brand->id}}" {{($editProduct->brand_id) == $brand->id ? "selected" : ""}}>{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md mb-3">
                                        <label for="description" class="form-label">Mô tả sản phẩm</label>
                                        <!-- TinyMCE Editor -->
                                        <textarea class="tinymce-editor" id="description" name="description" rows="3">
                                            {{$editProduct->description}}
                                        </textarea><!-- End TinyMCE Editor -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Ảnh sản phẩm</h5>

                                <div class="col-md mb-3">
                                    <label for="thumbnail" class="form-label">Ảnh thumbnail</label>
                                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/*">
                                    @error('thumbnail')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <!-- Ảnh preview -->
                                    <div id="image_preview_wrapper" class="position-relative mt-3 mb-3 img-thumbnail" style="max-width: 200px; height: 200px">
                                        @if ($editProduct->thumbnail)
                                            <img id="image_preview" src="{{ asset('storage/' . $editProduct->thumbnail) }}" class="img-thumbnail" style="width: 100%; height: auto;" alt="">
                                            <button type="button" id="remove_image_btn" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" title="Xóa ảnh">&times;</button>
                                        @else
                                            <img id="image_preview" src="#" class="img-thumbnail d-none" style="width: 100%; height: auto;" alt="">
                                            <button type="button" id="remove_image_btn" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 d-none" title="Xóa ảnh">&times;</button>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md mb-3">
                                    <label for="gallery" class="form-label">Thư viện ảnh</label>
                                    <input type="file" class="form-control" id="gallery" name="gallery" accept="image/*" multiple>
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
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    <button type="reset" class="btn btn-secondary">Đặt lại</button>
                </div>
            </form><!-- End Multi Columns Form -->
        </section>

    </main><!-- End #main -->
    <script>
        const imageInput = document.getElementById('thumbnail');
        const preview = document.getElementById('image_preview');
        const removeBtn = document.getElementById('remove_image_btn');
        const deleteOldInput = document.getElementById('delete_old_thumbnail');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                    removeBtn.classList.remove('d-none');
                    deleteOldInput.value = 0; // Có ảnh mới → không xóa ảnh cũ
                }
                reader.readAsDataURL(file);
            }
        });

        removeBtn.addEventListener('click', function () {
            preview.src = '#';
            preview.classList.add('d-none');
            removeBtn.classList.add('d-none');
            imageInput.value = '';
            deleteOldInput.value = 1; // Không có ảnh mới và yêu cầu xóa ảnh cũ
        });
    </script>

@endsection

@extends('admin.components.footer')
