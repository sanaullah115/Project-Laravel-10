<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
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
                'password' => '12345',
                'city_fk' => '1',
            ],
            [
                'name' => 'Aman',
                'email' => 'aman@gmail.com',
                'password' => '12345',
                'city_fk' => '2',
            ],
            [
                'name' => 'Bassit',
                'email' => 'Bassit@gmail.com',
                'password' => '12345',
                'city_fk' => '1',
            ],
            [
                'name' => 'Waqas',
                'email' => 'Waqas@gmail.com',
                'password' => '12345',
                'city_fk' => '2',
            ],
            [
                'name' => 'Numan',
                'email' => 'Numan@gmail.com',
                'password' => '12345',
                'city_fk' => '3',
            ],

        ]);


        $Student->each(function ($StudentRecord) {
            Student::create($StudentRecord);
        });
    }
}
