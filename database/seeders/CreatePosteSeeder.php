<?php

namespace Database\Seeders;

use App\Models\Poste;
use Illuminate\Database\Seeder;

class CreatePosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $posts = [
            ["id"=>1,"designation"=>"KAMOA Base Fuel Station"],
            ["id"=>2,"designation"=>"KANSOKO Mine Fuel Station"],
            ["id"=>3,"designation"=>"KAMOA 1 Fuel Station"],
            ["id"=>4,"designation"=>"KAKULA South Fuel station"],
            ["id"=>5,"designation"=>"KAKULA North Oil Fuel Station"],
            ["id"=>6,"designation"=>"KAKULA North"]
        ];
        foreach($posts as $post){
            Poste::create($post);
        }
        $this->command->info("Postes seeded!");
    }
}
