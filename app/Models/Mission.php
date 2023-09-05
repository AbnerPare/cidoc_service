<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model {
    use HasFactory;

    protected $fillable = [
        'date',
        'numéro1',
        'numéro2',
        'numéro3',
        'project',
        'objet',
        'lieu',
        'région',
        '1personne',
        '2personne',
        '3personne',
        'conducteur',
        'tel-cond',
        'véhicule',
        'immatriculation',
        'Départ',
        'Rétour',
    ];

}
