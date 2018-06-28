<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	protected $fillable = [
		// A faire
	];

	// Manque des relations

    public function parent() {
        $this->belongsTo(Material::class, 'parent_id');
    }

    public function materials() {
    	$this->hasMany(Material::class, 'parent_id');
    }
}
