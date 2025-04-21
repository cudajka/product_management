@extends('backend.layouts.app')

@section('title', 'Quản lý tồn')

@extends('backend.components.header')

@extends('backend.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách tồn</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Tables</li>--}}
                    <li class="breadcrumb-item active">Danh sách tồn</li>
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
                            <h5 class="card-title">Quản lý tồn</h5>
                            <a href="{{route('product_variants.create')}}" class="btn btn-primary">Thêm tồn</a>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <colgroup>
                                    <col style="width: 1%;">
                                    <col style="width: auto;">
                                    <col style="width: auto;">
                                    <col style="width: auto;">
                                    <col style="width: auto;">
                                    <col style="width: auto;">
                                    <col style="width: 1%;">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Kích thước</th>
                                    <th scope="col">Màu sắc</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productVariants as $key=>$productVariant)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$productVariant->productName}}</td>
                                        <td>{{$productVariant->sizeNumber}}</td>
                                        <td>{{$productVariant->colorName}}</td>
                                        <td>{{$productVariant->quantity}}</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="{{route('product_variants.edit', ['product_variant' => $productVariant->id])}}" class="d-inline-block btn text-success"><i class="bx bxs-edit-alt"></i></a>
                                                <form action="{{route('product_variants.destroy', ['product_variant' => $productVariant->id])}}" method="POST" onsubmit="return confirm('Bạn có muốn xóa không?')">
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
