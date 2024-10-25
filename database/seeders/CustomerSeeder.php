<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                
        $Student = collect([
            [
                'name' => 'ali',
                'email' => 'ali@gmail.com',

            ],
            [
                'name' => 'Aman',
                'email' => 'aman@gmail.com',

            ],
            [
                'name' => 'Bassit',
                'email' => 'Bassit@gmail.com',
            ],
            [
                'name' => 'Waqas',
                'email' => 'Waqas@gmail.com',

            ],
            [
                'name' => 'numan',
                'email' => 'numan@gmail.com',
            ],

        ]);


        $Student->each(function ($StudentRecord) {
            Customer::create($StudentRecord);
        });
    }
}
