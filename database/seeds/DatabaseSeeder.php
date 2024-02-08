<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'uuid' => Str::uuid(36),
                'name' => 'Laptop',
                'description' => 'HP Laptop 4GB RAM Core i3 7th Gen',
                'price' => '42000',
                'status' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'uuid' => Str::uuid(36),
                'name' => 'Mobile',
                'description' => 'Samsung M31 6GB Ram with 128GB inbuilt memory',
                'price' => '14000',
                'status' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'uuid' => Str::uuid(36),
                'name' => 'TV',
                'description' => 'LG 32 inches Smart TV',
                'price' => '32000',
                'status' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'uuid' => Str::uuid(36),
                'name' => 'Fridge',
                'description' => 'Samsung 5 star with smart invertor Refrigerator',
                'price' => '16000',
                'status' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'uuid' => Str::uuid(36),
                'name' => 'Washing Machine',
                'description' => 'Whirlpool 7KG washing machine with Quick Wash',
                'price' => '22000',
                'status' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ],
            [
                'uuid' => Str::uuid(36),
                'name' => 'Food Processor',
                'description' => 'Preethi Zodiac Food Processor with Juicer',
                'price' => '6500',
                'status' => 1,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]
        ]);
    }
}
