<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productVariants = ProductVariant::all();
        return view('backend.product_variants.index', compact('productVariants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('backend.product_variants.create', compact('products', 'colors', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProductVariant = new ProductVariant();

        $newProductVariant->product_id = $request->get('product_id');
        $newProductVariant->color_id = $request->get('color_id');
        $newProductVariant->size_id = $request->get('size_id');
        $newProductVariant->quantity = $request->get('quantity');
        $newProductVariant->save();

        return redirect()->route('product_variants.index')->with('success', 'Product variant added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariant $productVariant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editProductVariant = ProductVariant::findOrFail($id);
        return view('backend.product_variants.edit', compact('editProductVariant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteProductVariant = ProductVariant::findOrFail($id);
        $deleteProductVariant->delete();
        return redirect()->route('product_variants.index')->with('success', 'Product variant deleted successfully');
    }
}
