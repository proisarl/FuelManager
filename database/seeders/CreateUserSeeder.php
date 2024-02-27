<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected static ?string $password;

    public function run()
    {
        $users = [
            ["id"=>1,"name"=>"KAMOA COPPER","matricule"=>"1919","email"=>"crispin.nguza@prois-sarl.org",'password' => static::$password ??= Hash::make('password')],
            ["id"=>2,"name"=>"KALOMBO MASANGU John","matricule"=>"1919","email"=>"john@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>3,"name"=>"MUHINDO MUSAFIRI Emmanuel","matricule"=>"1919","email"=>"emmanuel@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>4,"name"=>"MUTULA MURANIRA Moise","matricule"=>"1919","email"=>"moise@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>5,"name"=>"HENRY KALAMBA Willy","matricule"=>"1919","email"=>"willy@sa.com",'password' => static::$password ??= Hash::make('password')],
        ];
        foreach($users as $user){
            User::create($user);
        }
        $this->command->info("Users seeded!");
    }
}
