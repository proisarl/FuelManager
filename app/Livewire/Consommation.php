<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Pompe;
use Livewire\Component;
use App\Models\Companie;
use App\Models\Affectation;
use App\Models\TypeVehicule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Can;
use App\Http\Requests\AddConsommationRequest;
use App\Models\Consommation as ModelsConsommation;

class Consommation extends Component
{
    public array $consommation;
    public $officiers;
    public $pompes;
    public $touspompes;
    public $typeVehicules;
    public $hs;
    public $company;
    // public $messagePost;

    public function rules(){
        return (new AddConsommationRequest())->rules(); 
    }
    public function save(){
        dd($this->consommation);
        $this->validate();
        $this->consommation["plaque"]=str_replace(" ","",str_replace("/","",$this->consommation["plaque"]));
        if (!Auth::user()->hasRole("Administrateur")) {
            $this->consommation["affectation_id"]=Auth::user()->affectation->id;
        }
        if (!empty($this->consommation["affectation_id"])) {
            $this->consommation["user_id"]=Auth::user()->id;
            ModelsConsommation::firstOrCreate($this->consommation);
            $this->dispatch('event', ['type' => 'success', 'message' => "Nouvelle Consommation Ajoutée "]);
            $this->reset("consommation");
        }else{
            $this->dispatch('event', ['type' => 'error', 'message' => "Il semble que l'officier selectionné n'a pas un Poste ou il n'est pas valide, Veuillez Preciser Le Nom de L'officier, "]); 
        }
    }
    public function mount(){
        $this->typeVehicules=TypeVehicule::all();
        $this->touspompes = Auth::user()->affectation?->poste->pompes;
        $this->officiers=User::role('Officier')->where("id","!=",Auth::user()->id)->get();
        $this->company=Companie::where("status","active");
    }
    public function userEmail(){
       try { 
            $this->pompes=Affectation::find($this->consommation["affectation_id"])
                            ->poste
                            ->pompes->pluck("designation","id")->toArray();
       } catch (\Throwable $th) {
            $this->reset("pompes"); 
       }
    }
    public function render()
    {
        return view('livewire.consommation');
    }
}
