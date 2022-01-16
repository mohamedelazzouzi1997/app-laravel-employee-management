<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       return [
            'registration_number' => $this->faker->numberBetween(),
            'fullname' => $this->faker->name(),
            'depart' => $this->faker->word(),
            'hire_date' => $this->faker->date(), // password
            'phone' =>  $this->faker->numberBetween(),
            'address' =>  $this->faker->address(),
            'city' =>  $this->faker->city(),

        ];
    }
}
