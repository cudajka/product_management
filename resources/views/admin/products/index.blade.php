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

                                <div class="row justify-content-between">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <h5 class="card-title">Danh sách sản phẩm</h5>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                                        <div class="d-flex justify-content-end">
                                            <span id="selectedCountText"></span>
                                            <!-- Nút bấm mở modal xác nhận -->
                                            <button type="button" form="massDeleteForm" class="btn btn-danger align-middle me-1" id="deleteSelectedBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" disabled>
                                                Xóa mục đã chọn
                                            </button>
                                            <a href="{{route('products.create')}}" class="btn btn-primary align-middle">Thêm sản phẩm</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-between">
{{--                                    <div class="col-md-6 mt-2 mb-2">--}}
{{--                                            <form method="GET" action="{{ route('products.index') }}" class="d-flex align-items-center">--}}
{{--                                                <label for="per_page" class="me-2">Hiển thị</label>--}}
{{--                                                <select name="per_page" id="per_page" class="form-select w-auto" onchange="this.form.submit()">--}}
{{--                                                    <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>--}}
{{--                                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>--}}
{{--                                                    <option value="15" {{ request('per_page') == 15 ? 'selected' : '' }}>15</option>--}}
{{--                                                    <option value="all" {{ request('per_page') == 'all' ? 'selected' : '' }}>Tất cả</option>--}}
{{--                                                </select>--}}
{{--                                                <span class="ms-2 me-2">dòng trên 1 trang</span>--}}
{{--                                            </form>--}}

