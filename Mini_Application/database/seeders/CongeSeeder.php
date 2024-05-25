<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conge;
use App\Models\Employe;
class CongeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::all()->each(function ($employe) {
            $employe->conges()->saveMany(Conge::factory(5)->make());
        });
    }
}
