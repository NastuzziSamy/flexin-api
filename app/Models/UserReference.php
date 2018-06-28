<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserReference extends Model
{
    protected $table = 'users_references';

    protected $fillable = [
        'user_id', 'type',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
