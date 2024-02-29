<?php

namespace App\Livewire\Auth;

use App\Http\Requests\PasswordExpiredRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class PasswordExpired extends Component
{
    public array $users;
    public $visibilite;
    public function rules(){
        return (new PasswordExpiredRequest())->rules(); 
    }
    public function change(){
        $this->validate();
        Auth::user()->update([
            'password' => Hash::make($this->users["password"]),
            'password_changed_at' => Carbon::now()->toDateTimeString()
        ]);
        sleep(2);
        $this->dispatch('event', ['type' => 'success', 'message' => "Le mot de Passe Est Bien Changé "]);
        $this->reset("users");
    }
    public function render()
    {
        $this->visibilite=boolval(Auth::user()->password_changed_at);
        ($this->visibilite) ? toast("Vous Venez De Changer Le Mot de Passe",'success') : toast("Vous devez Charger le mot de passe par defaut",'error');
        return view('livewire.auth.password-expired');
    }
}
