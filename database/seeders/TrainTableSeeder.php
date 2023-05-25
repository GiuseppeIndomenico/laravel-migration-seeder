<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Carbon\Carbon;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $currentYear = Carbon::now()->year;

        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->stazione_di_partenza = $faker->city;
            $newTrain->Stazione_di_arrivo = $faker->city;
            $newTrain->giorno_partenza = $faker->dateTimeBetween("$currentYear-01-01", '+1 year')->format('Y-m-d');
            $newTrain->orario_di_partenza = $faker->time;
            $newTrain->orario_di_arrivo = $faker->time;
            $newTrain->codice_treno = $faker->unique()->numberBetween(1000, 9999);
            $newTrain->Numero_carrozze = $faker->numberBetween(1, 10);
            $newTrain->in_orario = $faker->boolean;
            $newTrain->cancellato = $faker->boolean;
            $newTrain->save();
        }
    }
}