<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

// class Soumission extends Model {
//     use HasFactory;

//     protected $fillable = [
//         'nom',
//         'prenom',
//         'numero',
//         'etat'
// ];

//     public function user() {
//         return $this->belongsTo( User::class );
//     }
// }

class Soumission extends Model {
    protected $fillable = [
        'nom',
        'prenom',
        'numero',
        'etat'
    ];
}
