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
        return $this->hasMany(Answer::class);
    }

    public function reports()
    {
        return $this->hasMany(User::class, 'line_manager_email', 'email');
    }
}
