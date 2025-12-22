<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companyId = Company::query()->inRandomOrder()->value('id');

        return [
            // Attach to an existing company; CompanySeeder seeds the fixed names.
            'done'              => 0,
            'company_id'        =>  $companyId,
            'period'            =>  fake()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12]),
            'location'          =>  fake()->streetAddress(),
            'contact_information' => fake()->name() . ', ' . fake()->phoneNumber(),
            'fe6'               => fake()->randomElement([0,1,2,3,4,5,6,7,8,9,10]),
            'fe12'              => fake()->randomElement([0,1,2]),
            'comments'          => ''
        ];
    }
}
