<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class GiveFeedback extends Component
{
    public $selectedUser;
    public $selectedDate;
    public $hasSelectedUser;
    public $hasSelectedDate;
    public $hasAnsweredQuestions;

    protected $listeners = [
        'onSelectedDate',
        'onSelectedUser',
        'onAnsweredQuestions',
    ];

    public function mount()
    {
        $this->selectedDate = now()->format('Y-m-d');
    }

    public function onSelectedUser(int $selectedUserId)
    {
        $this->selectedUser = User::findOrFail($selectedUserId);
        $this->hasSelectedUser = true;

        AnswerQuestions::goToFirstQuestion();
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
        return view('livewire.give-feedback');
    }
}
