<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'name' => 'Blouses',
            ],
            [
                'name' => 'Trousers',
            ],
            [
                'name' => 'Shoes',
            ],
            [
                'name' => 'Shorts',
            ],
            [
                'name' => 'Dresses',
            ],
        ];

        Category::insert($categories);
    }
}
