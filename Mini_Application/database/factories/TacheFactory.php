<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tache;

class TacheFactory extends Factory
{
    protected $model = Tache::class;

    public function definition()
    {
        return [
            'intituleTache' => $this->faker->sentence,
            'date_tache' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
