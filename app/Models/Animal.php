<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Animal extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
        'especie_id',
        'actividad_id',
    ];

    public function especie()
    {
        return $this->belongsTo('App\Models\Especie', 'especie_id');
    }

    public function cuidadoranimals()
    {
        return $this->hasMany('App\Models\CuidadorAnimal', 'animal_id');
    }

    public function actividad()
    {
        return $this->belongsTo('App\Models\Actividad', 'actividad_id');
    }

    public function animalrecintos()
    {
        return $this->hasMany('App\Models\AnimalRecinto', 'animal_id');
    }
}
