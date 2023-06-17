<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name'=>$this->faker->sentence(),
            'product_description'=>$this->faker->realText($maxNbChars= 100),
            'product_price'=>$this->faker->numberBetween($min=100,$max=5000),
            'product_quantity'=>$this->faker->numberBetween($min=0,$max=99),
            'product_company'=>$this->faker->word(),
            'product_rates'=>$this->faker->numberBetween(0,5),
            'product_bonus'=>$this->faker->boolean(50),
            'product_discount'=>$this->faker->numberBetween(0,100),
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
