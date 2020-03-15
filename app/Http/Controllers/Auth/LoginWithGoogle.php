<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;

class LoginWithGoogle extends Controller
{
    public function handle()
    {
        return Socialite::driver('google')->redirect();
    }
}
