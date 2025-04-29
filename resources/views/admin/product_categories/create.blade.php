@extends('admin.layouts.app')

@section('title', 'Thêm danh mục')

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Thêm danh mục</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Thêm danh mục</li>
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
                            <form action="{{route('product_categories.store')}}" class="row g-3" method="post" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên danh mục</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="parent_id" class="form-label">Danh mục cha</label>
{{--                                        <select class="form-select" aria-label="" name="parent_id">--}}
{{--                                            <option value="0" selected>-- Không có --</option>--}}
{{--                                            @foreach($productCategories as $key => $value)--}}
{{--                                                <option value="{{$value->id}}">{{$value->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}

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

                                    <select name="parent_id" class="form-select">
                                        <option value="0" selected>-- Không có --</option>
                                        @php showCategories($productCategories); @endphp
                                    </select>
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
