<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Model\Train;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train();

        $newTrain->azienda = $faker->randomElement(['Trenord','Trenitalia','Italo','Frecciarossa','Frecciabianca','Frecciargento']);
        $newTrain->stazione_partenza = $faker->city();
        $newTrain->stazione_arrivo = $faker->city();
        $newTrain->partenza = $faker->time();
        $newTrain->arrivo = $faker->time();
        $newTrain->codice = $faker->bothify('??###');
        $newTrain->carrozze = $faker->randomDigitNotNull();
        $newTrain->in_orario = $faker->boolean();
        $newTrain->cancellato = $faker->boolean();

        $newTrain->save();
    }
}