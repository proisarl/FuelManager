<?php

namespace App\Livewire;

use App\Http\Requests\AddConsommationRequest;
use App\Models\Affectation;
use App\Models\Consommation as ModelsConsommation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Can;
use Livewire\Component;

class Consommation extends Component
{
    public array $consommation;
    public $officiers;
    public $pompes;
    // public $messagePost;

    public function rules(){
        return (new AddConsommationRequest())->rules(); 
    }
    public function save(){
        $this->validate();
        if (!Auth::user()->hasRole("Administrateur")) {
            $this->consommation["affectation_id"]=Auth::user()->affectation->id;
        }
        // dd($this->consommation);
        if (!empty($this->consommation["affectation_id"])) {
            $this->consommation["user_id"]=Auth::user()->id;
            ModelsConsommation::firstOrCreate($this->consommation);
            $this->dispatch('event', ['type' => 'success', 'message' => "Nouvelle Consommation Ajoutée "]);
            $this->reset("consommation");
        }else{
            $this->dispatch('event', ['type' => 'error', 'message' => "Il semble que l'officier selectionné n'a pas un Poste ou il n'est pas valide, Veuillez Preciser Le Nom de L'officier, "]); 
        }
    }
    public function userEmail(){
       try { 
            $this->pompes=Affectation::find($this->consommation["affectation_id"])
                            ->poste
                            ->pompes->pluck("designation","id")->toArray();
       } catch (\Throwable $th) {
            $this->reset("pompes"); 
       }
    //    $this->pompes=['Red', 'Orange'];
    //    dd($this->pompes);
    }
    public function render()
    {
        $this->officiers=User::role('Officier')->where("id","!=",Auth::user()->id)->get();
        return view('livewire.consommation');
    }
}
