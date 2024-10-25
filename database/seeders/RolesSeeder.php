<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                
        $Student = collect([
            [
                'name' => 'Admin',

            ],
            [
                'name' => 'User',
            ],
        

        ]);


        $Student->each(function ($StudentRecord) {
            Roles::create($StudentRecord);
        });
    }
}
