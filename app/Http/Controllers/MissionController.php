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
        $user = Mission::all();
        // $usersEnCours = Mission::where( 'etat', 'en attente' )->get();
        return view( 'missions.mission', [ 'users' => $user ] );
        // return view( 'missions.mission', [ 'usersEnCours' => $usersEnCours ] );

    }

    public function ordre() {
        $users = Mission::all();
        return view( 'missions.ordre', compact( 'users', ) );
    }

    public function validation() {
        $users = Mission::all();
        return view( 'missions.validation', compact( 'users', ) );
    }

    public function valider( $id ) {
        Mission::where( 'id', $id )->update( [ 'etat'=>true ] );
        return redirect()->route( 'missions.validation' )->with( 'messages', 'valider avec succes' );
        //return view( 'missions.mission', compact( 'users', ) );
    }

    public function regeter( $id ) {
        $users = Mission::where( $id );
        return view( 'missions.mission', compact( 'users', ) );
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
            'Tel_cond' => $validatedData[ 'Tel_cond' ],
            'Véhicule' => $validatedData[ 'Véhicule' ],
            'Immatriculation' => $validatedData[ 'Immatriculation' ] ,
            'Départ' => $validatedData[ 'Départ' ],
            'Rétour' => $validatedData[ 'Rétour' ],
        ] );

        return redirect()->route( 'missions.mission' )->with( 'success', 'La demande de mission a été soumise avec succès.' );

    }

}
