<?php

namespace App\Http\Controllers;

use App\Models\Fiches_logistique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_logistiqueController extends Controller {

    public function fiches_logistique() {
        $fiches = Fiches_logistique::latest()->paginate( 10 );
        return view( 'documentation.fiches_logistique', compact( 'fiches' ) );
    }

    public function fiches_logistiquecreate() {
        return view( 'documentation.fiches_logistiquecreate' );
    }

    public function storefiches_logistique( Request $request ) {

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

        $fiche = new Fiches_logistique;
        $fiche->Description = $request->input( 'Description' );
        $fiche->Etat = $request->input( 'Etat' );
        $fiche->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $fiche->save();

        return redirect()->route( 'documentation.fiches_logistique' )->with( [
            'message' => 'fiches_logistique ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
