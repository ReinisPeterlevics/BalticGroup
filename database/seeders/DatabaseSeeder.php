<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    public $blogs = [
        '1' => [
            'title' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum description',
            'image' => 'vacation.jpeg',
        ],
        '2' => [
            'title' => 'Lorem Ipsum 2',
            'description' => 'Lorem Ipsum description 2',
            'image' => 'vacation.jpeg',
        ],
        '3' => [
            'title' => 'Lorem Ipsum 3',
            'description' => 'Lorem Ipsum description 3',
            'image' => 'vacation.jpeg',
        ],
        '4' => [
            'title' => 'Lorem Ipsum 4',
            'description' => 'Lorem Ipsum description 4',
            'image' => 'vacation.jpeg',
        ]
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        foreach ($this->blogs as $blog) {
            Blog::create($blog);
        }

    }
}
