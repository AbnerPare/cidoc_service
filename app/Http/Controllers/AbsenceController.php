<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use Illuminate\Contracts\Support\ValidatedData;
// Assurez-vous d'importer le modèle Directeur si ce n'est pas déjà fait

class AbsenceController extends Controller {
    //

    public function absence() {
        $user = Absence::all();
        return view( 'absences.absence', [ 'users' => $user ] );

    }

    public function cre_ab() {
        $users = Absence::all();
        return view( 'absences.cre_ab', compact( 'users', ) );
    }

    public function store( Request $request ) {
        $validatedData = $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'Fonction' => 'required',
            'Type_de_congé' => 'required',
            'Periode_du'=>'required',
            'Date_de_fin' => 'required',
            'Nombre_de_jour' => 'required',
            'Période_de_non_disponibilité' => 'required',
            'Signature_du_demandeur' => 'required',
            'Date_du_remplissage' => 'required',
            'Etat_1' => 'required',
            'Date_de_l_avis_du_sup' => 'required',
            'Signature_du_sup' => 'required',
            'Etat_2' => 'required',
            'Date_de_l_avis_du_coordo' => 'required',
            'Signature_du_coordo' => 'required',
        ] );

        Absence::create( [
            'Nom' => $validatedData[ 'Nom' ],
            'Prénom' => $validatedData[ 'Prénom' ],
            'Fonction' => $validatedData[ 'Fonction' ] ,
            'Type_de_congé' => $validatedData[ 'Type_de_congé' ],
            'Periode_du' => $validatedData[ 'Periode_du' ],
            'Date_de_fin' => $validatedData[ 'Date_de_fin' ],
            'Nombre_de_jour' => $validatedData[ 'Nombre_de_jour' ],
            'Période_de_non_disponibilité' => $validatedData[ 'Période_de_non_disponibilité' ],
            'Signature_du_demandeur' => $validatedData[ 'Signature_du_demandeur' ],
            'Date_du_remplissage' => $validatedData[ 'Date_du_remplissage' ],
            'Etat_1' =>  $validatedData[ 'Etat_1' ] ,
            'Date_de_l_avis_du_sup' => $validatedData[ 'Date_de_l_avis_du_sup' ],
            'Signature_du_sup' => $validatedData[ 'Signature_du_sup' ],
            'Etat_2' => $validatedData[ 'Etat_2' ],
            'Date_de_l_avis_du_coordo' => $validatedData[ 'Date_de_l_avis_du_coordo' ],
            'Signature_du_coordo' => $validatedData[ 'Signature_du_coordo' ] ,
        ] );
        return redirect()->route( 'absences.absence' )->with( 'success', 'La demande de permission a été soumise avec succès.' );

    }

}
