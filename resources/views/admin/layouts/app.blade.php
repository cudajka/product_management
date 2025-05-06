<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title')</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{url('/backend')}}/assets/img/favicon.png" rel="icon">
        <link href="{{url('/backend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{url('/backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{url('/backend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="{{url('/backend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="{{url('/backend')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="{{url('/backend')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="{{url('/backend')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

        <!-- DataTables CSS File -->
    {{--    <link href="{{url('/backend')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">--}}
        <link href="{{url('/backend')}}/assets/vendor/datatables/datatables.css" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css">--}}

        <!-- Template Main CSS File -->
        <link href="{{url('/backend')}}/assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: NiceAdmin
        * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        * Updated: Mar 17 2024 with Bootstrap v5.3.3
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        @yield('header')

        @yield('sidebar')

        @yield('main_content')

        @yield('footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{url('/backend')}}/assets/vendor/jquery/jquery-3.7.1.min.js"></script>
        <script src="{{url('/backend')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="{{url('/backend')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    {{--    <script src="{{url('/backend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
        <script src="{{url('/backend')}}/assets/vendor/chart.js/chart.umd.js"></script>
        <script src="{{url('/backend')}}/assets/vendor/echarts/echarts.min.js"></script>
        <script src="{{url('/backend')}}/assets/vendor/quill/quill.min.js"></script>
        <script src="{{url('/backend')}}/assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="{{url('/backend')}}/assets/vendor/php-email-form/validate.js"></script>

        <!-- DataTables JS File -->
        {{--    <script src="{{url('/backend')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>--}}
        <script src="{{url('/backend')}}/assets/vendor/datatables/datatables.js"></script>

    {{--    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>--}}

    {{--    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>--}}

        <!-- Template Main JS File -->
        <script src="{{url('/backend')}}/assets/js/main.js"></script>

{{--        <script>--}}
{{--            $(document).ready(function () {--}}
{{--                let currentSortBy = '';--}}
{{--                let currentSortDir = 'asc';--}}

{{--                function loadProducts(params = {}) {--}}
{{--                    $('#table-container').html('<div class="text-center my-3"><div class="spinner-border"></div></div>');--}}

{{--                    $.get("{{ route('products.index') }}", params, function(response) {--}}
{{--                        $('#table-container').html(response);--}}
{{--                    });--}}
{{--                }--}}

{{--                function reloadProducts() {--}}
{{--                    loadProducts({--}}
{{--                        search: $('#search').val(),--}}
{{--                        per_page: $('#per_page').val(),--}}
{{--                        sort_by: currentSortBy,--}}
{{--                        sort_dir: currentSortDir--}}
{{--                    });--}}
{{--                }--}}

{{--                $('#search').on('keyup', function() {--}}
{{--                    reloadProducts();--}}
{{--                });--}}

{{--                $('#per_page').on('change', function() {--}}
{{--                    reloadProducts();--}}
{{--                });--}}

{{--                $('#btn_reload').on('click', function () {--}}
{{--                    // Reset các input về mặc định--}}
{{--                    $('#search').val('');--}}
{{--                    $('#per_page').val('5'); // hoặc giá trị mặc định bạn dùng--}}

{{--                    // Reset sort nếu có--}}
{{--                    currentSortBy = '';--}}
{{--                    currentSortDir = 'asc';--}}

{{--                    // Gọi lại AJAX để load bảng--}}
{{--                    reloadProducts();--}}
{{--                });--}}


{{--                $(document).on('click', '.pagination a, .sort-link', function(e) {--}}
{{--                    e.preventDefault();--}}

{{--                    if ($(this).hasClass('sort-link')) {--}}
{{--                        const sortField = $(this).data('sort');--}}
{{--                        if (currentSortBy === sortField) {--}}
{{--                            currentSortDir = currentSortDir === 'asc' ? 'desc' : 'asc';--}}
{{--                        } else {--}}
{{--                            currentSortBy = sortField;--}}
{{--                            currentSortDir = 'asc';--}}
{{--                        }--}}
{{--                        reloadProducts();--}}
{{--                    } else {--}}
{{--                        const url = $(this).attr('href');--}}
{{--                        $.get(url, function(response) {--}}
{{--                            $('#table-container').html(response);--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--        </script> <!-- JQuery cho các tính năng giống của DataTables -->--}}

        <script>
            let filters = {};
            let globalSearch = '';
            let sortBy = 'id';
            let sortDir = 'desc';
            // let perPage = $('#per_page').val();

            function fetchData(page = 1) {
                const params = {
                    ...filters,
                    search: globalSearch,
                    sort_by: sortBy,
                    sort_dir: sortDir,
                    per_page: $('#per_page').val(),
                    page: page
                };

                $.ajax({
                    url: '{{ route("products.index") }}',
                    type: 'GET',
                    data: params,
                    success: function (res) {
                        $('#table-body').html($(res).find('#table-body').html());
                        $('#pagination-links').html($(res).find('#pagination-links').html());

                        {{--const query = new URLSearchParams(params).toString();--}}
                        {{--history.pushState({}, '', '{{ route("products.index") }}?' + query);--}}

                        // Ẩn hoặc hiện phân trang tùy theo giá trị per_page
                        if ($('#per_page').val() === 'all') {
                            $('#pagination-links').hide();
                        } else {
                            $('#pagination-links').show();
                        }

                        updateSortIcons();
                        bindCheckboxEvents();
                        resetCheckboxState();
                    }
                });
            }

            $('#global-search').on('input', function () {
                globalSearch = $(this).val();
                fetchData();
            });

            $('.column-filter').on('input', function () {
                const name = $(this).data('name');
                filters[name] = $(this).val();
                fetchData();
            });

            $('#per_page').on('change', function () {
                perPage = $(this).val();
                fetchData();
            });

            $('#btn_reload').on('click', function () {
                filters = {};
                globalSearch = '';
                sortBy = 'id';
                sortDir = 'desc';
                perPage = $('#per_page').val(5);

                $('.column-filter').val('');
                $('#global-search').val('');
                fetchData();
            });

            $(document).on('click', '#pagination-links a', function (e) {
                e.preventDefault(); // chặn reload mặc định

                const url = $(this).attr('href');
                const page = new URLSearchParams(url.split('?')[1]).get('page');

                fetchData(page); // gọi lại AJAX
            });

            $('#productTable thead tr th[data-sort]').on('click', function () {
                const clicked = $(this).data('sort');
                if (sortBy === clicked) {
                    sortDir = sortDir === 'asc' ? 'desc' : 'asc';
                } else {
                    sortBy = clicked;
                    sortDir = 'asc';
                }
                fetchData();
            });

            function updateSortIcons() {
                $('.sort-icons span').removeClass('active');

                $(`.sort-link[data-sort="${sortBy}"] .sort-icons span`).each(function () {
                    const isAsc = $(this).text() === '▲';
                    const isDesc = $(this).text() === '▼';

                    if ((isAsc && sortDir === 'asc') || (isDesc && sortDir === 'desc')) {
                        $(this).addClass('active');
                    }
                });
            }

        </script>

    </body>

</html>
