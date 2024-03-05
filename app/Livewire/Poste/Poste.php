<?php

namespace App\Livewire\Poste;

use App\Http\Requests\PosteRequest;
use App\Models\Poste as ModelsPoste;
use Livewire\Component;

class Poste extends Component
{
    public array $poste;
    public function rules(){
        return (new PosteRequest())->rules(); 
    }
    public function save(){
        $this->validate();
        try {
            ModelsPoste::firstOrCreate($this->poste);
            $this->dispatch('event', ['type' => 'success', 'message' => "Nouvelle Poste Ajouté"]);
            $this->reset("poste");
            $this->dispatch("refreshPowerGrid");
        } catch (\Throwable $th) {
            $this->dispatch('event', ['type' => 'error', 'message' => "Une erreur s'est Produite"]);
        }
    }
    public function render()
    {
        return view('livewire.poste.poste');
    }
}
