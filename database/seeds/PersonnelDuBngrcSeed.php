<?php

use Illuminate\Database\Seeder;

class PersonnelDuBngrcSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'photo' => null, 'fonction' => 'Informaticien', 'nom_prenom' => 'Rahajanirainy Faniry', 'tel' => '034 97 794 34', 'tel2' => '033 81 845 20', 'email' => 'email@email.com', 'adresse' => 'ampefiloha', 'date_embauche' => '', 'statut_id' => null, 'latitude' => '', 'longitude' => '',],

        ];

        foreach ($items as $item) {
            \App\PersonnelDuBngrc::create($item);
        }
    }
}
