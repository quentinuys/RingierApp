<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
                'title' => "CarOne",
                'slug' => "car_one",
                'description' => "A car",
                'date_online' => null,
                'date_offline' => null,
                'price' => 584.22,
                'currency_id' => 1,
                'category_id' => 1,
                'user_id' =>1
            ],
            [
                'title' => "CarTwo",
                'slug' => "car_two",
                'description' => "Another car",
                'date_online' => null,
                'date_offline' => null,
                'price' => 685.33,
                'currency_id' => 1,
                'category_id' => 1,
                'user_id' =>1
            ],
            [
                'title' => "CarThree",
                'slug' => "car_three",
                'description' => "Another car again",
                'date_online' => null,
                'date_offline' => null,
                'price' => 755.36,
                'currency_id' => 1,
                'category_id' => 1,
                'user_id' =>1
            ]
        );
    }
}
