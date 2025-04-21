<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Giày thể thao', 'Giày da', 'Giày boot', 'Giày lười', 'Giày sandal'];

        foreach ($categories as $category) {
            DB::table('product_categories')->insert([
                'name' => $category,
                'parent_id' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

