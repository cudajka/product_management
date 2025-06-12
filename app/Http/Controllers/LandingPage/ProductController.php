<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Overtrue\LaravelShoppingCart\Facade as Cart;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['productCategory', 'brand', 'sizes', 'images']);
        if ($request->price) {
            $priceParts = explode('-', $request->price);
            $min = isset($priceParts[0]) ? (int)$priceParts[0] : 0;
            $max = isset($priceParts[1]) ? (int)$priceParts[1] : 100000000; // hoặc giá trị max hợp lý

            $query->whereBetween('price', [$min, $max]);
        }
        if ($request->sizes) {
            $sizeFilter = Size::where('number', $request->sizes)->first(); // Todo su dung whereIn, biến này cần trả về 1 mảng id của Size
            $query->join('product_variants as pv', 'pv.product_id', '=', 'products.id')
                ->join('sizes', 'sizes.id', '=', 'pv.size_id')
                ->where('pv.size_id', $sizeFilter->id) // Todo su dung whereIn
                ->where('pv.quantity', '>', 0)
                ->select('products.*');
        }
        if ($request->colors) {
            $colorIDs = Color::whereIn('code', $request->colors)->pluck('id')->toArray();
            $query->whereIn('color_id', $colorIDs);
        }
        if ($request->brands) {
            $query->whereIn('brand_id', $request->brands);
        }

        $priceRanges = [
            'all' => 'Tất cả',
            '0-500000' => 'Dưới 500K',
            '500000-1000000' => '500K - 1 triệu',
            '1000000-2000000' => '1 triệu - 2 triệu',
            '2000000-10000000' => 'Trên 2 triệu'
        ];

        // Xử lý sắp xếp
        switch ($request->sort) {
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->latest(); // hoặc orderBy('created_at', 'desc');
                break;
        }

        $products = $query->orderBy('group')->latest()->paginate(12);
        $sizes = Size::all();
        $colors = Color::all();
        $brands = Brand::all();
        return view('landing_page.products.index', compact('products', 'priceRanges', 'sizes', 'colors', 'brands'));
    }

    public function show($id)
    {
        $product = Product::with(['productCategory', 'brand', 'sizes', 'images'])->where('id', $id)->firstOrFail();
        $variants = $product->variants()->with('size')->get(); // product_variants with sizes
//        dd($variants);
        $relatedProducts = Product::where('group', $product->group)->get();

        $groupedImages = $product->images;

//        dd($relatedProducts);

        return view('landing_page.products.show', compact('product', 'variants', 'relatedProducts', 'groupedImages'));
    }

    public function addToCart(Request $request)
    {
//        dd($request->quantity);
//        Cart::add([
//            'id'       => $request->product_id,
//            'name'     => $request->name,
//            'price'    => $request->price,
//            'quantity' => $request->quantity,
//            'attributes' => [
//                'size'      => $request->size,
//                'color'     => $request->color,
//                'thumbnail' => $request->thumbnail,
//            ],
//        ]);
        $color = Color::find($request->color_id);
        Cart::add($request->product_id, $request->name, $request->quantity, $request->price, ['color' => $color->name, 'size' => 35]);

        return response()->json([
            'success' => true,
            'message' => 'Thêm vào giỏ hàng thành công!',
            'cartCount' => Cart::count(),
            'cartTotal' => Cart::total(),
        ]);
    }

    public function getCart()
    {
        return Cart::all();
    }
}
