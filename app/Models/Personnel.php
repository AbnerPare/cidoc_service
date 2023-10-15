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
        'Téléphone',
        'Département',
        'Statut_de_présence',
        'Precision',
        'image'
    ];
}
;
