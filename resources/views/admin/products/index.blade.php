@extends('admin.layouts.app')

@section('title', 'Quản lý sản phẩm')

@extends('admin.components.header')

@extends('admin.components.sidebar')

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

                <div class="col-md">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Danh sách sản phẩm</h5>
                            <a href="{{route('products.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
                            {{$products->links()}}
                            <div class="table-responsive">
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                    <colgroup>
                                        <col style="width: auto;">
                                        <col style="width: 15%;">
                                        <col style="width: auto;">
                                        <col style="width: 7%;">
                                        <col style="width: 7%;">
                                        <col style="width: 8%;">
                                        <col style="width: auto;">
                                        <col style="width: auto;">
                                        <col style="width: auto">
                                        <col style="width: 7%;">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Thương hiệu</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Thumbnail</th>
                                        <th scope="col">Thư viện ảnh</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->status ? "Còn hàng" : "Hết hàng"}}</td>
                                            <td>{{$product->productCategory->name}}</td>
                                            <td>{{$product->brand?->name}}</td>
                                            <td>{!! $product->description !!}</td>
                                            <td>
                                                <div class="" style="width: 150px; height: 150px">
                                                    @if($product->thumbnail)
                                                        <img class="img-thumbnail" src="{{asset('storage/'.$product->thumbnail)}}"  alt="">
                                                    @else
                                                        <i class="bx bxs-file-image text-danger"></i>
                                                    @endif
{{--                                                    <img class="img-thumbnail" src="{{asset('storage/'.$product->thumbnail)}}"  alt="">--}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="" style="width: 150px; height: 150px">
                                                    @if ($product->images->count())
                                                        <div id="carousel-{{$product->id}}" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-inner">
                                                                @foreach ($product->images as $index => $image)
                                                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                        <img src="{{ asset('storage/' . $image->image_path) }}"
                                                                             class="img-thumbnail"
                                                                             alt="Ảnh sản phẩm">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            @if ($product->images->count() > 1)
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $product->id }}" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $product->id }}" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    @else
                                                        <i class="bx bxs-file-image text-danger"></i>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="{{route('products.show', ['product'=>$product->id])}}"
                                                       class="d-inline-block btn text-success"><i
                                                            class="bx bxs-show"></i>
                                                    </a>
                                                    <a href="{{route('products.edit', ['product'=>$product->id])}}"
                                                       class="d-inline-block btn text-warning"><i
                                                            class="bx bxs-edit-alt"></i>
                                                    </a>
                                                    <form
                                                        action="{{route('products.destroy', ['product' => $product->id])}}"
                                                        method="POST"
                                                        onsubmit="return confirm('Bạn có muốn xóa không?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="d-inline-block btn text-danger">
                                                            <i class="bx bxs-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                {{--                                                                                                <a href="{{route('products.destroy', ['product'=>$value->id])}}" class="text-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="bx bxs-trash-alt"></i></a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                                {{$products->links()}}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@extends('admin.components.footer')
