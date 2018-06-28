<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Material;

class MaterialReference extends Model
{
    protected $table = 'materials_references';
    protected $primarykey = ['material_id', 'type'];
    protected $incrementing = false;

    protected $fillable = [
        'material_id', 'type', 'value'
    ];

    public function material() {
    	return $this->belongsTo(Material::class);
    }
}
