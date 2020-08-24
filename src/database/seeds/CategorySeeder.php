<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Furniture",
            'slug' => "furniture"
        ],
        [
            'name' => "Electronics",
            'slug' => "electronics"
        ],
        [
            'name' => "Cars",
            'slug' => "cars"
        ],
        [
            'name' => "Property",
            'slug' => "property"
        ]
    );
    }
}
