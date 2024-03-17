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
    public $companies;
    // public $messagePost;

    public function rules(){
        return (new AddConsommationRequest())->rules(); 
    }
    public function save(){
        $this->validate();
       try {
            $this->consommation["companie"] = ($this->consommation["companie_id"]==38) ? $this->consommation["companie"] : Companie::find($this->consommation["companie_id"])->designation ;
            $indexdepart=$this->consommation["indexdepart"];
            $littre=$this->consommation["littre"];
            $pompiste=$this->consommation["pompiste"];
            $this->consommation["plaque"]=strtoupper(str_replace(" ","",str_replace("/","",$this->consommation["plaque"])));
            if (!Auth::user()->hasRole("Administrateur")) {
                $this->consommation["affectation_id"]=Auth::user()->affectation->id;
            }
            if (!empty($this->consommation["affectation_id"])) {
                $this->consommation["user_id"]=Auth::user()->id;
                ModelsConsommation::firstOrCreate($this->consommation);
                $this->dispatch('event', ['type' => 'success', 'message' => "Nouvelle Consommation Ajoutée "]);
                $this->consommation=array();
                $this->consommation["indexdepart"]=$indexdepart + $littre;
                $this->consommation["pompiste"]=$pompiste;
            }else{
                $this->dispatch('event', ['type' => 'error', 'message' => "Il semble que l'officier selectionné n'a pas un Poste ou il n'est pas valide, Veuillez Preciser Le Nom de L'officier, "]); 
            }
       } catch (\Throwable $th) {
            $this->dispatch('event', ['type' => 'error', 'message' => "Il semble que Vous avez selectionné Une autre Companie que vous n'avez pas Précisé "]); 
       }
    }
    public function mount(){
        $this->typeVehicules=TypeVehicule::all();
        $this->touspompes = Auth::user()->affectation?->poste->pompes;
        $this->officiers=User::role('Officier')->where("id","!=",Auth::user()->id)->get();
        $this->companies=Companie::orderBy("designation","asc")->where("status","active")->get();
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
        try {
            $this->consommation["indexcloture"]=$this->consommation["indexdepart"]+$this->consommation["littre"];
        } catch (\Throwable $th) {
            $this->consommation["indexcloture"]=null;
        }
        return view('livewire.consommation');
    }
}
