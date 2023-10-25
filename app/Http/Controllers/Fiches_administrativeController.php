<?php

namespace App\Http\Controllers;

use App\Models\Fiches_administrative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_administrativeController extends Controller {

    public function fiches_administrative() {
        $fiches = Fiches_administrative::latest()->paginate( 10 );
        return view( 'documentation.fiches_administrative', compact( 'fiches' ) );
    }

    public function fiches_administrativecreate() {
        return view( 'documentation.fiches_administrativecreate' );
    }

    public function storefiches_administrative( Request $request ) {

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

        $fiche = new Fiches_administrative;
        $fiche->Description = $request->input( 'Description' );
        $fiche->Etat = $request->input( 'Etat' );
        $fiche->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $fiche->save();

        return redirect()->route( 'documentation.fiches_administrative' )->with( [
            'message' => 'fiches_administrative ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
