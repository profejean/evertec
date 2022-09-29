<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'customer_email' => $this->faker->email,
            'customer_mobile' => $this->faker->numberBetween($min = 1000000, $max = 9000000),
            'status' => $this->faker->randomElement($array = array ('CREATED','PAYED','REJECTED')),
            'product_id' => $this->faker->numberBetween($min = 1, $max = 100),
            
        ];
    }
}
