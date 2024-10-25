<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                
        $Student = collect([
            [
                'title' => 'Post title one',
                'slug' => 'Post title one',
                'customer_id' => '1',
            ],
            [
                'title' => 'Post title one',
                'slug' => 'Post title one',
                'customer_id' => '1',
            ],
            [
                'title' => 'Post title two',
                'slug' => 'Post title two',
                'customer_id' => '2',
            ],
            [
                'title' => 'Post title two',
                'slug' => 'Post title two',
                'customer_id' => '2',
            ],
            [
                'title' => 'Post title three',
                'slug' => 'Post title three',
                'customer_id' => '3',
            ],
            [
                'title' => 'Post title three',
                'slug' => 'Post title three',
                'customer_id' => '3',
            ],
            [
                'title' => 'Post title three',
                'slug' => 'Post title three',
                'customer_id' => '3',
            ],

        ]);


        $Student->each(function ($StudentRecord) {
            Post::create($StudentRecord);
        });
    }
}
