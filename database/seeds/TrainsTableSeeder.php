<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'treno' => 'Frecciarossa',
                'partenza' => 'Firenze',
                'arrivo' => 'Bari',
                'orario_partenza' => 10.30,
                'orario_arrivo' => 12.30,
                'binario' => 7,
                'prezzo' => 40.50
            ],
            [
                'treno' => 'Frecciargento',
                'partenza' => 'Milano',
                'arrivo' => 'Bologna',
                'orario_partenza' => 08.30,
                'orario_arrivo' => 11.00,
                'binario' => 3,
                'prezzo' => 50.00
            ]
        ];
        foreach ($trains as $elem) {
            $newTrain = new Train();
            $newTrain->treno = $elem['treno'];
            $newTrain->partenza = $elem['partenza'];
            $newTrain->arrivo = $elem['arrivo'];
            $newTrain->orario_partenza = $elem['orario_partenza'];
            $newTrain->orario_arrivo = $elem['orario_arrivo'];
            $newTrain->binario= $elem['binario'];
            $newTrain->prezzo= $elem['prezzo'];
            $newTrain->save();
        }
    }
}
