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
        
        DB::table("products")->insert([
            [
                "name"=>"Tanker",
                "price"=>"Rs 2100",
                "description"=>"A clean water supply for your home purpose, 12000 Liter",
                "category"=>"12000 Liter",
                "gallery"=>"https://www.snype.tk/p1.jpg",
               
    
            ],
            [
                "name"=>"Tanker",
                "price"=>"Rs 1600",
                "description"=>"A clean water supply for your home purpose, 7000 Liter",
                "category"=>"7000 Liter",
                "gallery"=>"https://www.snype.tk/p2.jpg",
               
    
            ],
            [
                "name"=>"Tanker",
                "price"=>"Rs 1400",
                "description"=>"A clean water supply for your home purpose, 5000 Liter",
                "category"=>"5000 Liter",
                "gallery"=>"https://www.snype.tk/p3.jpg",
               
    
            ],
            [
                "name"=>"Tanker",
                "price"=>"Rs 1600",
                "description"=>"A clean water supply for your home purpose, 7000 Liter",
                "category"=>"7000 Liter",
                "gallery"=>"https://www.snype.tk/p4.jpg",
               
    
            ]
        
        ]);
    }
    
}
