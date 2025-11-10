<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Brand::factory()->count(5)->create();

        Category::factory()->count(5)->create();

        Product::factory()->count(10)->create();

        $this->call([
            UserSeeder::class,
        ]);
    }
}
