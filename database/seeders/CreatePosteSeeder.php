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
            ["id"=>1,"designation"=>"KAMOA 1"],
            ["id"=>2,"designation"=>"KANSOKO"],
            ["id"=>3,"designation"=>"KAMOA BASE"],
            ["id"=>4,"designation"=>"KAKULA NORD"],
            ["id"=>5,"designation"=>"KAKULA SUD"]
        ];
        foreach($posts as $post){
            Poste::create($post);
        }
        $this->command->info("Postes seeded!");
    }
}
