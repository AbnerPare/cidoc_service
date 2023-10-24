<?php

namespace App\Http\Controllers;

use App\Models\Resumé_logistique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Resumé_logistiqueController extends Controller {

    public function logistique() {
        $users = Resumé_logistique::query()->latest()->paginate( 10 );
        return view( 'resumes.logistique', compact( 'users' ) );
    }

    public function logistiquecreate() {
        return view( 'resumes.logistiquecreate' );
    }

    public function storelogistique( Request $request ) {

        $request->validate( [
            'Description' => 'required',
            'Etat' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ] );

        // Gestion du fichier PDF

        if ( $request->hasFile( 'pdf_file' ) ) {
            $pdfFile = $request->file( 'pdf_file' );
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs( 'pdfs', $pdfFileName, 'public' );
            // Stockage du fichier PDF
        }

        $user = new Resumé_logistique;
        $user->Description = $request->input( 'Description' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.logistique' )->with( [
            'message' => 'logistiques added successfully!',
            'status' => 'success'
        ] );
    }

}

