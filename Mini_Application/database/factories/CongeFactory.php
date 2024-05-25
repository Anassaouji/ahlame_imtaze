<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conge;

class CongeFactory extends Factory
{
    protected $model = Conge::class;

    public function definition()
    {
        return [
            'date_debut' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'date_fin' => $this->faker->dateTimeBetween('now', '+1 year'),
            'motif' => $this->faker->text(50),
        ];
    }
}
