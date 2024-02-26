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
        $this->validate();

    }
    public function render()
    {
        return view('livewire.consommation');
    }
}
