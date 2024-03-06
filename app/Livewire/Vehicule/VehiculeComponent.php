<?php

namespace App\Livewire\Vehicule;

use App\Models\Consommation;
use Livewire\Component;

class VehiculeComponent extends Component
{
    public $vehicules;
    public  $vehiculeObjet;

    public function showModal($data){
        $this->vehiculeObjet=Consommation::where("plaque",$data)->get();
        
        $this->dispatch('eventModal', ['modal' => '#showVehicule']);
    }
    public function mount()
    {
        // $this->vehicules=Consommation::orderBy("plaque")->get()->
        // groupBy("plaque");
        $consommation = Consommation::all();
        $this->vehicules=$consommation->groupBy('plaque')->toBase();
    }

    public function render()
    {
        return view('livewire.vehicule.vehicule-component');
    }
}
