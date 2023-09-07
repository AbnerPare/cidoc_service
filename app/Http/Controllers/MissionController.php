<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
use Illuminate\Contracts\Support\ValidatedData;
use App\Models\Demande;
use App\Models\Directeur;

// Assurez-vous d'importer le modèle Directeur si ce n'est pas déjà fait

class MissionController extends Controller {
    //

    public function mission() {
        $users = Mission::all();
        // $users = Mission::where( 'etat', 'en attente' )->get();
        return view( 'missions.mission', [ 'users' => $users ] );
    }

    public function ordre() {
        $missions = Demande::all();
        $directeurs = Directeur::all();
        return view( 'missions.ordre', compact( 'missions', 'directeurs' ) );
    }

    public function store1( Request $request ) {
        $validatedData = $request->validate( [
            'Date_du_remplissage' => 'required',
            'N°1' => 'required',
            'N°2' => 'required',
            'N°3' => 'required',
            'Partenaire'=>'required',
            'Project' => 'required',
            'Objet' => 'required',
            'Lieu' => 'required',
            'Région' => 'required',
            'Prémière' => 'required',
            'Deuxième' => 'required',
            'Troisième' => 'required',
            'Conducteur' => 'required',
            'Tel_cond' => 'required',
            'Véhicule' => 'required',
            'Immatriculation' => 'required',
            'Départ' => 'required',
            'Rétour' => 'required',
            'mission_id' => 'required',
            'etat' => 'required',
            'directeur_id' => 'required',
            'Commentaire' => 'required',
        ] );

        Mission::create( [
            'Date_du_remplissage' => $validatedData[ 'Date_du_remplissage' ],
            'N°1' => $validatedData[ 'N°1' ],
            'N°2' => $validatedData[ 'N°2' ] ,
            'N°3' => $validatedData[ 'N°3' ],
            'Partenaire' => $validatedData[ 'Partenaire' ],
            'Project' => $validatedData[ 'Project' ],
            'Objet' => $validatedData[ 'Objet' ],
            'Lieu' => $validatedData[ 'Lieu' ],
            'Région' => $validatedData[ 'Région' ],
            'Prémière' => $validatedData[ 'Prémière' ],
            'Deuxième' =>  $validatedData[ 'Deuxième' ] ,
            'Troisième' => $validatedData[ 'Troisième' ],
            'Conducteur' => $validatedData[ 'Conducteur' ],
            'Tel-cond' => $validatedData[ 'Tel_cond' ],
            'Véhicule' => $validatedData[ 'Véhicule' ],
            'Immatriculation' => $validatedData[ 'Immatriculation' ] ,
            'Départ' => $validatedData[ 'Départ' ],
            'Rétour' => $validatedData[ 'Rétour' ],
            'mission_id' => $validatedData[ 'mission_id' ],
            'etat' => $validatedData[ 'etat' ],
            'directeur_id' => $validatedData[ 'directeur_id' ] ,
            'Commentaire' => $validatedData[ 'Commentaire' ],
        ] );

        return redirect()->route( 'missions.mission' )->with( 'success', 'La demande de mission a été soumise avec succès.' );

    }

    public function indexDirecteur() {
        // Affiche la liste des demandes de mission en attente de validation par le directeur
        $demandes = Mission::where( 'etat', 'en attente' )->get();
        return view( 'missions.directeur.index', compact( 'missions' ) );
    }

    public function validateDemande( Request $request, $id ) {
        // Valide la demande de mission
        $demande = Mission::findOrFail( $id );
        $demande->etat = 'validée';
        $demande->save();

        return redirect()->route( 'directeur.demandes' )->with( 'success', 'La demande de mission a été validée.' );
    }

    public function rejectDemande( Request $request, $id ) {
        // Rejette la demande de mission
        $demande = Mission::findOrFail( $id );
        $demande->etat = 'rejetée';
        $demande->save();

        return redirect()->route( 'directeur.demandes' )->with( 'warning', 'La demande de mission a été rejetée.' );
    }

}
