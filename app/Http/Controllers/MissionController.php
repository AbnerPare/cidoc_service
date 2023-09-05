<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
use Illuminate\Contracts\Support\ValidatedData;

class MissionController extends Controller {
    //

    public function mission() {
        $users = Mission::all();

        return view( 'missions.mission', [ 'users' => $users ] );
    }

    public function ordre() {
        return view( 'missions.ordre' );
    }

    public function store1( Request $request ) {
        $validatedData = $request->validate( [
            'date' => 'required',
            'numéro1' => 'required',
            'numéro2' => 'required',
            'numéro3' => 'required',
            'project' => 'required',
            'objet' => 'required',
            'lieu' => 'required',
            'région' => 'required',
            'personne1' => 'required',
            'personne2' => 'required',
            'personne3' => 'required',
            'conducteur' => 'required',
            'tel_cond' => 'required',
            'véhicule' => 'required',
            'immatriculation' => 'required',
            'Départ' => 'required',
            'Rétour' => 'required',
        ] );

        Mission::create( [
            'date' => $validatedData[ 'date' ],
            'numéro1' => $validatedData[ 'numéro1' ],
            'numéro2' => trim( $validatedData[ 'numéro2' ] ),
            'numéro3' => $validatedData[ 'numéro3' ],
            'project' => $validatedData[ 'project' ],
            'objet' => $validatedData[ 'objet' ],
            'lieu' => $validatedData[ 'lieu' ],
            'région' => $validatedData[ 'région' ],
            '1personne' => $validatedData[ 'personne1' ],
            '2personne' => trim( $validatedData[ 'personne2' ] ),
            '3personne' => $validatedData[ 'personne3' ],
            'conducteur' => $validatedData[ 'conducteur' ],
            'tel-cond' => $validatedData[ 'tel_cond' ],
            'véhicule' => $validatedData[ 'véhicule' ],
            'immatriculation' => trim( $validatedData[ 'immatriculation' ] ),
            'Départ' => $validatedData[ 'Départ' ],
            'Rétour' => $validatedData[ 'Rétour' ],
        ] );

        return redirect()->route( 'missions.mission' )->with( [
            'message' => 'Mission ajoutée avec succès !',
            'status' => 'success'
        ] );
    }

}
