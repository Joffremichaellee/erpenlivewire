<?php

namespace App\Http\Livewire;

use App\Models\User;

use Livewire\Component;

class UserSave extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user-save');
    }

    public function submit(){
        //validar
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
