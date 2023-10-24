<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class Fiches_de_congé extends Authenticatable implements MustVerifyEmail {
    use HasFactory;

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'Nom',
        'Prénom',
        'pdf_path',
        'Date'
    ];

    public function getPdfLinkAttribute() {
        return Storage::url( $this->pdf_path );
    }

}

