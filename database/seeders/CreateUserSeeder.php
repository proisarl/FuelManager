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
            ["id"=>1,"name"=>"NGUNZA MWATI OLIVIER","matricule"=>"1919","email"=>"crispin.nguza@prois-sarl.org",'password' => static::$password ??= Hash::make('password')],
        ];
        foreach($users as $user){
            User::create($user);
        }
        $this->command->info("Users seeded!");
    }
}
