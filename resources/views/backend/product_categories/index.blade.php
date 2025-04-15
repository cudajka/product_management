@extends('backend.layouts.app')

@section('title', 'Quản lý danh mục sản phẩm')

@extends('backend.components.header')

@extends('backend.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách danh mục sản phẩm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Tables</li>--}}
                    <li class="breadcrumb-item active">Danh sách danh mục</li>
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
                            <h5 class="card-title">Danh sách danh mục</h5>
                            <a href="{{route('product_categories.create')}}" class="btn btn-primary">Thêm danh mục sản phẩm</a>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Danh mục cha</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productCategories as $key => $value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->parent_id}}</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="{{route('product_categories.edit', ['product_category'=>$value->id])}}" class="btn text-success"><i class="bx bxs-edit-alt"></i></a>
                                                <form action="{{ route('product_categories.destroy', ['product_category' => $value->id]) }}" method="POST" onsubmit="return confirm('Bạn có muốn xóa không?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger">
                                                        <i class="bx bxs-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
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
