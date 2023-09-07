<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Personnel;
use Illuminate\Contracts\Support\ValidatedData;

class PersonnelController extends Controller {
    //

    // public  function perso() {
    //     return view( 'personnels.perso' );
    // }

    public function perso() {
        $users = Personnel::query()->latest()->paginate( 10 );

        return view( 'personnels.perso', compact( 'users' ) );
    }

    public  function creer() {
        return view( 'personnels.creer' );
    }

    public function tore( Request $request ) {
        $validatedData = $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:personnels', // Assurez-vous que le nom de la table est correct
            'Téléphone' => 'required',
            'Département' => 'required',
            'Statut_de_présence' => 'required',
            'Precision' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:61440'
        ] );

        $imagePath = $request->file( 'image' )->store( 'public/images' );
        $fileName = basename( $imagePath );

        Personnel::create( [
            'Nom' => $validatedData[ 'Nom' ],
            'Prénom' => $validatedData[ 'Prénom' ],
            'Email' => trim( $validatedData[ 'Email' ] ),
            'Téléphone' => $validatedData[ 'Téléphone' ],
            'Département' => $validatedData[ 'Département' ],
            'Statut_de_présence' => $validatedData[ 'Statut_de_présence' ],
            'Precision' => $validatedData[ 'Precision' ],
            'image' => $fileName, // Enregistrez le nom du fichier image dans la base de données
        ] );

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs( 'public/images', $fileName );
        return redirect()->route( 'personnels.perso' )->with( [
            'message' => 'Personnel ajouté avec succès !',
            'status' => 'success'
        ] );
    }

    public function edit( $id ) {
        try {
            $user = Personnel::findOrFail( $id );
            return view( 'personnels.edit', compact( 'user' ) );
        } catch ( \Exception $e ) {
            abort( 404 );
        }
    }

    public function update( Request $request, $id ) {
        $validatedData = $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'Email' => 'required|email|unique:personnels,Email,'.$id,
            'Téléphone' => 'required',
            'Département' => 'required',
            'Statut_de_présence' => 'required',
            'Precision' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:61440', // Adjusted max size and added 'sometimes'
        ] );

        $user = Personnel::find( $id );
        if ( !$user ) {
            abort( 404 );
        }

        if ( $request->hasFile( 'image' ) ) {
            $imagePath = $request->file( 'image' )->store( 'public/images' );
            $fileName = basename( $imagePath );
            $user->image = $fileName;
        }

        $user->Nom = $validatedData[ 'Nom' ];
        $user->Prénom = $validatedData[ 'Prénom' ];
        $user->Email = trim( $validatedData[ 'Email' ] );
        $user->Téléphone = $validatedData[ 'Téléphone' ];
        $user->Département = $validatedData[ 'Département' ];
        $user->Statut_de_présence = $validatedData[ 'Statut_de_présence' ];
        $user->Precision = $validatedData[ 'Precision' ];
        $user->save();

        return redirect()->route( 'personnels.perso' )->with( [
            'message' => 'Personnel modifié avec succès !',
            'status' => 'success'
        ] );
    }
}
