@extends('admin.layouts.app')

@section('title', 'Cập nhật danh mục: '.$editProductCategory->name)

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cập nhật danh mục</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product_categories.index')}}">Danh sách danh mục</a></li>
                    <li class="breadcrumb-item active">Cập nhật danh mục</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh mục</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('product_categories.update', ['product_category'=>$editProductCategory->id])}}"
                                  class="row g-3" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên danh mục</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{$editProductCategory->name}}">
                                </div>
                                <div class="col-md-6">
                                    @php
                                        function showCategoriesForEdit($categories, $currentCategory, $selectedId = null, $parent_id = 0, $prefix = '') {
                                            foreach ($categories as $cat) {
                                                if ($cat->parent_id == $parent_id && $cat->id != $currentCategory->id) {
                                                    $selected = $selectedId == $cat->id ? 'selected' : '';
                                                    echo "<option value='{$cat->id}' {$selected}>{$prefix}{$cat->name}</option>";
                                                    showCategoriesForEdit($categories, $currentCategory, $selectedId, $cat->id, $prefix . '---- ');
                                                }
                                            }
                                        }
                                    @endphp
                                    <label for="parent_id" class="form-label">Danh mục cha</label>
                                    <select name="parent_id" class="form-select">
                                        <option value="0" {{ $editProductCategory->parent_id == 0 ? 'selected' : '' }}>-- Không có danh mục cha --</option>
                                        @php showCategoriesForEdit($productCategories, $editProductCategory, $editProductCategory->parent_id); @endphp
                                    </select>

                                    {{--                                    <select class="form-select" aria-label="" name="parent_id">--}}
{{--                                        <option value="0" {{($editProductCategory->parent_id) == 0 ? "selected" : ""}}>--}}
{{--                                            -- Không có ----}}
{{--                                        </option>--}}
{{--                                        @foreach($productCategories as $key => $value)--}}
{{--                                            <option value="{{$value->id}}" {{($editProductCategory->parent_id) == $value->id ? "selected" : ""}}>--}}
{{--                                                {{$value->name}}--}}
{{--                                            </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
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
