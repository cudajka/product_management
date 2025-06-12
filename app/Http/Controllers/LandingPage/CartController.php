<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Overtrue\LaravelShoppingCart\Facade as Cart;

class CartController extends Controller
{
    public function add(Request $request){
        $item = Cart::add([
            'id'       => $request->product_id,
            'name'     => $request->name,
            'price'    => $request->price,
            'quantity' => 1,
            'attributes' => [
                'size'      => $request->size,
                'color'     => $request->color,
                'thumbnail' => $request->thumbnail,
            ],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Đã thêm vào giỏ hàng!',
            'cart' => Cart::content(),
            'count' => Cart::count(),
            'total' => Cart::total(),
        ]);
    }
}
