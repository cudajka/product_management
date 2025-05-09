@extends('admin.layouts.app')

@section('title', 'Quản lý danh mục sản phẩm')

@extends('admin.components.header')

@extends('admin.components.sidebar')

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

                            @php
                                function showCategoryRows($productCategories, $parent_id = 0, $prefix = '', &$index = 1) {
                                    foreach ($productCategories as $value) {
                                        if ($value->parent_id == $parent_id) {
                                            echo "<tr>";
                                            echo "<th>" . $index++ . "</th>";
                                            echo "<td>{$prefix}{$value->name}</td>";
                                            echo "<td>";
                                            echo '<div class="d-inline-flex">
                                                    <a href="' . route('product_categories.edit', ['product_category' => $value->id]) . '" class="btn text-success">
                                                        <i class="bx bxs-edit-alt"></i>
                                                    </a>
                                                    <form action="' . route('product_categories.destroy', ['product_category' => $value->id]) . '" method="POST" onsubmit="return confirm(\'Bạn có muốn xóa không?\')">
                                                        ' . csrf_field() . method_field('DELETE') . '
                                                        <button type="submit" class="btn text-danger">
                                                            <i class="bx bxs-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>';
                                            echo "</td>";
                                            echo "</tr>";

                                            showCategoryRows($productCategories, $value->id, $prefix . '---- ', $index);
                                        }
                                    }
                                }

                                $index = 1;
                            @endphp <!-- Hàm xử lý đệ quy hiển thị danh mục cha con có phân cấp rõ ràng -->

                            <div class="table-responsive">
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                    <colgroup>
                                        <col style="width: 5%;">
                                        <col style="width: auto;">
                                        <col style="width: 7%;">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php showCategoryRows($productCategories, 0, '', $index); @endphp

                                    {{--                                @foreach($productCategories as $key => $value)--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <th scope="row">{{$key+1}}</th>--}}
                                    {{--                                        <td>{{$value->name}}</td>--}}
                                    {{--                                        <td>{{optional($value->parent)->name}}</td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="d-inline-flex">--}}
                                    {{--                                                <a href="{{route('product_categories.edit', ['product_category'=>$value->id])}}"--}}
                                    {{--                                                   class="btn text-success"><i class="bx bxs-edit-alt"></i></a>--}}
                                    {{--                                                <form--}}
                                    {{--                                                    action="{{ route('product_categories.destroy', ['product_category' => $value->id]) }}"--}}
                                    {{--                                                    method="POST" onsubmit="return confirm('Bạn có muốn xóa không?')">--}}
                                    {{--                                                    @csrf--}}
                                    {{--                                                    @method('DELETE')--}}
                                    {{--                                                    <button type="submit" class="btn text-danger">--}}
                                    {{--                                                        <i class="bx bxs-trash-alt"></i>--}}
                                    {{--                                                    </button>--}}
                                    {{--                                                </form>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                @endforeach--}}
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@extends('admin.components.footer')
