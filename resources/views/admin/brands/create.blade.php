@extends('admin.layouts.app')

@section('title', 'Thêm thương hiệu')

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Thêm thương hiệu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Thêm thương hiệu</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm thương hiệu</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('brands.store')}}" class="row g-3" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên brand</label>
                                    <input type="text" class="form-control" id="name" name="name">
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
