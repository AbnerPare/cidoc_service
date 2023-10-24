<?php

namespace App\Http\Controllers;

use App\Models\Fiches_de_contrat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_de_contratController extends Controller {

    public function fiches_de_contrat() {
        $fiches = Fiches_de_contrat::latest()->paginate( 10 );
        return view( 'documentation.fiches_de_contrat', compact( 'fiches' ) );
    }

    public function fiches_de_contratcreate() {
        return view( 'documentation.fiches_de_contratcreate' );
    }

    public function storefiches_de_contrat( Request $request ) {
        $request->validate( [
            'Description' => 'required',
            'Date' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ] );

        $pdfPath = null;

        // Gestion du fichier PDF
        if ( $request->hasFile( 'pdf_file' ) ) {
            $pdfFile = $request->file( 'pdf_file' );
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs( 'pdfs', $pdfFileName, 'public' );
            // Stockage du fichier PDF
        }

        $fiche = new Fiches_de_contrat;
        $fiche->Description = $request->input( 'Description' );
        $fiche->Date = $request->input( 'Date' );
        $fiche->pdf_path = $pdfPath;
        $fiche->save();

        return redirect()->route( 'documentation.fiches_de_contrat' )->with( [
            'message' => 'fiches_de_contrat ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
