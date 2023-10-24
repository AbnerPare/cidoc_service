<?php

namespace App\Http\Controllers;

use App\Models\Fiches_ded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_dedController extends Controller {

    public function fiches_ded() {
        $fiches = Fiches_ded::latest()->paginate( 10 );
        return view( 'documentation.fiches_ded', compact( 'fiches' ) );
    }

    public function fiches_dedcreate() {
        return view( 'documentation.fiches_dedcreate' );
    }

    public function storefiches_ded( Request $request ) {

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

        $fiche = new Fiches_ded;
        $fiche->Description = $request->input( 'Description' );
        $fiche->Etat = $request->input( 'Etat' );
        $fiche->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $fiche->save();

        return redirect()->route( 'documentation.fiches_ded' )->with( [
            'message' => 'Fiches_ded ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
