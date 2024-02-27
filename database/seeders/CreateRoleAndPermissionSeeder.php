<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected static ?string $password;

    public function run()
    {
        Role::create(["name"=>"Administrateur"]);
        Role::create(["name"=>"Utilisateur"]);

        Permission::create(["name"=>"create"]);
        Permission::create(["name"=>"delete"]);
        
        $roleAdmin=Role::find(1);
        $roleAdmin->givePermissionTo("create");

        $user=User::find(1);
        $user->assignRole("Administrateur");
        $users=User::where("id","!=",1);
            foreach ($users as $user1) {
                $user1->assignRole("Utilisateur");
            }
        
        $this->command->info("Permission seeded!");
    }
}
