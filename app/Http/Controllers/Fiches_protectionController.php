<?php

namespace App\Http\Controllers;

use App\Models\Fiches_protection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_protectionController extends Controller {

    public function fiches_protection() {
        $fiches = Fiches_protection::latest()->paginate( 10 );
        return view( 'documentation.fiches_protection', compact( 'fiches' ) );
    }

    public function fiches_protectioncreate() {
        return view( 'documentation.fiches_protectioncreate' );
    }

    public function storefiches_protection( Request $request ) {

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

        $fiche = new Fiches_protection;
        $fiche->Description = $request->input( 'Description' );
        $fiche->Etat = $request->input( 'Etat' );
        $fiche->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $fiche->save();

        return redirect()->route( 'documentation.fiches_protection' )->with( [
            'message' => 'fiches_protection ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
