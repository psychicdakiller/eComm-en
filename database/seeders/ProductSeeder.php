<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
        	'name' => 'Panasonic TV',
        	'price' => '400',
        	'description' => 'Smart TV with much more features',
        	'category' => 'tv',
        	'gallery' => 'https://www.lg.com/hk/images/plp-b2c/z1-260.jpg',
        ],
        [
        	'name' => 'Soni TV',
        	'price' => '500',
        	'description' => 'Smart TV with much more features',
        	'category' => 'tv',
        	'gallery' => 'https://www.lg.com/hk/images/plp-b2c/z1-260.jpg',
        ],
        [
        	'name' => 'LG fridge',
        	'price' => '400',
        	'description' => 'Smart fridge with much more features',
        	'category' => 'fridge',
        	'gallery' => 'https://www.lg.com/us/images/RF/features/01_260_1_v1.jpg',
        ],
        ]);
    }
}
