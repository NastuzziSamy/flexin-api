<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'lastname', 'firstname', 'email', 'phone', 'company', 'type',
    ];

    protected $appends = [
        'name',
    ];

    public function getNameAttribute() {
        return $this->lastname.' '.$this->firstname;
    }

    public function references() {
        return $this->hasMany(UserReference::class);
    }
}
