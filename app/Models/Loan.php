<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'material_id', 'user_id', 'responsible_id', 'begin_at', 'end_at', 'deadline_at'
    ];

    public function material() {
        return $this->belongsTo(Material::class);
    }

    public function loaner() {
        return $this->belongsTo(User::class);
    }

    public function responsible() {
        return $this->belongsTo(User::class, 'responsible_id');
    }
}
