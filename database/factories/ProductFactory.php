<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name' => 'Laptop Asus VivoBook 14 N4020/8GB/256GB/OPI/Win11',
            'price' => 4000000,
            'stock' => 99,
            'about' => 'Asus VivoBook 14 (A416MAO-FHD427) adalah laptop yang dirancang untuk menemani aktivitas komputasi Anda sehari-hari. Dengan desain Slate Grey yang elegan dan bobot ringan, laptop ini menawarkan kombinasi performa yang efisien dan portabilitas yang nyaman untuk Anda bawa ke mana saja.',
            'thumbnail' => '/asset/product.jpeg',
            'category_id' => 1,
            'brand_id' => 1,
        ];
    }
}
