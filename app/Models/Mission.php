<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model {
    use HasFactory;

    protected $fillable = [
        'Date_du_remplissage',
        'N°1',
        'N°2',
        'N°3',
        'Partenaire',
        'Project',
        'Objet',
        'Lieu',
        'Région',
        'Prémière',
        'Deuxième',
        'Troisième',
        'Conducteur',
        'Tel_cond',
        'Véhicule',
        'Immatriculation',
        'Départ',
        'Rétour',
        'etat', // Remarquez la correction du nom de la colonne 'etat'
        'directeur_id' // Nouvelle colonne 'directeur_id'
    ];
}

