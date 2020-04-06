<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;

class ViewAnswer extends Component
{
    const QUESTIONS = [
        'quality_of_work',
        'quality_of_handover',
        'communicating_well',
        'being_a_good_listener',
        'following_though',
        'enjoying_indie',
        'overseeing_work',
        'being_a_mentor',
        'engaging_in_learning',
        'sharing_knowledge',
    ];

    public $answer;

    public function mount(int $answerId)
    {
        $this->answer = Answer::findOrFail($answerId);
    }

    public function render()
    {
        return view('livewire.view-answer');
    }
}
