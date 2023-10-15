<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller {

    public function form() {
        return view( 'projects.form' );
    }

    public function processForm( Request $request ) {
        // Traitez les données du formulaire ici
        // Par exemple, enregistrez les données dans la base de données
        $data = $request->validate( [
            'Description' => 'required|string',
            'pdf_path' => 'nullable|string',
            'Etat' => 'required|string|in:En cours,Déjà exécuté',
            'choix_vue' => 'required|string',
        ] );
    }

    public function view1() {
        // Logique pour afficher view1 avec les données de projet
        $users = Project::all();
        return view( 'projects.view1', compact( 'users' ) );
    }

    public function store( Request $request ) {
        // Valider les données du formulaire pour le stockage
        $validatedData = $request->validate( [
            'Description' => 'required|string',
            'pdf_path' => 'nullable|file', // Modifiez la règle de validation en 'file'
            'Etat' => 'required|string|in:En cours,Déjà exécuté',
        ] );

        // Vérifiez si un fichier PDF a été téléchargé
        if ( $request->hasFile( 'pdf_path' ) ) {
            // Stockez le fichier PDF dans le système de fichiers
            $pdfPath = $request->file( 'pdf_path' )->store( 'pdfs' );
            // Le répertoire 'pdfs' doit exister
            $validatedData[ 'pdf_path' ] = $pdfPath;
            // Ajoutez le chemin du PDF aux données validées
        }

        // Enregistrez les données dans la base de données
        Project::create( $validatedData );

        // Redirigez l'utilisateur vers la vue view1 après l'enregistrement
        return redirect()->route( 'projects.view1' )->with( [
            'message' => 'Résumé ajouté avec succès !',
            'status' => 'success'
        ] );
    }

}

