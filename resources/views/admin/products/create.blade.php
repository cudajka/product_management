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
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row d-flex">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tổng quan</h5>

                                <div class="col-md">
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="status" class="col-form-label col-sm-2">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="status">
                                                <option value="1" selected>Còn hàng</option>
                                                <option value="0">Hết hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="price" class="col-sm-2 col-form-label">Giá <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="number" step="1000" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                                            @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label for="discount" class="col-sm-2 col-form-label">Chiết khấu</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="discount" name="discount">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="category_id" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                                        <div class="col-sm-10">
{{--                                            <select class="form-select" aria-label="Default select example" name="category_id">--}}
{{--                                                @foreach($productCategories as $key => $productCategory)--}}
{{--                                                    <option value="{{$productCategory->id}}">{{$productCategory->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
                                            @php
                                                function showCategories($productCategories, $parent_id = 0, $prefix = '') {
                                                    foreach ($productCategories as $productCategory) {
                                                        if ($productCategory->parent_id == $parent_id) {
                                                            echo '<option value="'.$productCategory->id.'">'.$prefix.$productCategory->name.'</option>';
                                                            showCategories($productCategories, $productCategory->id, $prefix.'---- ');
                                                        }
                                                    }
                                                }
                                            @endphp

                                            <select name="category_id" class="form-select">
                                                <option value="" disabled>-- Chọn danh mục --</option>
                                                @php showCategories($productCategories); @endphp
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="brand_id" class="col-sm-2 col-form-label">Thương hiệu</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="brand_id">
                                                @foreach($brands as $key => $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md mb-3">
                                        <label for="description" class="form-label">Mô tả sản phẩm</label>
                                        {{--                                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>--}}
                                        <!-- TinyMCE Editor -->
                                        <textarea class="tinymce-editor @error('description') is-invalid @enderror" id="description" name="description"></textarea><!-- End TinyMCE Editor -->
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
                                    <!-- Ảnh preview với nút xóa nổi -->
                                    <div id="image_preview_wrapper" class="position-relative mt-3 mb-3 border border-1 border-dark-subtle rounded-3" style="max-width: 200px; height: 200px">
                                        <img alt="" id="image_preview" src="#" class="img-thumbnail d-none" style="width: 100%; height: auto;">
                                        <button type="button" id="remove_image_btn" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 d-none" title="Xóa ảnh">
                                            &times;
                                        </button>
                                    </div>
                                </div><!-- Thêm ảnh thumbnail với Preview -->

                                <div class="col-md mb-3">
                                    <label for="gallery" class="form-label">Thư viện ảnh</label>
                                    <input type="file" class="form-control" id="gallery" name="gallery[]" accept="image/*" multiple>

                                    <button type="button" id="clearGalleryBtn" class="btn btn-outline-danger btn-sm mt-2">Xóa toàn bộ ảnh</button>

                                    <div id="galleryPreview" class="d-flex flex-wrap gap-2 mt-3">

                                    </div>
                                </div><!-- Thêm ảnh sản phẩm với Preview -->

                                <div class="col-md mb-3">
                                    {{-- Ảnh theo từng màu --}}
                                    <div id="color-image-group">
                                        <div class="row mb-3 color-block">
                                            <div class="col-md-4">
                                                <select name="colors[]" class="form-select">
                                                    <option value="" disabled>-- Chọn màu --</option>
                                                    @foreach($colors as $color)
                                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="images[][image][]" multiple class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger remove-color">Xóa</button>
                                            </div>
                                        </div>
                                    </div>

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

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Biến thể sản phẩm</h5>

                                <div class="col-md">

                                    {{-- Gallery ảnh theo màu --}}
                                    <div class="mb-3">
                                        <label class="form-label">Ảnh theo màu</label>
                                        <div id="color-gallery-wrapper">
                                            <div class="row mb-2 color-gallery-group">
                                                <div class="col-md-4">
                                                    <select name="color_galleries[0][color_id]" class="form-select">
                                                        @foreach($colors as $color)
                                                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" name="color_galleries[0][images][]" class="form-control" multiple>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger remove-gallery">X</button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="add-color-gallery" class="btn btn-primary btn-sm">+ Thêm ảnh theo màu</button>
                                    </div>

                                    {{-- Biến thể (màu + size + tồn kho) --}}
                                    <div class="mb-3">
                                        <label class="form-label">Biến thể sản phẩm</label>
                                        <div id="variant-wrapper">
                                            <div class="row mb-2 variant-group">
                                                <div class="col-md-3">
                                                    <select name="variants[0][color_id]" class="form-select">
                                                        @foreach($colors as $color)
                                                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select name="variants[0][size]" class="form-select">
                                                        @foreach(['36', '37', '38', '39', '40', '41', '42', '43'] as $size)
                                                            <option value="{{ $size }}">{{ $size }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" name="variants[0][stock]" class="form-control" placeholder="Tồn kho">
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button" class="btn btn-danger remove-variant">X</button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="add-variant" class="btn btn-primary btn-sm">+ Thêm biến thể</button>
                                    </div>
                                </div>

                            </div>
                        </div>
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
        const wrapper = document.getElementById('image_preview_wrapper');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                    removeBtn.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        });

        removeBtn.addEventListener('click', function () {
            preview.src = '#';
            preview.classList.add('d-none');
            removeBtn.classList.add('d-none');
            imageInput.value = ''; // Clear file input
        });
    </script> <!--Preview thumbnail image -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const galleryInput = document.getElementById('gallery');
            const galleryPreview = document.getElementById('galleryPreview');
            const clearGalleryBtn = document.getElementById('clearGalleryBtn');

            let galleryFiles = [];

            galleryInput.addEventListener('change', function () {
                const newFiles = Array.from(galleryInput.files);

                // Thêm ảnh mới vào mảng (giữ ảnh cũ)
                galleryFiles = galleryFiles.concat(newFiles);

                renderGalleryPreviews();
                updateInputFiles();
            });

            function renderGalleryPreviews() {
                galleryPreview.innerHTML = '';
                galleryFiles.forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const wrapper = document.createElement('div');
                        wrapper.classList.add('position-relative');

                        wrapper.innerHTML = `
                    <img src="${e.target.result}" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 delete-preview">&times;</button>
                `;

                        wrapper.querySelector('.delete-preview').addEventListener('click', () => {
                            galleryFiles.splice(index, 1);
                            renderGalleryPreviews();
                            updateInputFiles();
                        });

                        galleryPreview.appendChild(wrapper);
                    };
                    reader.readAsDataURL(file);
                });
            }

            function updateInputFiles() {
                const dataTransfer = new DataTransfer();
                galleryFiles.forEach(file => dataTransfer.items.add(file));
                galleryInput.files = dataTransfer.files;
            }

            if (clearGalleryBtn) {
                clearGalleryBtn.addEventListener('click', function () {
                    galleryFiles = [];
                    galleryPreview.innerHTML = '';
                    updateInputFiles();
                });
            }
        });
    </script> <!--Preview product gallery -->

    <script>
        let galleryIndex = 1;
        let variantIndex = 1;

        // Thêm ảnh theo màu
        document.getElementById('add-color-gallery').addEventListener('click', function () {
            const wrapper = document.getElementById('color-gallery-wrapper');
            const html = `
        <div class="row mb-2 color-gallery-group">
            <div class="col-md-4">
                <select name="color_galleries[${galleryIndex}][color_id]" class="form-select">
                    @foreach($colors as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <input type="file" name="color_galleries[${galleryIndex}][images][]" class="form-control" multiple>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-gallery">X</button>
            </div>
        </div>`;
            wrapper.insertAdjacentHTML('beforeend', html);
            galleryIndex++;
        });

        // Xoá ảnh theo màu
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-gallery')) {
                e.target.closest('.color-gallery-group').remove();
            }
        });

        // Thêm biến thể
        document.getElementById('add-variant').addEventListener('click', function () {
            const wrapper = document.getElementById('variant-wrapper');
            const html = `
        <div class="row mb-2 variant-group">
            <div class="col-md-3">
                <select name="variants[${variantIndex}][color_id]" class="form-select">
                    @foreach($colors as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select name="variants[${variantIndex}][size]" class="form-select">
                    @foreach(['36', '37', '38', '39', '40', '41', '42', '43'] as $size)
            <option value="{{ $size }}">{{ $size }}</option>
                    @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" name="variants[${variantIndex}][stock]" class="form-control" placeholder="Tồn kho">
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-danger remove-variant">X</button>
            </div>
        </div>`;
            wrapper.insertAdjacentHTML('beforeend', html);
            variantIndex++;
        });

        // Xoá biến thể
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-variant')) {
                e.target.closest('.variant-group').remove();
            }
        });
    </script> <!--Add product variant -->


    {{--    <script> // tự code =)))))--}}
{{--        document.addEventListener('DOMContentLoaded', function (){--}}
{{--            const galleryInput = document.getElementById('gallery');--}}
{{--            const galleryPreview = document.getElementById('galleryPreview');--}}

{{--            galleryInput.addEventListener('change', function () {--}}
{{--                galleryPreview.innerHTML = ''; //xoa preview cu--}}
{{--                const files = Array.from(galleryInput.files);--}}

{{--                files.forEach((file, index) => {--}}
{{--                    const reader = new FileReader();--}}
{{--                    reader.onload = function (e){--}}
{{--                        const wrapper = document.createElement('div');--}}
{{--                        wrapper.classList.add('position-relative');--}}

{{--                        wrapper.innerHTML = `--}}
{{--                    <img src="${e.target.result}" alt="preview" class="rounded" style="width: 120px; height: 120px; object-fit: cover;">--}}
{{--                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 rounded-circle delete-preview" style="transform: translate(50%, -50%);">&times;</button>--}}
{{--                `;--}}

{{--                        //--}}
{{--                        wrapper.querySelector('.delete-preview').addEventListener('click', () => {--}}
{{--                            files.splice(index, 1);--}}
{{--                            updateInputFiles(files);--}}
{{--                            wrapper.remove();--}}
{{--                        })--}}

{{--                        galleryPreview.appendChild(wrapper);--}}
{{--                    };--}}
{{--                    reader.readAsDataURL(file);--}}
{{--                });--}}

{{--                //--}}
{{--                function updateInputFiles(newFiles) {--}}
{{--                    const dataTransfer = new DataTransfer();--}}
{{--                    newFiles.forEach(file => dataTransfer.items.add(file));--}}
{{--                    galleryInput.files = dataTransfer.files;--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection

@extends('admin.components.footer')
