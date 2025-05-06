@php
    $sortBy = request('sort_by');
    $sortDir = request('sort_dir', 'asc');
@endphp

<style>
    .sort-icons {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        font-size: 0.7rem;
        line-height: 0.7rem;
    }
    .sort-icons span {
        color: #ccc;
        text-align: right;
    }
    .sort-icons .active {
        color: #000;
        font-weight: bold;
    }
</style>

<form id="massDeleteForm" method="post" action="{{ route('products.massDelete') }}">
    @csrf
    @method('DELETE')
    <!-- Table with stripped rows -->
    <table id="productTable" class="table table-striped table-hover">
        <colgroup>
            <col style="width: auto">
            <col style="width: 3%">
            <col style="width: auto">
            <col style="width: auto">
            <col style="width: 10%">
            <col style="width: 10%">
            <col style="width: 15%">
            <col style="width: auto">
            <col style="width: auto">
            <col style="width: auto">
        </colgroup>
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" style="cursor: pointer" id="selectAll"></th>
                <th scope="col" class="sort-link position-relative" data-sort="id" style="cursor: pointer;">
                    #
                    <span class="sort-icons">
                        <span class="{{ $sortBy == 'id' && $sortDir == 'asc' ? 'active' : '' }}">▲</span>
                        <span class="{{ $sortBy == 'id' && $sortDir == 'desc' ? 'active' : '' }}">▼</span>
                    </span>
                </th>
                <th scope="col"></th>
                <th scope="col" class="sort-link position-relative" data-sort="name" style="cursor: pointer;">
{{--                    <a class="text-dark sort-link" data-sort="name" href="{{ route('products.index', ['sort_by' => 'name', 'sort_dir' => request('sort_dir') == 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}">--}}
                    Tên sản phẩm
                    <span class="sort-icons">
                        <span class="{{ $sortBy == 'name' && $sortDir == 'asc' ? 'active' : '' }}">▲</span>
                        <span class="{{ $sortBy == 'name' && $sortDir == 'desc' ? 'active' : '' }}">▼</span>
                    </span>
{{--                    </a>--}}
                </th>
                <th scope="col" class="sort-link position-relative" data-sort="price" style="cursor: pointer;">
{{--                    <a class="text-dark sort-link" data-sort="price" href="{{ route('products.index', ['sort_by' => 'price', 'sort_dir' => request('sort_dir') == 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}">--}}
                    Giá
                    <span class="sort-icons">
                        <span class="{{ $sortBy == 'price' && $sortDir == 'asc' ? 'active' : '' }}">▲</span>
                        <span class="{{ $sortBy == 'price' && $sortDir == 'desc' ? 'active' : '' }}">▼</span>
                    </span>
{{--                    </a>--}}
                </th>
                <th scope="col">Trạng thái</th>
                <th scope="col" class="sort-link position-relative" data-sort="productCategory" style="cursor: pointer;">
{{--                    <a class="text-dark sort-link" data-sort="category" href="{{ route('products.index', ['sort_by' => 'productCategory', 'sort_dir' => request('sort_dir') == 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}">--}}
                    Danh mục
                    <span class="sort-icons">
                        <span class="{{ $sortBy == 'productCategory' && $sortDir == 'asc' ? 'active' : '' }}">▲</span>
                        <span class="{{ $sortBy == 'productCategory' && $sortDir == 'desc' ? 'active' : '' }}">▼</span>
                    </span>
{{--                    </a>--}}
                </th>
                <th scope="col" class="sort-link position-relative" data-sort="brand" style="cursor: pointer;">
{{--                    <a class="text-dark sort-link" data-sort="brand" href="{{ route('products.index', ['sort_by' => 'brand', 'sort_dir' => request('sort_dir') == 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}">--}}
                    Thương hiệu
                    <span class="sort-icons">
                        <span class="{{ $sortBy == 'brand' && $sortDir == 'asc' ? 'active' : '' }}">▲</span>
                        <span class="{{ $sortBy == 'brand' && $sortDir == 'desc' ? 'active' : '' }}">▼</span>
                    </span>
{{--                    </a>--}}
                </th>
                <th scope="col" class="sort-link position-relative" data-sort="created_at" style="cursor: pointer;">
{{--                    <a class="text-dark sort-link" href="{{ route('products.index', ['sort_by' => 'created_at', 'sort_dir' => request('sort_dir') == 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}">--}}
                    Ngày tạo
                    <span class="sort-icons">
                        <span class="{{ $sortBy == 'created_at' && $sortDir == 'asc' ? 'active' : '' }}">▲</span>
                        <span class="{{ $sortBy == 'created_at' && $sortDir == 'desc' ? 'active' : '' }}">▼</span>
                    </span>
{{--                    </a>--}}
                </th>
                {{--<th scope="col">Mô tả</th>--}}
                {{--<th scope="col">Thư viện ảnh</th>--}}
                <th scope="col" style="width: fit-content;">Hành động</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th><input type="text" id="filter-name" data-name="name" class="form-control form-control-sm column-filter" placeholder="Tìm tên"></th>
                <th><input type="text" id="filter-price" data-name="price" class="form-control form-control-sm column-filter" placeholder="Tìm giá"></th>
                <th></th>
                <th><input type="text" id="filter-product-category" data-name="productCategory" class="form-control form-control-sm column-filter" placeholder="Tìm danh mục"></th>
                <th><input type="text" id="filter-brand" data-name="brand" class="form-control form-control-sm column-filter" placeholder="Tìm thương hiệu"></th>
                <th><input type="text" id="filter-created-at" data-name="created_at" class="form-control form-control-sm column-filter" placeholder="Tìm ngày tạo"></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="table-body">
        @foreach($products as $key=>$product)
            <tr>
                <td class="align-middle"><input type="checkbox" name="ids[]" style="cursor: pointer" value="{{ $product->id }}" class="selectItem"></td>
                <th scope="row" class="align-middle">{{$key+1}}</th>
                <td class="align-middle">
                    @if($product->thumbnail)
                        <img src="{{asset('storage/'.$product->thumbnail)}}" class="overflow-hidden border rounded-2"  alt="" width="70px" height="70px">
                    @else
                        <img src="{{url('/backend')}}/assets/img/no-image.png"  alt="" width="70px" height="70px">
                    @endif
                    {{--<img class="img-thumbnail" src="{{asset('storage/'.$product->thumbnail)}}"  alt="">--}}
                </td>
                <td class="align-middle">
                    {{$product->name}}
                    {{--<img class="img-thumbnail" src="{{asset('storage/'.$product->thumbnail)}}"  alt="">--}}
                </td>
                <td class="align-middle">{{$product->price}}</td>
                <td class="align-middle">{{$product->status ? "Còn hàng" : "Hết hàng"}}</td>
                <td class="align-middle">{{$product->productCategory->name}}</td>
                <td class="align-middle">{{$product->brand->name}}</td>
                {{--                                            <td>{!! $product->description !!}</td>--}}
                {{--                                            <td>--}}
                {{--                                                <div class="" style="width: 150px; height: 150px">--}}
                {{--                                                    @if ($product->images->count())--}}
                {{--                                                        <div id="carousel-{{$product->id}}" class="carousel slide" data-bs-ride="carousel">--}}
                {{--                                                            <div class="carousel-inner">--}}
                {{--                                                                @foreach ($product->images as $index => $image)--}}
                {{--                                                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">--}}
                {{--                                                                        <img src="{{ asset('storage/' . $image->image_path) }}"--}}
                {{--                                                                             class="img-thumbnail"--}}
                {{--                                                                             alt="Ảnh sản phẩm">--}}
                {{--                                                                    </div>--}}
                {{--                                                                @endforeach--}}
                {{--                                                            </div>--}}
                {{--                                                            @if ($product->images->count() > 1)--}}
                {{--                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $product->id }}" data-bs-slide="prev">--}}
                {{--                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                {{--                                                                </button>--}}
                {{--                                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $product->id }}" data-bs-slide="next">--}}
                {{--                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                {{--                                                                </button>--}}
                {{--                                                            @endif--}}
                {{--                                                        </div>--}}
                {{--                                                    @else--}}
                {{--                                                        <i class="bx bxs-file-image text-danger"></i>--}}
                {{--                                                    @endif--}}
                {{--                                                </div>--}}
                {{--                                            </td>--}}
                <td class="align-middle">{{$product->created_at}}</td>
                <td class="align-middle" style="width: 125px;">
                    <a href="{{route('products.show', ['product'=>$product->id])}}" class="p-2 text-success"><i class="bx bxs-show"></i></a>
                    <a href="{{route('products.edit', ['product'=>$product->id])}}" class="p-2 text-warning"><i class="bx bxs-edit-alt"></i></a>
                    <!-- Nút mở modal -->
                    <a href="#" class="p-2 text-danger deleteSingleBtn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-action="{{ route('products.destroy', $product->id) }}"><i class="bx bxs-trash-alt"></i></a>

                    {{--form--}}
                    {{--action="{{route('products.destroy', ['product' => $product->id])}}"--}}
                    {{--method="POST"--}}
                    {{--onsubmit="return confirm('Bạn có muốn xóa không?')">--}}
                    {{--@csrf--}}
                    {{--@method('DELETE')--}}
                    {{--<button type="submit" class="d-inline-block btn text-danger">--}}
                    {{--<i class="bx bxs-trash-alt"></i>--}}
                    {{--</button>--}}
                    {{--</form>--}}

                    {{--<a href="{{route('products.destroy', ['product'=>$value->id])}}" class="text-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="bx bxs-trash-alt"></i></a>--}}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <!-- End Table with stripped rows -->

    <!-- Phân trang -->
    <div id="pagination-links">
        {{ $products instanceof \Illuminate\Pagination\LengthAwarePaginator ? $products->links() : '' }}
{{--        {{$products->links()}}--}}
    </div>
</form>

<!-- Modal Xóa -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xoá sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xoá sản phẩm này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-danger">Xoá luôn khỏi cần nghĩ!</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal xác nhận xóa -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa các mục đã chọn không? Hành động này không thể hoàn tác.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
            </div>
        </div>
    </div>
</div>
