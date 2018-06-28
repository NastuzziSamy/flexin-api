<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	protected $table='materials';
	
    public function material_parent() {
        return $this->belongsTo('app/Materials_parents', 'parent_id');
    }

    public function material_sons() {
        return $this->hasMany('app/Materials_parents', 'material_id');
    }
}
