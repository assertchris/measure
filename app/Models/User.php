<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'token'];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'for_user_id', 'id')->latest();
    }

    public function answersFromOthers()
    {
        return $this->hasMany(Answer::class, 'for_user_id', 'id')
            ->whereNotNull('from_user_id')
            ->latest();
    }

    public function reports()
    {
        return $this->hasMany(User::class, 'line_manager_email', 'email');
    }
}
