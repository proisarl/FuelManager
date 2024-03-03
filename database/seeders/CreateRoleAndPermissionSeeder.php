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
        Role::create(["name"=>"Officier"]);

        Permission::create(["name"=>"create"]);
        Permission::create(["name"=>"delete"]);
        Permission::create(["name"=>"update"]);
        Permission::create(["name"=>"view"]);
        Permission::create(["name"=>"login"]);
        Permission::create(["name"=>"logout"]);
        
        // $roleAdmin=Role::find(1);
        // $roleAdmin->givePermissionTo("create");

        $users=User::whereIn("id",[1,18])->get();
        foreach ($users as $user) {
            $user->givePermissionTo("login");
            // $user->revokePermissionTo("logout");
            $user->assignRole("Administrateur");
            // $user->givePermissionTo("login");
        }
        $usersRoles=User::where("id","!=",1)->get();
        $usersPermisions=User::whereIn("id",[2,3,4,5,16])->get();
        foreach ($usersRoles as $usersRole1) {
            $usersRole1->assignRole("Officier");
            $usersRole1->givePermissionTo("logout");
        }
        foreach ($usersPermisions as $user1) {
            $user1->givePermissionTo("login");
            $user1->revokePermissionTo("logout");
        }
        $this->command->info("Permission seeded!");
    }
}
