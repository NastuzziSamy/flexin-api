<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categorie';
    protected $primarykey = 'id_cat';
    public $timestamps = false;

    public function contenant(){
        return $this->hasOne('App\Categories');
    }
}
