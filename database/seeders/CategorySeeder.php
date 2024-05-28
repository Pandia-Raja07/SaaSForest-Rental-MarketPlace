<?php

namespace Database\Seeders;

use App\Models\Rent\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    protected $model = Category::class;

    public function run(): void
    {
        $faker = Faker::create();
        $numberOfCategories = 64;
        $categories = [];

        for ($i = 0; $i < $numberOfCategories; $i++) {
            $categories[] = [
                'name' => $faker->word,
                'icon' => $faker->randomElement(['icon1.png', 'icon2.png', 'icon3.png']), // Replace with your icon paths
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert the categories into the database
        DB::table('categories')->insert($categories);
    }
}
