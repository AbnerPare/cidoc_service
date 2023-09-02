<?php

namespace App\Http\Controllers;

use App\Models\Ajout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AjoutController extends Controller {

    public function index() {
        $users = Ajout::query()->latest()->paginate( 10 );

        return view( 'resumes.index', compact( 'users' ) );
    }

    public function ajout() {
        return view( 'resumes.ajout' );
    }

    public function stor( Request $request ) {

        $request->validate( [
            'Titre' => 'required',
            'Localite' => 'required',
            'Departement' => 'required',
            'Etat' => 'required',
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ] );

        // Gestion du fichier PDF

        if ( $request->hasFile( 'pdf_file' ) ) {
            $pdfFile = $request->file( 'pdf_file' );
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs( 'pdfs', $pdfFileName, 'public' );
            // Stockage du fichier PDF
        }

        $user = new Ajout;
        $user->Titre = $request->input( 'Titre' );
        $user->Localité = $request->input( 'Localite' );
        $user->Département = $request->input( 'Departement' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.index' )->with( [
            'message' => 'Resume added successfully!',
            'status' => 'success'
        ] );
    }

}
