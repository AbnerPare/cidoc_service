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
        'Etat'
    ];

    // public function demande() {
    //     return $this->belongsTo( Mission::class, 'mission_id' );
    // }

    // public function directeur() {
    //     return $this->belongsTo( Directeur::class, 'directeur_id' );
    // }

}
