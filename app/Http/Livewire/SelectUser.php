<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SelectUser extends Component
{
    public $forUserEmail;

    public function onClickOk()
    {
        $user = User::firstOrCreate([
            'email' => $this->forUserEmail,
        ]);

        $this->emit('onSelectedUser', $user->id);
    }

    public function render()
    {
        return view('livewire.select-user');
    }
}
