<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reflect extends Component
{
    public $selectedDate;
    public $hasSelectedDate = false;
    public $hasAnsweredQuestions = false;

    protected $listeners = [
        'onSelectedDate',
        'onAnsweredQuestions',
    ];

    public function mount()
    {
        $this->selectedDate = now()->format('Y-m-d');
    }

    public function onSelectedDate(string $selectedDate)
    {
        $this->selectedDate = $selectedDate;
        $this->hasSelectedDate = true;

        AnswerQuestions::goToFirstQuestion();
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
