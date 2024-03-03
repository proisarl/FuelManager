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
        $this->kamoaMonth=Consommation::where("companie","=","kamoa")->orWhere("companie","=","kcs")->sum("littre");
        $this->sousTraitanceMonth=Consommation::where("companie","!=","kamoa")->orWhere("companie","!=","kcs")->sum("littre");
        // $this->sousTraitanceDays=Consommation::where("companie","!=","Kamoa")->where("companie","!=","kcs")->sum("littre");
        // $this->kamoaDays=Consommation::where("companie","=","Kamoa")->where("companie","=","kcs")->sum("littre");
        return view('livewire.layouts.menu-navbar');
    }
}
