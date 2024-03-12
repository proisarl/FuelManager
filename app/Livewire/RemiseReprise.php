<?php

namespace App\Livewire;

use App\Http\Requests\ReleveRequest;
use App\Models\RemiseReprise as ModelsRemiseReprise;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

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
                $getUserReleve->revokePermissionTo("logout");
                Auth::user()->givePermissionTo("logout");
                Auth::user()->revokePermissionTo("login");
                ModelsRemiseReprise::firstOrCreate([
                    "relevant"=>$this->remise["id"],
                    "releve"=>Auth::user()->id,
                    "indexfin"=>$this->remise["indexfin"],
                    "indexdepart"=>$this->remise["indexdepart"],
                    "commentaire"=>$this->remise["commentaire"]
                ]);
                $this->dispatch('event', ['type' => 'success', 'message' => "La Remise Reprise S'est Bien Faite"]);
                sleep(2);
                return redirect()->to('home');
            } else {
                $this->dispatch('event', ['type' => 'error', 'message' => "Votre mot de passe est incorrect"]);
            }
        }else {
            $this->dispatch('event', ['type' => 'error', 'message' => "le mot de passe du relevant est incorect"]);
        }
    }

    public function render()
    { 
        $this->users=Auth::user()->affectation?->poste->users->where("id","!=",Auth::user()->id);
        // User::role('Officier')->where("id","!=",Auth::user()->id)->permission('logout')->get()->;
        // $this->users=User::role('Officier')->where("id","!=",Auth::user()->id)->get();
        return view('livewire.remise-reprise');
    }
}
