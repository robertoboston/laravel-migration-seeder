<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class SeederTrainTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newTrain=new Train();
            $newTrain->azienda=$faker->word();
            $newTrain->stazione_di_partenza=$faker->word();
            $newTrain->stazione_di_arrivo=$faker->word();
            $newTrain->orario_di_partenza=$faker->time('H:i');
            $newTrain->orario_di_arrivo=$faker->time('H:i');
            $newTrain->codice_treno=$faker->lexify('ct-????');
            $newTrain->numero_carrozze=$faker->randomNumber(3,true);
            $newTrain->in_orario=$faker->boolean();
            $newTrain->cancellato=$faker->boolean();

            $newTrain->save();


        };
    }
}
