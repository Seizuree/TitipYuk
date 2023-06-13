<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Snack',
            'Appetizer',
            'Sweets and desserts',
            'Drinks',
            'Fruits',
            'Vegetables',
            'Meat, Poultry, and Seafood',
            'Dairy products',
            'Meat',
            'Others'
        ];

        for ($i = 0; $i < count($categories); $i++) {
            DB::table('product_categories')->insert([
                'name' => $categories[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
