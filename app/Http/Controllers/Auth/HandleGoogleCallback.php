<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Socialite;
use Str;

class HandleGoogleCallback extends Controller
{
    public function handle()
    {
        $user = Socialite::driver('google')->user();

        $account = User::updateOrCreate(['email' => $user->email], ['name' => $user->name, 'token' => Str::random(40)]);

        app('auth')->login($account);

        return redirect()->route('show-dashboard');
    }
}
