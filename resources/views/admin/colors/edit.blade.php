@extends('admin.layouts.app')

@section('title', 'Sửa màu sắc')

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Sửa màu sắc</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Sửa màu sắc</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sửa màu sắc</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('colors.update', ['color' => $editColor->id])}}" class="row g-3"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên màu sắc</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{$editColor->name}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Mã màu</label>
                                    <input type="text" class="form-control" id="code" name="code"
                                           value="{{$editColor->code}}">
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
