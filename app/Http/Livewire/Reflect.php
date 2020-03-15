<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reflect extends Component
{
    public $date;
    public $hasSelectedDate = false;

    protected $listeners = [
        'onSelectedDate',
    ];

    public function mount()
    {
        $this->date = now()->format('Y-m-d');
    }

    public function onSelectedDate($selected)
    {
        $this->date = $selected;
        $this->hasSelectedDate = true;
    }

    public function render()
    {
        return view('livewire.reflect');
    }
}
