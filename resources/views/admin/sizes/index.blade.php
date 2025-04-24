@extends('admin.layouts.app')

@section('title', 'Quản lý kích thước')

@extends('admin.components.header')

@extends('admin.components.sidebar')

@section('main_content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Danh sách kích thước</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    {{--                    <li class="breadcrumb-item">Tables</li>--}}
                    <li class="breadcrumb-item active">Danh sách kích thước</li>
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
                            <h5 class="card-title">Danh sách kích thước</h5>
                            <a href="{{route('sizes.create')}}" class="btn btn-primary">Thêm kích thước</a>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <colgroup>
                                    <col style="width: auto;">
                                    <col style="width: auto;">
                                    <col style="width: auto;">
                                    <col style="width: 1%;">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên kích thước</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sizes as $key => $value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->number}}</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="{{route('sizes.edit', ['size'=>$value->id])}}"
                                                   class="d-inline-block btn text-success"><i
                                                            class="bx bxs-edit-alt"></i></a>
                                                <form action="{{ route('sizes.destroy', ['size' => $value->id]) }}"
                                                      method="POST" onsubmit="return confirm('Bạn có muốn xóa không?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="d-inline-block btn text-danger">
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

@extends('admin.components.footer')
