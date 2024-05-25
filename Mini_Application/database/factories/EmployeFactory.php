<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employe;

class EmployeFactory extends Factory
{
    protected $model = Employe::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'company' => $this->faker->company,
            'salaire' => $this->faker->numberBetween(20000, 80000),
            'ville' => $this->faker->city,
        ];
    }
}
