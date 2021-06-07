<?php

namespace Database\Factories;

use App\Models\Burger;
use Illuminate\Database\Eloquent\Factories\Factory;

class BurgerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Burger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'size' => $this->faker->randomElement(['SMALL' , 'MEDIUM' , 'LARGE']),
            'description' => $this->faker->sentences('3', true),
            'price' => $this->faker->randomDigit(),
        ];
    }
}
