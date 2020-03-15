<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reflect extends Component
{
    public $date;
    public $hasSelectedDate = false;
    public $hasAnsweredQuestions = false;

    protected $listeners = [
        'onSelectedDate',
        'onAnsweredQuestions',
    ];

    public function mount()
    {
        $this->date = now()->format('Y-m-d');
    }

    public function onSelectedDate(string $selected)
    {
        $this->date = $selected;
        $this->hasSelectedDate = true;
    }

    public function onAnsweredQuestions()
    {
        $this->hasAnsweredQuestions = true;
    }

    public function render()
    {
        return view('livewire.reflect');
    }
}
