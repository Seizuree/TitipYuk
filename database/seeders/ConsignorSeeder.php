<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ConsignorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('consignors')->insert([
            'name' => 'Brian',
            'phone_number' => '+62812345678',
            'email' => 'brian@gmail.com',
            'pass' => 'brian123',
            'address' => $faker->address(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('consignors')->insert([
                'name' => $faker->name(),
                'phone_number' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail,
                'pass' => $faker->password(),
                'address' => $faker->address(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
