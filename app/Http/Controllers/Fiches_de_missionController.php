<?php

namespace App\Http\Controllers;

use App\Models\Fiches_de_mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fiches_de_missionController extends Controller {

    public function fiches_de_mission() {
        $fiches = Fiches_de_mission::latest()->paginate( 10 );
        return view( 'documentation.fiches_de_mission', compact( 'fiches' ) );
    }

    public function fiches_de_missioncreate() {
        return view( 'documentation.fiches_de_missioncreate' );
    }

    public function storefiches_de_mission( Request $request ) {
        $request->validate( [
            'Lieu' => 'required',
            'Région' => 'required',
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

        $fiche = new Fiches_de_mission;
        $fiche->Lieu = $request->input( 'Lieu' );
        $fiche->Région = $request->input( 'Région' );
        $fiche->Date = $request->input( 'Date' );
        $fiche->pdf_path = $pdfPath;
        $fiche->save();

        return redirect()->route( 'documentation.fiches_de_mission' )->with( [
            'message' => 'fiches_de_mission ajoutée avec succès!',
            'status' => 'success'
        ] );
    }
}
