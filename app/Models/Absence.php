<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model {
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Prénom',
        'Fonction',
        'Type_de_congé',
        'Periode_du',
        'Date_de_fin',
        'Nombre_de_jour',
        'Période_de_non_disponibilité',
        'Signature_du_demandeur',
        'Date_du_signature',
        'Etat_1',
        'Date_de_l_avis_du_sup',
        'Signature_du_sup',
        'Etat_2',
        'Date_de_l_avis_du_coordo',
        'Signature_du_coordo'
    ];
}
