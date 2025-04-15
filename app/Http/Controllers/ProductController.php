<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('product_category', 'brand')->orderBy('id', 'desc')->get();
//        $products = Product::all();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        $brands = Brand::all();
        return view('backend.products.create', compact('productCategories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProduct = new Product();

        $newProduct->name = $request->input('name');
        $newProduct->status = $request->input('status');
        $newProduct->price = $request->input('price');
        $newProduct->category_id = $request->input('category_id');
        $newProduct->brand_id = $request->input('brand_id');
        $newProduct->description = $request->input('description');
        $newProduct->save();

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
        $editProduct = Product::with('brands', 'product_categories')->find($id);
        return view('backend.products.edit', compact('editProduct', 'productCategories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        $product_id = $_POST['product_id'];

        $editProduct = Product::find($id);

        $editProduct->name = $request->input('name');
        $editProduct->status = $request->input('status');
        $editProduct->price = $request->input('price');
        $editProduct->category_id = $request->input('category_id');
        $editProduct->brand_id = $request->input('brand_id');
        $editProduct->description = $request->input('description');

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
