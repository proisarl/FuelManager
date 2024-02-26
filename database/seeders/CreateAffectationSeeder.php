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
            ["user_id"=>1,"poste_id"=>1]
        ];
        foreach($affectations as $affectation){
            Affectation::create($affectation);
        }
        $this->command->info("Affectation seeded!");
    }
}
