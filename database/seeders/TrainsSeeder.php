<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();

        $newTrain->azienda = '';
        $newTrain->stazione_partenza = '';
        $newTrain->stazione_arrivo = '';
        $newTrain->partenza = '';
        $newTrain->arrivo = '';
        $newTrain->codice = '';
        $newTrain->carrozze = '';
        $newTrain->in_orario = '';
        $newTrain->cancellato = '';

        $newTrain->save();
    }
}