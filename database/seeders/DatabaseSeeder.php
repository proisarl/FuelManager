<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CreateUserSeeder::class,
            CreatePosteSeeder::class,
            CreateAffectationSeeder::class,
            CreateRoleAndPermissionSeeder::class
        ]);

        $this->command->info("''''''''''''''''''''''''''''");
        $this->command->info('BRAVO! all seeds executed!!!');
        $this->command->info('............................');
    }
}
