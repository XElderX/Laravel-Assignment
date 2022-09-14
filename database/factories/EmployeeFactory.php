<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' =>$this->faker->name,
            'last_name' =>$this->faker->lastName,
            'company' =>Company::all()->random()->id,
            'email' =>$this->faker->email,
            'phone' =>$this->faker->phoneNumber,
            'age' =>$this->faker->numberBetween(18, 55),
            'salary' =>$this->faker->numberBetween(10000, 50000),
 
        ];
    }
}
