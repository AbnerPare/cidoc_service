<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Demandeur extends Authenticatable {
    use HasFactory, Notifiable;

    protected $guard = 'demandeur';
    // Utilisation du guard 'demandeur' pour ce modèle

    protected $fillable = [
        'email', 'password', 'role', // Ajout de 'role' aux attributs mass-assignable
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
