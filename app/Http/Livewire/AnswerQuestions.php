<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\User;
use Livewire\Component;

class AnswerQuestions extends Component
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

    public $user;
    public $date;
    public $question;

    public function mount(int $userId, string $date)
    {
        $this->user = User::findOrFail($userId);
        $this->date = $date;
        $this->question = session()->get('AnswerQuestions.question', static::QUESTIONS[0]);
    }

    public function onBack()
    {
        $index = array_search($this->question, static::QUESTIONS);

        if ($index <= 0) {
            return;
        }

        $this->question = static::QUESTIONS[$index - 1];
        session()->put('AnswerQuestions.question', $this->question);
    }

    public function onForward()
    {
        $index = array_search($this->question, static::QUESTIONS);

        if ($index + 1 >= count(static::QUESTIONS)) {
            $this->emit('onAnsweredQuestions');
            session()->put('AnswerQuestions.question', static::QUESTIONS[0]);
            return;
        }

        $this->question = static::QUESTIONS[$index + 1];
        session()->put('AnswerQuestions.question', $this->question);
    }

    private function answer()
    {
        $answer = Answer::where('answered_for', $this->date)
            ->where('user_id', $this->user->id)
            ->first();

        if ($answer) {
            return $answer;
        }

        return Answer::create([
            'answered_for' => $this->date,
            'user_id' => $this->user->id,
        ]);
    }

    public function onChange($field, $value)
    {
        $answer = $this->answer();
        $answer->$field = $value;
        $answer->save();
    }

    public function render()
    {
        $answer = $this->answer();

        return view('livewire.answer-questions', [
            'answer' => $answer,
        ]);
    }
}
