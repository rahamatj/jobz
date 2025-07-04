<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\JobListing;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(20)->create([
            'display_order' => 1,
        ]);

        Category::factory(20)->create([
            'display_order' => 2,
        ]);

        Category::factory(20)->create([
            'display_order' => 3,
        ]);

        $categories = Category::all();

        $categories->each(function (Category $category) {
            JobListing::factory(20)->create(['category_id' => $category->id]);
        });
    }
}
