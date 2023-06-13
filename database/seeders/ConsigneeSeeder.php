<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConsigneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('consignees')->insert([
            'name' => 'Wilbert',
            'phone_number' => '+62812345678',
            'email' => 'wilbert@gmail.com',
            'pass' => "wilbert123",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('consignees')->insert([
                'name' => $faker->name(),
                'phone_number' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail,
                'pass' => $faker->password(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
