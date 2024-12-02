<?php

namespace Database\Factories\Person;

use App\Models\Person\Gender;
use App\Models\Person\PersonType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'person_type_id' => PersonType::first(),
            'gender_id'      => Gender::first(),
            'name'           => fake()->name(),
            'alias'          => fake()->firstName(),
            'cpf_cnpj'       => fake()->numerify('###.###.###-##'),
            'rg_ie'          => fake()->numerify('###############'),
        ];
    }
}
