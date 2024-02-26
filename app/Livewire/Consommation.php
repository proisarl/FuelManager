<?php

namespace App\Livewire;

use App\Http\Requests\AddConsommationRequest;
use Livewire\Component;

class Consommation extends Component
{
    public array $consommation;

    public function rules(){
        return (new AddConsommationRequest())->rules(); 
    }
    public function save(){
        // session()->flash('status', 'Post successfully updated.');
        $this->dispatch('toast', ['type' => 'error', 'message' => "Erreur lors d'enregistrement cette adresse Existe dans nos Dossiers!"]);
        // $this->validate();
        // dd($this->consommation);

    }
    public function render()
    {
        return view('livewire.consommation');
    }
}
