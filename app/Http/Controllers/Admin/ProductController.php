<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $products = Product::with('productCategory', 'brand')->orderBy('id', 'desc')->get();

        $query = Product::query()->with(['productCategory', 'brand']);

//        // 1. Tìm kiếm theo tên sản phẩm
//        if ($request->filled('search')) {
//            $query->where('name', 'like', '%' . $request->search . '%');
//        }
//
//        // 2. Tìm kiếm thêm theo danh mục (theo tên danh mục)
//        if ($request->filled('search')) {
//            $query->whereHas('productCategory', function($q) use ($request) {
//                $q->where('name', 'like', '%' . $request->search . '%');
//            });
//        }
//
//        // 3. Tìm kiếm thêm theo thương hiệu (theo tên thương hiệu)
//        if ($request->filled('search')) {
//            $query->whereHas('brand', function($q) use ($request) {
//                $q->where('name', 'like', '%' . $request->search . '%');
//            });
//        }
//
//        //  4. Sắp xếp
//        $sortBy = $request->get('sort_by', 'created_at');
//        $sortDir = $request->get('sort_dir', 'desc');
//
//        if (in_array($sortBy, ['name', 'price', 'created_at'])) {
//            $query->orderBy($sortBy, $sortDir);
//        } elseif ($sortBy == 'productCategory') {
//            $query->join('product_categories', 'products.category_id', '=', 'product_categories.id')
//                ->orderBy('product_categories.name', $sortDir)
//                ->select('products.*'); // nhớ select lại products.*
//        } elseif ($sortBy == 'brand') {
//            $query->join('brands', 'products.brand_id', '=', 'brands.id')
//                ->orderBy('brands.name', $sortDir)
//                ->select('products.*');
//        }
//
//        //  5. Phân trang
//        $perPage = $request->get('per_page', 5); // mặc định 5
//
//        if ($perPage == 'all') {
//            $products = $query->get(); // lấy tất cả, không phân trang
//        } else {
//            $products = $query->paginate((int) $perPage)->appends($request->query());
//        }

        if ($request->filled('search')) {
            $keyword = $request->search;

            $query->where(function($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%') // Tên sản phẩm
                ->orWhereHas('productCategory', function($q2) use ($keyword) {
                    $q2->where('name', 'like', '%' . $keyword . '%'); // Tên danh mục
                })->orWhereHas('brand', function($q3) use ($keyword) {
                        $q3->where('name', 'like', '%' . $keyword . '%'); // Tên thương hiệu
                    });
            });
        }

        // Xử lý sort
        if ($sortBy = $request->sort_by) {
            if (in_array($sortBy, ['id', 'name', 'price', 'created_at'])) {
                $query->orderBy($sortBy, $request->sort_dir == 'desc' ? 'desc' : 'asc');
            } elseif ($sortBy == 'productCategory') {
                $query->join('product_categories', 'products.category_id', '=', 'product_categories.id')
                    ->orderBy('product_categories.name', $request->sort_dir == 'desc' ? 'desc' : 'asc')
                    ->select('products.*');
            } elseif ($sortBy == 'brand') {
                $query->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->orderBy('brands.name', $request->sort_dir == 'desc' ? 'desc' : 'asc')
                    ->select('products.*');
            }
        } else {
            $query->orderBy('id', 'desc');
        }

        // Xử lý Individual column searching text input
        if ($request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->price) {
            $query->where('price', 'like', '%' . $request->price . '%');
        }

        if ($request->productCategory) {
            $query->whereHas('productCategory', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->productCategory . '%');
            });
        }

        if ($request->brand) {
            $query->whereHas('brand', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->brand . '%');
            });
        }

        if ($request->created_at) {
            $query->where('created_at', 'like', '%' . $request->created_at . '%');
        }

        // Xử lý số dòng trên 1 trang
        $perPage = $request->per_page == 'all' ? null : (int) ($request->per_page ?? 5);
