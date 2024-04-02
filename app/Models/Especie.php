<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Especie extends Model
{
    protected $fillable = [
        'nombre',
        'cuidador_id',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal', 'especie_id');
    }

    public function cuidador()
    {
        return $this->belongsTo('App\Models\Cuidador', 'cuidador_id');
    }
}
