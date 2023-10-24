<?php

namespace App\Http\Controllers;

use App\Models\Fiches_de_congé;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_de_congéController extends Controller {

    public function documentation() {
        return view( 'documentation.documentation' );
    }

    public function rapport_de_project() {
        return view( 'documentation.rapport_de_project' );
    }

    public function fiches_de_congé() {
        $fiches = Fiches_de_congé::latest()->paginate( 10 );
        return view( 'documentation.fiches_de_congé', compact( 'fiches' ) );
    }

    public function fiches_de_congécreate() {
        return view( 'documentation.fiches_de_congécreate' );
    }

    public function storefiches_de_congé( Request $request ) {
        $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
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

        $fiche = new Fiches_de_congé;
        $fiche->Nom = $request->input( 'Nom' );
        $fiche->Prénom = $request->input( 'Prénom' );
        $fiche->Date = $request->input( 'Date' );
        $fiche->pdf_path = $pdfPath;
        $fiche->save();

        return redirect()->route( 'documentation.fiches_de_congé' )->with( [
            'message' => 'Fiche de congé ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
