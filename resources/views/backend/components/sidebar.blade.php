@section('sidebar')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('admin.index')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Quản lý sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('products.index')}}">
                            <i class="bi bi-circle"></i><span>Sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('product_categories.index')}}">
                            <i class="bi bi-circle"></i><span>Danh mục sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('brands.index')}}">
                            <i class="bi bi-circle"></i><span>Thương hiệu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('colors.index')}}">
                            <i class="bi bi-circle"></i><span>Màu sắc</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sizes.index')}}">
                            <i class="bi bi-circle"></i><span>Kích thước</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('product_variants.index')}}">
                            <i class="bi bi-circle"></i><span>Tồn</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

        </ul>

    </aside><!-- End Sidebar-->
@endsection
