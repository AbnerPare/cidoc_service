<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model {
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Prénom',
        'Email',
        'téléphone',
        'département',
        'Statut_de_présence',
        'raison',
        'image' // Utilisez le même nom de champ que dans le contrôleur
    ];
}
;
