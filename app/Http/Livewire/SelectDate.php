<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectDate extends Component
{
    public $date;

    public function mount(string $date)
    {
        $this->date = $date;
    }

    public function onSelectDate()
    {
        $this->emit('onSelectedDate', $this->date);
    }

    public function render()
    {
        return view('livewire.select-date');
    }
}
