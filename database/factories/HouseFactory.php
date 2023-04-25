<?php

namespace Database\Factories;

class HouseFactory
{
    public function definition(): array
    {
        return [
            'name' => fake()->address,
        ];
    }
}
