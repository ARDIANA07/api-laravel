<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class StudentFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => Arr::random(['Laki-laki', 'Perempuan']),
            'nis' => mt_rand(000001, 999999),
            'class_id' => Arr::random([3, 4, 5, 6])
        ];
    }
}