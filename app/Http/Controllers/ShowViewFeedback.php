<?php

namespace App\Http\Controllers;

use App\Models\Answer;

class ShowViewFeedback
{
    public function handle(Answer $answer)
    {
        return view('show-view-feedback', [
            'answer' => $answer,
        ]);
    }
}
