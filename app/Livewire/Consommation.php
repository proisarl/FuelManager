<?php

namespace App\Livewire;

use App\Http\Requests\AddConsommationRequest;
use App\Models\Consommation as ModelsConsommation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Consommation extends Component
{
    public array $consommation;

    public function rules(){
        return (new AddConsommationRequest())->rules(); 
    }
    public function save(){
        $this->validate();
        $this->consommation["pompiste"]="TEst";
        $this->consommation["affectation_id"]=Auth::user()->affectation->id;
        ModelsConsommation::firstOrCreate($this->consommation);
        $this->dispatch('event', ['type' => 'success', 'message' => "Enregistrement Reussi "]);
        $this->reset("consommation");
    }
    public function render()
    {
        return view('livewire.consommation');
    }
}
