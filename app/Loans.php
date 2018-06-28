<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    protected $table = 'loans';
    
    $table->timestamps();

    /*public function borrower() {
        return $this->belongsTo('app/users', 'id');
    }

    public function responsible() {
        return $this->belongsTo('app/users', 'id');
    } jsp faut utiliser quelle relation pour choper l'emprunter et le resp de l'emprunt*/
}
