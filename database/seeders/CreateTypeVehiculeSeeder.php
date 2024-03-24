<?php

namespace Database\Seeders;

use App\Models\TypeVehicule;
use Illuminate\Database\Seeder;

class CreateTypeVehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $typeVhehicules = [
            ['id'=>1, "type"=>'Hilux',"consommation"=> 9,"indice"=>'km'],
            ['id'=>2, "type"=>'Landcruser', "consommation"=>6.5,"indice"=> 'km'],
            ['id'=>3, "type"=>'Howo',"consommation"=> 2.5,"indice"=> 'km'],
            ['id'=>4, "type"=>'TLB', "consommation"=>6,"indice"=> 'hr'],
            ['id'=>5, "type"=>'Pèle ', "consommation"=>20,"indice"=> 'hr'],
            ['id'=>7, "type"=>'Bobcat', "consommation"=>4,"indice"=> 'hr'],
            ['id'=>8, "type"=>'Camion Benne Souterraine', "consommation"=>35,"indice"=> 'hr'],
            ['id'=>9, "type"=>'Camion Benne Surface', "consommation"=>2,"indice"=> 'km'],
            ['id'=>10, "type"=>'Chargeuse Surface', "consommation"=>20,"indice"=> 'hr'],
            ['id'=>11, "type"=>'Chargeuse souterraine', "consommation"=>48,"indice"=> 'hr'],
            ['id'=>12, "type"=>'Normet,Utimec(Malaxeur,Transporteuse,Cell,Foreuse)', "consommation"=>6,"indice"=> 'hr'],
            ['id'=>13, "type"=>'Compacteur', "consommation"=>15,"indice"=> 'hr'],
            ['id'=>14, "type"=>'Buss 50 à 65 Passagers', "consommation"=>5,"indice"=> 'km'],
            ['id'=>15, "type"=>'Pic-Up (Masda,Isuzu,Forder,)', "consommation"=>6.5,"indice"=> 'km'],
            ['id'=>16, "type"=>'Grie 5 à 10 Tonnes ', "consommation"=>10,"indice"=> 'hr'],
            ['id'=>17, "type"=>'Grie 15 à 25 Tonnes ', "consommation"=>20,"indice"=> 'hr'],
            ['id'=>18, "type"=>'Grie 30 à 50 Tonnes ', "consommation"=>35,"indice"=> 'hr'],
            ['id'=>19, "type"=>'Camion Forage ', "consommation"=>20,"indice"=> 'hr'],
            ['id'=>20, "type"=>'Fut(Groupe,Autres)', "consommation"=>0, "indice"=>'ras']
        ];
        foreach($typeVhehicules as $typeVhehicule){
            TypeVehicule::create($typeVhehicule);
        }
        $this->command->info("Type Vehicule seeded!");
    }
}
