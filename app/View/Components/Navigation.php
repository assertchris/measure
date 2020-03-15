<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public function render()
    {
        $isLoggedIn = auth()->user();

        return view('components.navigation', [
            'isLoggedIn' => $isLoggedIn,
        ]);
    }
}
