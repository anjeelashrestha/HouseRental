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
        //
        DB::table('products')->insert(
            [
            'name'=>'homeforaday',
            "type"=>"home",
            "price"=>"250000",
            "location"=>"thamel",
            "description"=>"quiet home for small gatherings",
            "gallery"=>"https://static7.depositphotos.com/1066655/763/i/600/depositphotos_7637062-stock-photo-home-for-rent.jpg",
            
        ]);
    }
}
