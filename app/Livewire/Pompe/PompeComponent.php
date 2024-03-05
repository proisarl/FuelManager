<?php

namespace App\Livewire\Pompe;

use App\Http\Requests\PompeAddRequest;
use App\Models\Pompe;
use App\Models\Poste;
use Livewire\Component;

class PompeComponent extends Component
{
    public array $pompe;
    public function rules(){
        return (new PompeAddRequest())->rules(); 
    }
    public function savePompe(){
        $this->validate();
        try {
            Pompe::firstOrCreate($this->pompe);
            $this->dispatch('event', ['type' => 'success', 'message' => "Nouvelle Pompe Ajoutée"]);
            $this->reset("pompe");
            $this->dispatch("refreshPowerGrid");
        } catch (\Throwable $th) {
            $this->dispatch('event', ['type' => 'error', 'message' => "Une Erreur s'est Produite"]);
        }
    }
    public function render()
    {
        return view('livewire.pompe.pompe-component');
    }
}
