<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DemandeurController extends Controller {
    // use AuthenticatesUsers;

    protected $guard = 'demandeur';
    // Utilisation du guard 'demandeur' pour l'authentification des demandeurs
    protected $redirectTo = '/mission'; // Redirection après l'authentification réussie

    public function __construct() {
        $this->middleware( 'guest:demandeur' )->except( 'logout' );
    }

    public function showLoginForm() {
        return view( 'missions.login' );
        // Vue du formulaire de connexion pour les demandeurs
    }
}

