<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ['name' => 'Belize', 'code' => 'BLZ'],
            ['name' => 'Costa Rica', 'code' => 'CRI'],
            ['name' => 'El Salvador', 'code' => 'SLV'],
            ['name' => 'Guatemala', 'code' => 'GTM'],
            ['name' => 'Honduras', 'code' => 'HND'],
            ['name' => 'Nicaragua', 'code' => 'NIC'],
            ['name' => 'Panama', 'code' => 'PAN'],
        ];

        DB::table('countries')->insert($countries);
    }
}
