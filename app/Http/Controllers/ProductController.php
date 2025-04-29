<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $products = Product::with('productCategory', 'brand')->orderBy('id', 'desc')->get();

        $query = Product::query()->with(['productCategory', 'brand']); // eager load tránh N+1

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

        // 4. Sắp xếp
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

        // Xử lý sort
        if ($sortBy = $request->sort_by) {
            if (in_array($sortBy, ['id', 'name', 'price'])) {
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

        // 5. Phân trang
//        $perPage = $request->get('per_page', 5); // mặc định 10

//        if ($perPage == 'all') {
//            $products = $query->get(); // lấy tất cả, không phân trang
//        } else {
//            $products = $query->paginate((int) $perPage)->appends($request->query());
//        }
        $perPage = $request->per_page == 'all' ? null : (int) ($request->per_page ?? 5);
        $products = $perPage ? $query->paginate($perPage)->appends($request->query()) : $query->get();

        //

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
         $request->validate([
            'name' => 'required | unique:products',
            'price' => 'required | integer',
            'category_id' => 'required',
            'brand_id' => 'required',
            'thumbnail' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp,avif',
        ]);

        //Add thumbnail
        $path = $request->file('thumbnail')->store('images', 'public');
//        $extension = $request->file('thumbnail')->getClientOriginalExtension();

        $newProduct = new Product();

        $newProduct->name = $request->name;
        $newProduct->status = $request->status;
        $newProduct->price = $request->price;
        $newProduct->discount = $request->discount;
        $newProduct->category_id = $request->category_id;
        $newProduct->brand_id = $request->brand_id;
        $newProduct->description = $request->description;
        $newProduct->thumbnail = $path;
        $newProduct->save();

        //xu ly nhieu anh o day

        // => $images
//        foreach ($images as $image) {
//            $newProductImage =  new ProductImage();
//            $newProductImage->url = $image;
//            $newProductImage->product_id = $newProduct->id;
//
//        }

        if ($request->hasFile('gallery'))
        {
            foreach ($request->file('gallery') as $file){
                $path = $file->store('images/product_images', 'public');
                ProductImage::create([
                    'product_id' => $newProduct->id,
                    'image_path' => $path,
                ]);
            }
        }

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
        $editProduct = Product::with('productCategory', 'brand')->find($id);
        return view('admin.products.edit', compact('editProduct', 'productCategories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        $editProduct = Product::findOrFail($id);

        $editProduct->name = $request->input('name');
        $editProduct->status = $request->input('status');
        $editProduct->price = $request->input('price');
        $editProduct->discount  = $request->input('discount');
        $editProduct->category_id = $request->input('category_id');
        $editProduct->brand_id = $request->input('brand_id');
        $editProduct->description = $request->input('description');

        //Xóa ảnh thumbnail
        if ($request->hasFile('thumbnail')) {
            // Xóa ảnh cũ nếu có
            if ($editProduct->thumbnail && Storage::disk('public')->exists($editProduct->thumbnail)) {
                Storage::disk('public')->delete($editProduct->thumbnail);
            }

            // Lưu ảnh mới
            $path = $request->file('thumbnail')->store('images', 'public');
            $editProduct->thumbnail = $path;
        } elseif ($request->input('delete_old_thumbnail') == 1) {
            // Không có ảnh mới nhưng muốn xóa ảnh cũ
            if ($editProduct->thumbnail && Storage::disk('public')->exists($editProduct->thumbnail)) {
                Storage::disk('public')->delete($editProduct->thumbnail);
            }
            $editProduct->thumbnail = null;
        }

//        if ($request->hasFile('thumbnail')) {
//            // Xóa ảnh cũ nếu có
//            if ($editProduct->image_path && Storage::disk('public')->exists($editProduct->image_path)) {
//                Storage::disk('public')->delete($editProduct->image_path);
//            }
//
//            // Lưu ảnh mới
//            $path = $request->file('thumbnail')->store('images', 'public');
//            $editProduct->image_path = $path;
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
                $path = $file->store('product_images', 'public');

                ProductImage::create([
                    'product_id' => $editProduct->id,
                    'image_path' => $path
                ]);
            }
        }

        $editProduct->save();

        return redirect()->route('products.index')->with('success', 'The product has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        $product_id = $request->id;
        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();
        return redirect()->route('products.index')->with('success', 'The product has been deleted.');
    }

    public function massDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return redirect()->route('products.index')->with('error', 'Vui lòng chọn ít nhất một sản phẩm để xóa.');
        }

        Product::whereIn('id', $ids)->delete();

        return redirect()->route('products.index')->with('success', 'Đã xóa các sản phẩm đã chọn.');
    }

}
