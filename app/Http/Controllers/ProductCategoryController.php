<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::with('parent')->get();
        return view('backend.product_categories.index', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('backend.product_categories.create', compact('productCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProductCategory = new ProductCategory();
        $newProductCategory->name = $request->name;
        $newProductCategory->parent_id = $request->parent_id;
        $newProductCategory->save();

        return redirect()->route('product_categories.index')->with('success', 'The product category has been created.');
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
        $productCategories = ProductCategory::all();
        $editProductCategory = ProductCategory::findOrFail($id);
        return view('backend.product_categories.edit', compact('productCategories', 'editProductCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editProductCategory = ProductCategory::findOrFail($id);
        $editProductCategory->name = $request->name;
        $editProductCategory->parent_id = $request->parent_id;
        $editProductCategory->save();
        return redirect()->route('product_categories.index')->with('success', 'The product category has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteProductCategory = ProductCategory::findOrFail($id);
        $deleteProductCategory->delete();
        return redirect()->route('product_categories.index')->with('success', 'The product category has been deleted.');
    }
}
