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
            ["id"=>1,"name"=>"KAMOA COPPER","matricule"=>"1919","email"=>"admin@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>2,"name"=>"KALOMBO MASANGU John","matricule"=>"1919","email"=>"john@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>3,"name"=>"MUHINDO MUSAFIRI Emmanuel","matricule"=>"1919","email"=>"emmanuel@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>4,"name"=>"MUTULA MURANIRA Moise","matricule"=>"1919","email"=>"moise@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>5,"name"=>"HENRY KALAMBA Willy","matricule"=>"1919","email"=>"willy@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>6,"name"=>"SALEH MURISHO Felicien","matricule"=>"1919","email"=>"felicien@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>7,"name"=>"YUMBA MUKEMA Philo","matricule"=>"1919","email"=>"philo@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>8,"name"=>"KABAMBA MISENGA Christian","matricule"=>"1919","email"=>"christian@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>9,"name"=>"KITUMAINI SUKALI Heritier","matricule"=>"1919","email"=>"sukali@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>10,"name"=>"FAZILI BAYILA RUBEN","matricule"=>"1919","email"=>"rubin@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>11,"name"=>"ILUNGA MWIMBI Germain","matricule"=>"1919","email"=>"germain@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>12,"name"=>"BUHENZI FRANCESCO ELI","matricule"=>"1919","email"=>"eli@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>13,"name"=>"MPIANA MUTOMBO Heritier","matricule"=>"1919","email"=>"heritier@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>14,"name"=>"BINENE KABALA NENE","matricule"=>"1919","email"=>"nene@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>15,"name"=>"PIA OKIPAPOLE Joseph","matricule"=>"1919","email"=>"joseph@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>16,"name"=>"KOMBA MUSONDA Dieu-donne","matricule"=>"1919","email"=>"dieudonne@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>17,"name"=>"KAKULA NORD PUMP","matricule"=>"1919","email"=>"pump@sa.com",'password' => static::$password ??= Hash::make('password')],
            ["id"=>18,"name"=>"Bernard Ilunga","matricule"=>"1919","email"=>"bernard@sa.com",'password' => static::$password ??= Hash::make('password')],
        ];
        foreach($users as $user){
            User::create($user);
        }
        $this->command->info("Users seeded!");
    }
}