{{--                                        <div class="col-md">--}}
{{--                                                <a href="{{ route('products.index') }}" class="btn btn-secondary ms-2"><i class="bx bx-refresh"></i></a>--}}
{{--                                            <button id="btn_reload" class="btn btn-secondary"><i class="bx bx-refresh"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2 mt-2">
                                        Hiển thị:
                                        <select name="per_page" id="per_page" class="form-select w-auto d-inline-block">
                                            <option value="5" selected>5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="all">Tất cả</option>
                                        </select>
                                        dòng/trang
                                        <button id="btn_reload" class="btn btn-secondary"><i class="bx bx-refresh"></i></button>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mt-2 mb-2">
                                        <!-- Form tìm kiếm -->
{{--                                        <form method="GET" action="{{ route('products.index') }}">--}}
                                            <div class="d-flex flex-row-reverse">
                                                <div class="input-group">
                                                    <input type="text" id="global-search" name="search" {{--value="{{ request('search') }}"--}} class="form-control" placeholder="Tìm sản phẩm...">
                                                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                                                </div>
                                            </div>
{{--                                        </form>--}}
                                    </div>
                                </div>

                                <div id="table-container" class="table-responsive">
                                    @include('admin.products._table', ['products' => $products])
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script>
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const actionUrl = button.getAttribute('data-action');

            const form = deleteModal.querySelector('#deleteForm');
            form.action = actionUrl;
        });
    </script> <!-- Truyền id vào modal xóa (xóa 1 sản phẩm khi click vào thùng rác) -->

    <script>
        document.getElementById('selectAll').addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('.selectBox');
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    </script> <!-- JS xử lý phần checkbox chọn tất cả sản phầm -->

    <script>
        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            document.getElementById('massDeleteForm').submit();
        }); <!-- JavaScript: khi bấm nút trong modal thì submit form -->

        const selectAllCheckbox = document.getElementById('selectAll');
        const itemCheckboxes = document.querySelectorAll('.selectItem');
        const deleteBtn = document.getElementById('deleteSelectedBtn');
        const selectedCountText = document.getElementById('selectedCountText');
        const singleDeleteButtons = document.querySelectorAll('.deleteSingleBtn'); // Cái này để vô hiệu hóa nút xóa đơn nếu chọn từ 2 sản phẩm trở lên
        {{--const totalItems = {{ count($products) }};--}}

        function updateSelectionState() {
            const selectedItems = document.querySelectorAll('.selectItem:checked').length;

            // Enable/disable nút "Xóa mục đã chọn"
            deleteBtn.disabled = selectedItems === 0;

            // Update số lượng chọn
            selectedCountText.textContent = selectedItems > 0
                //? `Đã chọn ${selectedItems}/${totalItems} sản phẩm`
                ? `Đã chọn ${selectedItems} sản phẩm`
                : '';

            // Disable nút xóa từng sản phẩm nếu chọn >=2
            singleDeleteButtons.forEach(button => {
                if (selectedItems >= 2) {
                    button.classList.add('disabled');  // Bootstrap disabled style
                    button.removeAttribute('data-bs-toggle'); // Không mở modal nữa
                } else {
                    button.classList.remove('disabled');
                    button.setAttribute('data-bs-toggle', 'modal'); // Cho phép mở modal lại
                }
            });
        }

        function bindCheckboxEvents() {
            const selectAllCheckbox = document.getElementById('selectAll');
            const itemCheckboxes = document.querySelectorAll('.selectItem');

            // Gắn sự kiện checkbox từng dòng
            itemCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    // Nếu có ít nhất 1 checkbox chưa chọn thì bỏ chọn ô tổng
                    if (!this.checked) {
                        selectAllCheckbox.checked = false;
                    } else if (document.querySelectorAll('.selectItem:checked').length === itemCheckboxes.length) {
                        selectAllCheckbox.checked = true;
                    }
                    updateSelectionState();
                });
            });

            // Gắn sự kiện checkbox tổng
            if (selectAllCheckbox) {
                selectAllCheckbox.addEventListener('change', function () {
                    itemCheckboxes.forEach(cb => cb.checked = this.checked);
                    updateSelectionState();
                });
            }

            // Cập nhật trạng thái ban đầu (số lượng chọn, nút xóa, v.v.)
            updateSelectionState();
        }

        function resetCheckboxState() {
            const selectAllCheckbox = document.getElementById('selectAll');
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = false;
            }

            const itemCheckboxes = document.querySelectorAll('.selectItem');
            itemCheckboxes.forEach(cb => cb.checked = false);

            updateSelectionState();
        }

        // // Khi check select all
        // selectAllCheckbox.addEventListener('change', function () {
        //     itemCheckboxes.forEach(function (checkbox) {
        //         checkbox.checked = selectAllCheckbox.checked;
        //     });
        //     updateSelectionState();
        // });
        //
        // // Khi check từng item
        // itemCheckboxes.forEach(function (checkbox) {
        //     checkbox.addEventListener('change', function () {
        //         if (!this.checked) {
        //             selectAllCheckbox.checked = false;
        //         }
        //         else if (document.querySelectorAll('.selectItem:checked').length === itemCheckboxes.length) {
        //             selectAllCheckbox.checked = true;
        //         }
        //         updateSelectionState();
        //     });
        // });

        // Lúc load lần đầu
        // updateSelectionState();
        bindCheckboxEvents();

        $(document).on('ajaxComplete', function () {
            bindCheckboxEvents();
        });

    </script> <!-- Xử lý xóa tất cả sản phẩm sau khi checkbox all -->

{{--    <script>--}}
{{--        function loadProducts(params = {}) {--}}
{{--            axios.get("{{ route('products.index') }}", { params })--}}
{{--                .then(function (response) {--}}
{{--                    document.getElementById('table-container').innerHTML = response.data;--}}
{{--                })--}}
{{--                .catch(function (error) {--}}
{{--                    console.error(error);--}}
{{--                });--}}
{{--        }--}}

{{--        document.getElementById('per_page').addEventListener('change', function() {--}}
{{--            loadProducts({--}}
{{--                per_page: this.value,--}}
{{--                search: document.getElementById('search').value--}}
{{--            });--}}
{{--        });--}}

{{--        document.getElementById('search').addEventListener('keyup', function() {--}}
{{--            loadProducts({--}}
{{--                search: this.value,--}}
{{--                per_page: document.getElementById('per_page').value--}}
{{--            });--}}
{{--        });--}}

