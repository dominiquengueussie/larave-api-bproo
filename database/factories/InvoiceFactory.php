<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = $this->faker->randomElement(['Billed', 'Paid', 'Cancel']);
        
        return [
            'amount' => $this->faker->numberBetween(100, 1000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status == 'Paid' ? $this->faker->dateTimeThisDecade() : null,
            'customer_id' => Customer::factory()
        ];
    }
}