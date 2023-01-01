<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['P', 'B', 'V']);
        $billed_date = $this->faker->dateTimeThisDecade();
        $paid_date = $status=='P'?$this->faker->dateTimeThisDecade():NULL;
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 1000),
            'status' => $status,
            'billed_date' => $billed_date,
            'paid_date' => $paid_date,
        ];
    }
}
