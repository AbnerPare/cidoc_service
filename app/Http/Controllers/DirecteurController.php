<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;

class DirecteurController extends Controller {
    //

    public function index() {
        $missionsEnCours = Mission::where( 'statut', 'en_cours' )->get();
        return view( 'validation-directeur', compact( 'missionsEnCours' ) );
    }

    public function validationDemandes() {
        // Récupérez les demandes en cours depuis la base de données
        $demandesEnCours = Mission::where( 'etat', 'en attente' )->get();

        // Chargez la vue 'validation.blade.php' en passant les demandes en cours
        return view( 'validation', [ 'demandesEnCours' => $demandesEnCours ] );
    }

}
