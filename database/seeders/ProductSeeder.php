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
        DB::table('products')->insert([
            [
            'name'=>'Sk house',
            "type"=>"colony",
            "price"=>"150000",
            "location"=>"thamel",
            "description"=>"small home suitabe for a single family",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fsamhouseplans.com%2Fproduct%2Fsmall-house-plans-22x20-feet-6-5x6-meter-pdf-plans%2F&psig=AOvVaw1OmCIIaJqbXeGkzNkJCJ3J&ust=1627984226461000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOjtxf6HkvICFQAAAAAdAAAAABAD",
            ],
            [
            'name'=>'kfc house',
            "type"=>"pizza hut",
            "price"=>"350000",
            "location"=>"chitwan",
            "description"=>"suitable for picnic",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fsamhouseplans.com%2Fproduct%2Fsmall-house-plans-22x20-feet-6-5x6-meter-pdf-plans%2F&psig=AOvVaw1OmCIIaJqbXeGkzNkJCJ3J&ust=1627984226461000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOjtxf6HkvICFQAAAAAdAAAAABAD",
            ],
            [
                'name'=>'Alpha house',
                "type"=>"Apartment",
                "price"=>"650000",
                "location"=>"pokhara",
                "description"=>"suitable for offices",
                "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fsamhouseplans.com%2Fproduct%2Fsmall-house-plans-22x20-feet-6-5x6-meter-pdf-plans%2F&psig=AOvVaw1OmCIIaJqbXeGkzNkJCJ3J&ust=1627984226461000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOjtxf6HkvICFQAAAAAdAAAAABAD",
            ],
            [
                'name'=>'purple home',
                "type"=>"flat",
                "price"=>"50000",
                "location"=>"Bhaktapur",
                "description"=>"three roomed flat",
                "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fsamhouseplans.com%2Fproduct%2Fsmall-house-plans-22x20-feet-6-5x6-meter-pdf-plans%2F&psig=AOvVaw1OmCIIaJqbXeGkzNkJCJ3J&ust=1627984226461000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOjtxf6HkvICFQAAAAAdAAAAABAD",
            ],
        ]);
    }
}
