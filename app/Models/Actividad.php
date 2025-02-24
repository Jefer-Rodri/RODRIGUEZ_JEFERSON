<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Actividad extends Model
{
    protected $fillable = [
        'nombre',
        'tiempo',
        'dia',
        'horario',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal', 'actividad_id');
    }
}
