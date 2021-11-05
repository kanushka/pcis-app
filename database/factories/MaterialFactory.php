<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $unit = "1kg";
        switch ($this->faker->randomDigit()) {
            case 0:
            case 1:
                $unit = "1 packet";
                break;
            case 2:
            case 3:
                $unit = "1 bar";
                break;
            case 4:
                $unit = "1 l";
                break;
            case 5:
            case 6:
                $unit = "1 m";
                break;
            default:
            $unit = "1kg";
                break;
        }

        return [
            'name' => $this->faker->word(),
            'unit' => $unit,
            'unit_price' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
