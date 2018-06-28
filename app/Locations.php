<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emplacements extends Model
{
    protected $table = 'Emplacement';
    public $incrementing = false;
    //protected $primarykey = ['bat', 'salle'];
    protected $keyType = string;
    public $timestamps = false;
}
