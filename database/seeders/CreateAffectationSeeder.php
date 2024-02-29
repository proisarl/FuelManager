<?php

namespace Database\Seeders;

use App\Models\Affectation;
use Illuminate\Database\Seeder;

class CreateAffectationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $affectations = [
            // ["user_id"=>1,"poste_id"=>1]
            ["user_id"=>2,"poste_id"=>1],
            ["user_id"=>3,"poste_id"=>2],
            ["user_id"=>4,"poste_id"=>3],
            ["user_id"=>5,"poste_id"=>4],
            ["user_id"=>6,"poste_id"=>1],
            ["user_id"=>7,"poste_id"=>2],
            ["user_id"=>8,"poste_id"=>3],
            ["user_id"=>9,"poste_id"=>4]
        ];
        foreach($affectations as $affectation){
            Affectation::create($affectation);
        }
        $this->command->info("Affectation seeded!");
    }
}
