<?php

namespace App\Livewire\Vehicule;

use Livewire\Component;
use App\Models\Consommation;

class VehiculeComponent extends Component
{
    public $vehicules;
    public  $vehiculeObjet;

    public function showModal($data){
       
        
        $this->dispatch('eventModal', ['modal' => '#showVehicule']);
    }
    public function mount()
    {
        // $this->vehicules=Consommation::orderBy("plaque")->get()->
        // groupBy("plaque");
        $consommation = Consommation::orderBy("created_at","asc")->get();
        $this->vehicules=$consommation->groupBy('plaque')->toBase();
    }

    public function render()
    {
        return view('livewire.vehicule.vehicule-component');
    }
}
