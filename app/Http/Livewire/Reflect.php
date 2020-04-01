<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reflect extends Component
{
    public $selected;
    public $hasSelectedDate = false;
    public $hasAnsweredQuestions = false;

    protected $listeners = [
        'onSelectedDate',
        'onAnsweredQuestions',
    ];

    public function mount()
    {
        $this->selected = now()->format('Y-m-d');
    }

    public function onSelectedDate(string $selected)
    {
        $this->selected = $selected;
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
