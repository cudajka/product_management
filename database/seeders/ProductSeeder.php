<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Nike Air Max 90',
                'price' => 3200000,
                'discount' => 500000,
                'category_id' => 1, // Giày thể thao
                'brand_id' => 1,
                'description' => 'Nike Air Max 90 kết hợp thiết kế cổ điển với đệm Air êm ái, mang lại cảm giác thoải mái và phong cách năng động.',
                'status' => 1,
                'thumbnail' => 'images/products/nike-air-max-90.jpg',
            ],
            [
                'name' => 'Adidas Ultraboost 22',
                'price' => 3800000,
                'discount' => 600000,
                'category_id' => 1,
                'brand_id' => 2,
                'description' => 'Ultraboost 22 mang lại cảm giác đàn hồi cực tốt, lý tưởng cho chạy bộ và tập luyện hằng ngày.',
                'status' => 1,
                'thumbnail' => 'images/products/adidas-ultraboost-22.jpg',
            ],
            [
                'name' => 'Puma Suede Classic',
                'price' => 2100000,
                'discount' => null,
                'category_id' => 2, // Giày da
                'brand_id' => 3,
                'description' => 'Thiết kế retro cùng chất liệu da lộn mềm mại, Puma Suede Classic là lựa chọn tuyệt vời cho phong cách đường phố.',
                'status' => 1,
                'thumbnail' => 'images/products/puma-suede-classic.jpg',
            ],
            [
                'name' => 'Converse Chuck Taylor All Star',
                'price' => 1600000,
                'discount' => 200000,
                'category_id' => 1,
                'brand_id' => 4,
                'description' => 'Giày vải kinh điển với thiết kế không bao giờ lỗi mốt, phù hợp cho mọi phong cách.',
                'status' => 1,
                'thumbnail' => 'images/products/converse-chuck-taylor.jpg',
            ],
            [
                'name' => 'Vans Old Skool',
                'price' => 1800000,
                'discount' => 300000,
                'category_id' => 1,
                'brand_id' => 5,
                'description' => 'Biểu tượng của văn hóa trượt ván với đường sọc trắng đặc trưng, Vans Old Skool là must-have cho giới trẻ.',
                'status' => 1,
                'thumbnail' => 'images/products/vans-old-skool.jpg',
            ],
            [
                'name' => 'Nike Air Force 1',
                'price' => 2900000,
                'discount' => 400000,
                'category_id' => 1,
                'brand_id' => 1,
                'description' => 'Nike Air Force 1 là biểu tượng thời trang với thiết kế cổ điển, đế giày dày êm ái và phù hợp cho mọi hoàn cảnh.',
                'status' => 1,
                'thumbnail' => 'images/products/nike-air-force-1.jpg',
            ],
            [
                'name' => 'Adidas Stan Smith',
                'price' => 2500000,
                'discount' => 300000,
                'category_id' => 2,
                'brand_id' => 2,
                'description' => 'Giày da trắng cổ điển với logo xanh lá phía sau gót, Stan Smith là lựa chọn lý tưởng cho phong cách tối giản.',
                'status' => 1,
                'thumbnail' => 'images/products/adidas-stan-smith.jpg',
            ],
            [
                'name' => 'Puma RS-X',
                'price' => 2800000,
                'discount' => 500000,
                'category_id' => 1,
                'brand_id' => 3,
                'description' => 'Puma RS-X mang phong cách chunky hiện đại, phù hợp với xu hướng giày "dad shoes" hiện nay.',
                'status' => 1,
                'thumbnail' => 'images/products/puma-rs-x.jpg',
            ],
            [
                'name' => 'Converse Run Star Hike',
                'price' => 2700000,
                'discount' => null,
                'category_id' => 1,
                'brand_id' => 4,
                'description' => 'Mẫu giày cải tiến của Converse với đế răng cưa độc đáo, tạo nên sự khác biệt trong phong cách.',
                'status' => 1,
                'thumbnail' => 'images/products/converse-run-star-hike.jpg',
            ],
            [
                'name' => 'Vans Slip-On Checkerboard',
                'price' => 1600000,
                'discount' => 150000,
                'category_id' => 4, // Giày lười
                'brand_id' => 5,
                'description' => 'Thiết kế kẻ caro đen trắng đặc trưng, giày lười Vans Slip-On là biểu tượng của văn hóa trượt ván.',
                'status' => 1,
                'thumbnail' => 'images/products/vans-slip-on-checkerboard.jpg',
            ],
            [
                'name' => 'Nike ZoomX Vaporfly Next%',
                'price' => 5200000,
                'discount' => 800000,
                'category_id' => 1,
                'brand_id' => 1,
                'description' => 'Giày chạy bộ cao cấp với đế carbon và đệm ZoomX, tối ưu hóa hiệu suất cho vận động viên chuyên nghiệp.',
                'status' => 1,
                'thumbnail' => 'images/products/nike-zoomx-vaporfly.jpg',
            ],
            [
                'name' => 'Adidas NMD R1',
                'price' => 3100000,
                'discount' => 400000,
                'category_id' => 1,
                'brand_id' => 2,
                'description' => 'NMD R1 kết hợp phong cách đường phố hiện đại và công nghệ Boost êm ái cho cả ngày năng động.',
                'status' => 1,
                'thumbnail' => 'images/products/adidas-nmd-r1.jpg',
            ],
            [
                'name' => 'Puma Future Rider',
                'price' => 2200000,
                'discount' => null,
                'category_id' => 1,
                'brand_id' => 3,
                'description' => 'Thiết kế retro phối màu sặc sỡ, Puma Future Rider là mẫu giày nổi bật cho outfit đường phố.',
                'status' => 1,
                'thumbnail' => 'images/products/puma-future-rider.jpg',
            ],
            [
                'name' => 'Converse Chuck 70 Vintage',
                'price' => 1900000,
                'discount' => 200000,
                'category_id' => 2, // Giày da/vải
                'brand_id' => 4,
                'description' => 'Bản nâng cấp của Chuck Taylor với chất liệu tốt hơn và đường may cổ điển mang lại cảm giác hoài niệm.',
                'status' => 1,
                'thumbnail' => 'images/products/converse-chuck-70.jpg',
            ],
            [
                'name' => 'Vans Sk8-Hi',
                'price' => 2100000,
                'discount' => 250000,
                'category_id' => 1,
                'brand_id' => 5,
                'description' => 'Giày cổ cao huyền thoại của Vans, lý tưởng cho phong cách streetwear mạnh mẽ.',
                'status' => 1,
                'thumbnail' => 'images/products/vans-sk8-hi.jpg',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert(array_merge($product, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
