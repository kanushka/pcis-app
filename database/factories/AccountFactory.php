<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $company = $this->faker->company();
        return [
            'name' => $company . " Acc",
            'bank' => $company,
            'number' => $this->faker->numerify('####-####-####'),
        ];
    }
}