{{--        // Nếu click vào phân trang links--}}
{{--        document.addEventListener('click', function(e) {--}}
{{--            if (e.target.closest('.pagination a')) {--}}
{{--                e.preventDefault();--}}
{{--                const url = e.target.closest('a').href;--}}
{{--                axios.get(url)--}}
{{--                    .then(function (response) {--}}
{{--                        document.getElementById('table-container').innerHTML = response.data;--}}
{{--                    })--}}
{{--                    .catch(function (error) {--}}
{{--                        console.error(error);--}}
{{--                    });--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

{{--    <script>--}}
{{--        let currentSortBy = '';--}}
{{--        let currentSortDir = 'asc';--}}

{{--        function loadProducts(params = {}) {--}}
{{--            const spinner = document.createElement('div');--}}
{{--            spinner.className = 'text-center my-3';--}}
{{--            spinner.innerHTML = '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';--}}
{{--            document.getElementById('table-container').innerHTML = '';--}}
{{--            document.getElementById('table-container').appendChild(spinner);--}}

{{--            axios.get("{{ route('products.index') }}", { params })--}}
{{--                .then(function (response) {--}}
{{--                    document.getElementById('table-container').innerHTML = response.data;--}}

{{--                    // Highlight từ khóa--}}
{{--                    const search = document.getElementById('search').value.trim();--}}
{{--                    if (search) {--}}
{{--                        highlight(search);--}}
{{--                    }--}}
{{--                })--}}
{{--                .catch(function (error) {--}}
{{--                    console.error(error);--}}
{{--                });--}}
{{--        }--}}

{{--        function reloadProducts() {--}}
{{--            loadProducts({--}}
{{--                per_page: document.getElementById('per_page').value,--}}
{{--                search: document.getElementById('search').value,--}}
{{--                sort_by: currentSortBy,--}}
{{--                sort_dir: currentSortDir,--}}
{{--            });--}}
{{--        }--}}

{{--        document.getElementById('per_page').addEventListener('change', reloadProducts);--}}
{{--        document.getElementById('search').addEventListener('keyup', reloadProducts);--}}

{{--        document.addEventListener('click', function(e) {--}}
{{--            if (e.target.closest('.pagination a')) {--}}
{{--                e.preventDefault();--}}
{{--                const url = e.target.closest('a').href;--}}
{{--                axios.get(url)--}}
{{--                    .then(function (response) {--}}
{{--                        document.getElementById('table-container').innerHTML = response.data;--}}
{{--                        const search = document.getElementById('search').value.trim();--}}
{{--                        if (search) {--}}
{{--                            highlight(search);--}}
{{--                        }--}}
{{--                    })--}}
{{--                    .catch(function (error) {--}}
{{--                        console.error(error);--}}
{{--                    });--}}
{{--            }--}}

{{--            if (e.target.classList.contains('sort-link')) {--}}
{{--                e.preventDefault();--}}
{{--                const sortField = e.target.dataset.sort;--}}
{{--                if (currentSortBy === sortField) {--}}
{{--                    currentSortDir = currentSortDir === 'asc' ? 'desc' : 'asc';--}}
{{--                } else {--}}
{{--                    currentSortBy = sortField;--}}
{{--                    currentSortDir = 'asc';--}}
{{--                }--}}
{{--                reloadProducts();--}}
{{--            }--}}
{{--        });--}}

{{--    </script>--}}

{{--    <script>--}}
{{--        function highlight(keyword) {--}}
{{--            const tbody = document.querySelector('#table-container tbody');--}}
{{--            if (!tbody) return;--}}

{{--            const regex = new RegExp('('+keyword+')', 'gi');--}}
{{--            tbody.querySelectorAll('td').forEach(function(td) {--}}
{{--                td.innerHTML = td.textContent.replace(regex, '<mark>$1</mark>');--}}
{{--            });--}}
{{--        }--}}

{{--    </script>--}}

@endsection

@extends('admin.components.footer')
