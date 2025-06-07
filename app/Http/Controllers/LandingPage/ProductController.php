<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with(['productCategory', 'brand', 'sizes', 'images'])->orderBy('group')->latest()->paginate(12);
        return view('landing_page.products.index', compact('products'));
    }

    public function show($id){
        $product = Product::with(['productCategory', 'brand', 'sizes', 'images'])->where('id', $id)->firstOrFail();
        $variants = $product->variants()->with('size')->get(); // product_variants with sizes
        $relatedProducts = Product::where('group', $product->group)->get();

        $groupedImages = $product->images;

//        dd($relatedProducts);

        return view('landing_page.products.show', compact('product', 'variants', 'relatedProducts', 'groupedImages'));
    }
}
