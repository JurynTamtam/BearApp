<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    public function run()
    {
        DB::table('carts')->insert([
            [
                'custom_name' => 'John Doe',
                'product' => 'assets/bears/cow.png',
                'price' => 674.00,
                'qty' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'custom_name' => 'Jane Smith',
                'product' => 'assets/bears/pig.png',
                'price' => 235.00,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'custom_name' => 'Alice Brown',
                'product' => 'assets/bears/panda.png',
                'price' => 249.00,
                'qty' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
