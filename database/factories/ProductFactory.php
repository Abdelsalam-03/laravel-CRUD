<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $count = -1;
        $categories = [];
        foreach(DB::table('categories')->select('id')->get() as $id_result_set){
            $categories[++$count] = $id_result_set->id;
        }
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(1, 99999),
            'category_id' => $categories[rand(0, $count)]
        ];
    }
}
