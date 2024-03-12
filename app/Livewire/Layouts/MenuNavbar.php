<?php

namespace App\Livewire\Layouts;

use App\Models\Consommation;
use Livewire\Component;

class MenuNavbar extends Component
{
    public $sousTraitanceMonth;
    public $kamoaMonth;
    public $sousTraitanceDays="00.0000";
    public $kamoaDays="00.0000";

    public function render()
    {
        $this->kamoaMonth=Consommation::where("companie","kcs")->orWhere("companie","kamoa")->sum("littre");
        $this->sousTraitanceMonth=Consommation::sum("littre") - $this->kamoaMonth;
        return view('livewire.layouts.menu-navbar');
    }
}
