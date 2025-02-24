<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class AnimalRecinto extends Model
{
    protected $fillable = [
        'animal_id',
        'recinto_id',
    ];

    public function animal()
    {
        return $this->belongsTo('App\Models\Animal', 'animal_id');
    }

    public function recinto()
    {
        return $this->belongsTo('App\Models\Recinto', 'recinto_id');
    }
}
