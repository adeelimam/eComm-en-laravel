<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Apple iPhone 12 Pro Max',
            'price'=>'1399',
            'discription'=>'128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
            'category'=>'Mobile',
            'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-12-pro-max-1.jpg',
            
        ],

        [
            'name'=>'Samsung Galaxy M21 2021',
            'price'=>'1249',
            'discription'=>'64GB 4GB RAM, 128GB 6GB RAM',
            'category'=>'dryer',
            'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-m21-2021-1.jpg',
            
        ],
        [
            'name'=>'Samsung Galaxy F22',
            'price'=>'200',
            'discription'=>'128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
            'category'=>'washing machine',
            'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-f22-1.jpg',
            
        ],
        [
            'name'=>'Samsung Galaxy M32',
            'price'=>'300',
            'discription'=>'64GB 4GB RAM, 128GB 6GB RAM, 128GB 8GB RAM',
            'category'=>'fridge',
            'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-m32-1.jpg',
            
        ],
        [
            'name'=>'Samsung Galaxy A22 5G',
            'price'=>'265',
            'discription'=>'64GB 4GB RAM, 128GB 4GB RAM, 128GB 6GB RAM, 128GB 8GB RAM',
            'category'=>'tv',
            'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a22-5g-1.jpg',
            
        ]
        ]);
    }
}
