<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++ ){
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(["Trenitalia", "Italo", "Deutsche Bahn", "SNCF", "Renfe", "Eurostar", "Amtrak", "JR East", "NS", "SBB", "ÖBB", "RZD", "Thalys", "Virgin Trains", "Caltrain", "VIA Rail", "VR", "TGV", "AVE", "SJ"]);
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->numberBetween(1,999);
            $newTrain->numero_carrozze = $faker->numberBetween(1,20);
            $newTrain->in_orario = $faker->randomElement([true, false]);
            $newTrain->cancellato = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
