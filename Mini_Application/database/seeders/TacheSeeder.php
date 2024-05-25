<?php

namespace Database\Seeders;
use App\Models\Tache;
use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Employe::all()->each(function ($employe) {
            $employe->taches()->saveMany(Tache::factory(3)->make());
        });
    }
}
