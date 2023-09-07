<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soumission;

class SoumissionController extends Controller {
    //

    // Méthode index

    public function index() {
        $soumissions = Soumission::all();

        return view( 'soumissions.index', compact( 'soumissions' ) );
    }

    // Méthode create

    public function create() {
        return view( 'soumissions.create' );
    }

    // Méthode store

    public function store( Request $request ) {
        $request->validate( [
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required',
            'etat' => 'required',
        ] );

        Soumission::create( $request->all() );

        return redirect()->route( 'soumissions.index' )
        ->with( 'success', 'La demande a été créée avec succès.' );
    }

    // Méthode valider

    public function valider() {
        $soumissionsEnAttente = Soumission::where( 'etat', 'en attente' )->get();

        return view( 'soumissions.valider', compact( 'soumissionsEnAttente' ) );
    }

    // Méthode validerDemande
    // Méthode validerSoumission

    public function validerSoumission( Request $request, Soumission $soumission ) {
        // Validez la demande comme vous le souhaitez, par exemple, changez son état
        $soumission->update( [
            'etat' => 'validée',
        ] );

        return redirect()->route( 'soumissions.valider' )
        ->with( 'success', 'La demande a été validée avec succès.' );
    }

}