//        $products = $perPage ? $query->paginate($perPage)->appends($request->query()) : $query->get();
        $products = $query->paginate($perPage)->withQueryString();

        // Xử lý load AJAX
        if ($request->ajax()) {
            return view('admin.products._table', compact('products'))->render();
        }

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $productCategories = ProductCategory::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('admin.products.create', compact('productCategories', 'brands', 'colors', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
//        dd($request->all());
         $request->validate([
            'name' => 'required | unique:products',
            'price' => 'required | integer',
            'category_id' => 'required',
            'brand_id' => 'required',
            'thumbnail' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp,avif',
//            'color_ids' => 'required|array',
//            'color_ids.*' => 'exists:colors,id',
        ]);

        $product = new Product();

        //Add thumbnail
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('images', 'public');
            $product->thumbnail = $path;
        }
//        $extension = $request->file('thumbnail')->getClientOriginalExtension();

        $product->name = $request->name;
        $product->status = $request->status;
        $product->group = $request->group;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->color_id = $request->color_id;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->description = $request->description;
        $product->save();

        //xu ly nhieu anh o day

        // => $images
//        foreach ($images as $image) {
//            $productImage =  new ProductImage();
//            $productImage->url = $image;
//            $productImage->product_id = $product->id;
//
//        }

        if ($request->hasFile('gallery'))
        {
            foreach ($request->file('gallery') as $file){
                $path = $file->store("images/product_images/{$product->id}", 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        // Lưu tồn kho theo size
        $quantities = $request->input('quantities', []);

        foreach ($quantities as $sizeId => $quantity) {
            $quantity = is_numeric($quantity) ? (int)$quantity : 0;

            // Luôn tạo bản ghi, kể cả quantity = 0
            $product->variants()->create([
                'size_id' => $sizeId,
                'quantity' => $quantity,
            ]);
        }

//        if ($request->color_galleries)
//        {
//            $data = [];
//
//            foreach ($request->color_galleries as $item){
//                $color_id = $item['color_id'];
////                ProductImage::create([
////                    'product_id' => $product->id,
////                    'image_path' => $path,
////                ]);
//                foreach ($item['images'] as $image){
//                    $path = $image->store("images/product_images/{$product->id}/color_$color_id", 'public');
//                    $data[] = [
//                        'product_id' => $product->id,
//                        'color_id' => $color_id,
//                        'image_path' => $path,
//                    ];
//                }
//            }
////            dd($data);
//            ProductImage::insert($data);
//        }

//        // Lưu ảnh theo màu
//        foreach ($request->color_ids as $index => $colorId) {
//            if ($request->hasFile("images.$index.files")) {
//                foreach ($request->file("images.$index.files") as $file) {
//                    $path = $file->store("images/product_images/{$product->id}/color_$colorId", 'public');
//
//                    ProductImage::create([
//                        'product_id' => $product->id,
//                        'color_id' => $colorId,
//                        'image_path' => $path,
//                    ]);
//                }
//            }
//        }

        return redirect()->route('products.index')->with('success', 'The product has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $product_id = $request->id;
        $productCategories = ProductCategory::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        $product = Product::with('productCategory', 'brand')->find($id);

        // Lấy tồn kho hiện tại dạng [size_id => quantity]
        $existingVariants = $product->variants->pluck('quantity', 'size_id')->toArray();

        $productImagesByColor = ProductImage::where('product_id', $product->id)
            ->get()
            ->groupBy('color_id')
            ->map(function ($images, $color_id) {
                return [
                    'color_id' => $color_id,
                    'images' => $images->map(function ($img) {
                        return [
                            'id' => $img->id,
                            'filename' => basename($img->image_path),
                            'url' => asset('storage/' . $img->image_path),
                        ];
                    })->toArray()
                ];
            })
            ->values()
            ->toArray();

        return view('admin.products.edit', compact('product', 'productCategories', 'brands', 'colors', 'sizes', 'existingVariants', 'productImagesByColor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
//        $product_id = $_POST['product_id'];
        $request->validate([
            'name' => 'required|unique:products,name,'.$id,
            'price' => 'required | integer',
            'category_id' => 'required',
            'brand_id' => 'required',
            'thumbnail' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp,avif',
            'delete_old_thumbnail' => 'nullable|boolean',
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->status = $request->input('status');
        $product->group = $request->input('group');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->color_id = $request->input('color_id');
        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');
        $product->description = $request->input('description');

        // Cập nhật tồn kho theo size
        $quantities = $request->input('quantities', []);

        foreach ($quantities as $sizeId => $quantity) {
            $quantity = (int) $quantity;

            // Kiểm tra nếu bản ghi đã tồn tại
            $variant = $product->variants()->where('size_id', $sizeId)->first();

            if ($variant) {
                // Cập nhật quantity dù là 0
                $variant->update(['quantity' => $quantity]);
            } else {
                // Tạo mới luôn, kể cả quantity = 0
                $product->variants()->create([
                    'size_id' => $sizeId,
                    'quantity' => $quantity,
                ]);
            }
        }

        //Xóa ảnh thumbnail
        if ($request->hasFile('thumbnail')) {
            // Xóa ảnh cũ nếu có
            if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
                Storage::disk('public')->delete($product->thumbnail);
            }

            // Lưu ảnh mới
            $path = $request->file('thumbnail')->store('images', 'public');
            $product->thumbnail = $path;
        } elseif ($request->input('delete_old_thumbnail') == 1) {
            // Không có ảnh mới nhưng muốn xóa ảnh cũ
            if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
                Storage::disk('public')->delete($product->thumbnail);
            }
            $product->thumbnail = null;
        }

//        if ($request->hasFile('thumbnail')) {
//            // Xóa ảnh cũ nếu có
//            if ($product->image_path && Storage::disk('public')->exists($product->image_path)) {
//                Storage::disk('public')->delete($product->image_path);
//            }
//
//            // Lưu ảnh mới
//            $path = $request->file('thumbnail')->store('images', 'public');
//            $product->image_path = $path;
//        }

        //Xóa thư viện ảnh

        // Xoá ảnh cũ nếu người dùng chọn xoá
        if ($request->filled('delete_old_images')) {
            $idsToDelete = json_decode($request->input('delete_old_images'), true);
            foreach ($idsToDelete as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image && Storage::disk('public')->exists($image->image_path)) {
                    Storage::disk('public')->delete($image->image_path);
                }
                ProductImage::destroy($imageId);
            }
        }

        // Thêm ảnh mới
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $path = $file->store("images/product_images/{$product->id}/", 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

//        if ($request->has('color_galleries')) {
//            foreach ($request->color_galleries as $productImagesByColor) {
//                $color_id = $productImagesByColor['color_id'];
//                $newImages = $productImagesByColor['images'] ?? [];
//
//                // 1. XÓA ẢNH ĐƯỢC NGƯỜI DÙNG ĐÁNH DẤU XÓA (nếu có)
//                $deletedIds = $productImagesByColor['deleted_ids'] ?? [];
//                if (!empty($deletedIds)) {
//                    ProductImage::whereIn('id', $deletedIds)->delete();
//                }
//
//                // 2. THÊM ẢNH MỚI (nếu có)
//                if (!empty($newImages)) {
//                    foreach ($newImages as $image) {
//                        $path = $image->store('images/product_images', 'public');
//                        ProductImage::create([
//                            'product_id' => $product->id,
//                            'color_id' => $color_id,
//                            'image_path' => $path,
//                        ]);
//                    }
//                }
//
//                // Không đụng gì thì KHÔNG XÓA và KHÔNG INSERT gì cả
//            }
//        }
        $product->save();

        return redirect()->route('products.index')->with('success', 'The product has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
//        $product_id = $request->id;
        $deleteProduct = Product::findOrFail($id);

        if ($deleteProduct->thumbnail && Storage::disk('public')->exists($deleteProduct->thumbnail)) {
            Storage::disk('public')->delete($deleteProduct->thumbnail);
        }

        foreach ($deleteProduct->images as $image) {
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
            $image->delete(); // xóa record khỏi DB
        }

        // 3. Xóa thư mục của sản phẩm luôn (nếu muốn gọn gàng)
        Storage::disk('public')->deleteDirectory("images/products_images/{$deleteProduct->id}");

        $deleteProduct->delete();
        return redirect()->route('products.index')->with('success', 'The product has been deleted.');
    }

    public function massDelete(Request $request): RedirectResponse
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return redirect()->route('products.index')->with('error', 'Vui lòng chọn ít nhất một sản phẩm để xóa.');
        }

        Product::whereIn('id', $ids)->delete();

        return redirect()->route('products.index')->with('success', 'Đã xóa các sản phẩm đã chọn.');
    }

}
