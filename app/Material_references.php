<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material_references extends Model
{
    protected $table='materials_references';

    public material(){
    	return $this->belongsTo(Material::class);
    }
}
