@extends('backend.layouts.app')

@section('title', 'Quản lý sản phẩm')

@extends('backend.components.header')

@extends('backend.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách sản phẩm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
{{--                    <li class="breadcrumb-item">Tables</li>--}}
                    <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">

                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Danh sách sản phẩm</h5>
                            <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm</a>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Thương hiệu</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key => $value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{$value->status ? "Còn hàng" : "Hết hàng"}}</td>
                                        <td>{{$value->product_category?->name ?? $value->category_id}}</td>
                                        <td>{{$value->brand?->name ?? $value->brand_id}}</td>
                                        <td>{!! $value->description !!}</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="{{route('products.edit', ['product'=>$value->id])}}" class="d-inline-block btn text-success"><i class="bx bxs-edit-alt"></i></a>
                                                <form action="{{ route('products.destroy', ['product' => $value->id]) }}" method="POST" onsubmit="return confirm('Bạn có muốn xóa không?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="d-inline-block btn text-danger">
                                                        <i class="bx bxs-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
{{--                                                <a href="{{route('products.destroy', ['product'=>$value->id])}}" class="text-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="bx bxs-trash-alt"></i></a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@extends('backend.components.footer')
