<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	protected $fillable = [
		'id', 'name', 'picture', 'description', 'state', 'category_id', 'infrastructure_id', 'position', 'location_id'
	];

	public function infrastructure() {
        $this->hasOne(Infrastructure::class, 'name');
    }
    
    public function loan() {
        $this->belongsTo(loan::class, 'material_id');
    }
    
    public function refs() {
        $this->hasOne(materials_references::class);
    }
    
    public function category() {
        $this->hasOne(categories::class);
    }

    public function parent() {
        $this->belongsTo(Material::class, 'parent_id');
    }

    public function materials() {
    	$this->hasMany(Material::class, 'parent_id');
    }
}
