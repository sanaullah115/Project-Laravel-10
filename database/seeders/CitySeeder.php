<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $City = collect([
            ['City_name' => 'Karachi'],
            ['City_name' => 'Lahore'],
            ['City_name' => 'Islamabad'],
            ['City_name' => 'Peshawer'],
            ['City_name' => 'Lahore'],
            ['City_name' => 'Karachi'],
            ['City_name' => 'Islamabad'],

        ]);

        $City->each(function ($sityrecord) {
            Cities::create($sityrecord);
        });
    }
}
