<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Beacon extends Model {

    protected $fillable = [
        'name',
        'uuid',
        'major',
        'minor',
        'image',
        'materia',
        'mesa',
        'mensaje',
        'evaluacion'
    ];


}
