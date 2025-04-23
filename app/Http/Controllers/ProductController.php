<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('productCategory', 'brand')->orderBy('id', 'desc')->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $productCategories = ProductCategory::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('productCategories', 'brands'));
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
}
