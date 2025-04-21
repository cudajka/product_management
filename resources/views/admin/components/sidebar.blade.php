@section('sidebar')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('admin.index')}}">
                    <i class="bx bxs-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-heading">Bán hàng</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxl-product-hunt"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="products-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/products*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('products.index')}}">
                            <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('products.create')}}">
                            <i class="bi bi-circle"></i><span>Thêm mới</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Products Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#categories-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-category"></i><span>Thể loại sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="categories-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/product_categories*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('product_categories.index')}}">
                            <i class="bi bi-circle"></i><span>Danh sách thể loại sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('product_categories.create')}}">
                            <i class="bi bi-circle"></i><span>Thêm mới</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Product Categories Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#brands-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-store"></i><span>Thương hiệu</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="brands-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/brands*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('brands.index')}}">
                            <i class="bi bi-circle"></i><span>Danh sách thương hiệu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('brands.create')}}">
                            <i class="bi bi-circle"></i><span>Thêm mới</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Brands Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#colors-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-color-fill"></i><span>Màu sắc</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="colors-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/colors*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('colors.index')}}">
                            <i class="bi bi-circle"></i><span>Danh sách màu sắc</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('colors.create')}}">
                            <i class="bi bi-circle"></i><span>Thêm mới</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Colors Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#sizes-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-ruler"></i><span>Kích thước</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="sizes-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/sizes*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('sizes.index')}}">
                            <i class="bi bi-circle"></i><span>Danh sách kích thước</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sizes.create')}}">
                            <i class="bi bi-circle"></i><span>Thêm mới</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Sizes Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#product-variants-nav" data-bs-toggle="collapse" href="#">
                    <i class="bx bxs-box"></i><span>Tồn hàng</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="product-variants-nav" class="nav-content collapse {{ (request()->is('admin/products-manager/sizes*')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('product_variants.index')}}">
                            <i class="bi bi-circle"></i><span>Danh sách tồn hàng</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('product_variants.create')}}">
                            <i class="bi bi-circle"></i><span>Thêm mới</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Product Variants Nav -->
            <li class="nav-heading">Bài viết</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                    <i class="bi bi-journal-text"></i><span>Bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Form Layouts</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <i class="bi bi-circle"></i><span>Form Editors</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html">
                            <i class="bi bi-circle"></i><span>Form Validation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
                    <i class="bi bi-journal-text"></i><span>Thể loại bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="posts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Form Layouts</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <i class="bi bi-circle"></i><span>Form Editors</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html">
                            <i class="bi bi-circle"></i><span>Form Validation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-heading">Cấu hình website</li>
            <li class="nav-item">
                <a class="nav-link " href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->
@endsection
