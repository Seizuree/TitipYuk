<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MarketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $market = [
            'Restaurant',
            'Grocery Store',
            'Minimarket',
            'Coffee Shop',
            'Cafe',
            'Others'
        ];

        for ($i = 0; $i < count($market); $i++) {
            DB::table('market_categories')->insert([
                'name' => $market[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
