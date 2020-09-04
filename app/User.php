<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRoles(array $roles) {
        return $this->roles->pluck('name')->intersect($roles)->count();
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'assigned_roles');
    }

    public function isAdmin() {
        return $this->hasRoles(['admin']);
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }



}
