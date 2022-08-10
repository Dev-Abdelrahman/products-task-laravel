<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'productID' => 'price_1LTzGnANAiagN9ILZ2DuCjgI',
            'name' => 'Product 1',
            'description' => 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.',
            'price' => 20,
            'image' => 'https://i.imgur.com/BzIoXyY.png',
            'active' => 1,
            'created_at' => now(),
        ]);

        DB::table('products')->insert([
            'productID' => 'price_1LVGsTANAiagN9IL90qxmPkG',
            'name' => 'Product 2',
            'description' => 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.',
            'price' => 15,
            'image' => 'https://i.imgur.com/Mmbp9Bj.png',
            'active' => 1,
            'created_at' => now(),
        ]);


        DB::table('products')->insert([
            'productID' => 'price_1LVGt9ANAiagN9IL4G4vi5e3',
            'name' => 'Product 3',
            'description' => 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.',
            'price' => 10,
            'image' => 'https://i.imgur.com/5FkfcTc.png',
            'active' => 1,
            'created_at' => now(),
        ]);
    }
}
