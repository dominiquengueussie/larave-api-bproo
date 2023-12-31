<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $type = $this->faker->randomElement(['individual', 'company']);
        $name = $type == 'individual' ? $this->faker->name() : $this->faker->company();
        return [
                'name' => $name,
                'type' => $type,
                'adresse' => $this->faker->streetAddress(),
                'city'    => $this->faker->city(),
                'postal_code' =>$this->faker->postcode()
        ];
    }
}