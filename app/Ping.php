<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ping extends Model {

    protected $fillable = [
        'materia',
        'beacon',
        'user'
    ];

}
