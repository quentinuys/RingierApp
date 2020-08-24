<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => "South African Rand",
            'slug' => "ZAR"
        ],
        [
            'name' => "Unites States Dollar",
            'slug' => "USD"
        ]
    );
    }
}
