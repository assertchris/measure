<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SetLineManagerEmail extends Component
{
    public $lineManagerEmail;

    public function mount()
    {
        $this->lineManagerEmail = auth()->user()->line_manager_email;
    }

    public function onChangeEmail($value)
    {
        $user = auth()->user();
        $user->line_manager_email = $value;
        $user->save();
    }

    public function render()
    {
        return view('livewire.set-line-manager-email');
    }
}
