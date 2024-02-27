<?php

namespace App\Livewire;

use App\Http\Requests\ReleveRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RemiseReprise extends Component
{
    public $users;
    public array $remise;

    public function rules(){
        return (new ReleveRequest())->rules(); 
    }
    public function releve(){
        $this->validate();
        $getUserReleve=User::findOrFail($this->remise["id"]);
        if (Hash::check($this->remise["passwordRelevant"],$getUserReleve->password)) {
            if (Hash::check($this->remise["password"],Auth::user()->password)) {
                $getUserReleve->givePermissionTo("login");
                Auth::user()->revokePermissionTo("login");
                $mesage="ok";
                // $user1->givePermissionTo("login");
            } else {
                $mesage="Votre mot de passe est incorrect";
            }
        }else {
            $mesage="le mot de passe du relevznt est incorect";
        }
        dd($mesage);
    }

    public function render()
    {
        $this->users=User::role('Officier')->where("id","!=",Auth::user()->id)->get();
        // Role::where("name","Utilisateur")->get();
        return view('livewire.remise-reprise');
    }
}
