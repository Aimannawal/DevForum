<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Frontend']);
        Category::create(['name' => 'Backend']);
        Category::create(['name' => 'Full stack']);
        Category::create(['name' => 'Mobile']);
        Category::create(['name' => 'DevOps']);
        Category::create(['name' => 'AI/ML']);
    }
}
