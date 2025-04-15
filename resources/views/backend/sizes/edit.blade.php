@extends('backend.layouts.app')

@section('title', 'Thêm khích thước')

@extends('backend.components.header')

@extends('backend.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Thêm khích thước</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Forms</li>--}}
                    <li class="breadcrumb-item active">Thêm khích thước</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm khích thước</h5>

                            <!-- Multi Columns Form -->
                            <form action="{{route('sizes.update', ['size' => $editSize->id])}}" class="row g-3" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên kích thước</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$editSize->name}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="number" class="form-label">Size</label>
                                    <input type="number" class="form-control" id="number" name="number" value="{{$editSize->number}}">
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
