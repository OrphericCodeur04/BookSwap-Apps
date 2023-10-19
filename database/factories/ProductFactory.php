<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
    public function definition(): array
    {
       // $categories = collect(Category::pluck('id'));

        return [
           // 'category_id' => $categories->random(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(50),
            'color' => 'red'
        ];
    }
}
