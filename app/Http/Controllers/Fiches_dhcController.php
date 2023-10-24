<?php

namespace App\Http\Controllers;

use App\Models\Fiches_dhc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_dhcController extends Controller {

    public function fiches_dhc() {
        $fiches = Fiches_dhc::latest()->paginate( 10 );
        return view( 'documentation.fiches_dhc', compact( 'fiches' ) );
    }

    public function fiches_dhccreate() {
        return view( 'documentation.fiches_dhccreate' );
    }

    public function storefiches_dhc( Request $request ) {

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

        $fiche = new Fiches_dhc;
        $fiche->Description = $request->input( 'Description' );
        $fiche->Etat = $request->input( 'Etat' );
        $fiche->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $fiche->save();

        return redirect()->route( 'documentation.fiches_dhc' )->with( [
            'message' => 'Fiches_dhc ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
