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

    public function downloadRequest( $id ) {
        $mission = Mission::find( $id );

        // Vérifiez si la demande a été validée
        if ( $mission->etat == 'Avis favorable' ) {
            // Récupérez le chemin du fichier PDF de la demande ( assurez-vous que le fichier existe )
            $pdfFilePath = storage_path( 'app/public/missions/' . $mission->id . '.pdf' );

            // Vérifiez si le fichier existe
            if ( file_exists( $pdfFilePath ) ) {
                // Générez une réponse de téléchargement pour le fichier
                return response()->download( $pdfFilePath, 'demande_mission.pdf' );
            }
        }

        // Si la demande n'est pas validée ou le fichier n'existe pas, redirigez l'utilisateur ou affichez un message d'erreur.
        return redirect()->back()->with( 'error', 'La demande n\'a pas encore été validée ou le fichier est introuvable.');
    }


    
    

    public function mission() {
        $users = Mission::all();
        return view( 'missions.mission', compact( 'users' ) );
    }

    public function ordre() {
        $users = Mission::all();
        return view( 'missions.ordre', compact( 'users' ) );
    }

    public function validation() {
        $users = Mission::all();
        return view( 'missions.validation', compact( 'users' ) );
    }

    public function valider( $id ) {
        $users = Mission::findOrFail( $id );
        $users->update( [ 'etat' => 'Avis favorable' ] );
        // Met à jour l'état à 1 pour approuver
        return redirect()->route( 'missions.validation' )->with( 'success', 'La mission a été validée avec succès.' );
    }

    public function rejeter( $id ) {
        $users = Mission::findOrFail( $id );
        $users->update( [ 'etat' => 'Avis défavorable' ] );
        // Met à jour l'état à 2 pour rejeter
        return redirect()->route( 'missions.validation' )->with( 'success', 'La mission a été rejetée avec succès.' );
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
            'etat' => 'Demande en cours',
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
            'Etat' => 'en attente de validation',
        ] );
        return redirect()->route( 'missions.mission' )->with( 'success', 'La demande de mission a été soumise avec succès.' );

    }

}
