<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RapportController extends Controller {

    public function rapport() {
        $users = Rapport::query()->latest()->paginate( 10 );

        return view( 'rapports.rapport', compact( 'users' ) );
    }

    public function ajout() {
        return view( 'rapports.ajout' );
    }

    public function stor( Request $request ) {

        $request->validate( [
            'Description' => 'required',
            'Thématique' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ] );

        // Gestion du fichier PDF

        if ( $request->hasFile( 'pdf_file' ) ) {
            $pdfFile = $request->file( 'pdf_file' );
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs( 'pdfs', $pdfFileName, 'public' );
            // Stockage du fichier PDF
        }

        $user = new Rapport;
        $user->Description = $request->input( 'Description' );
        $user->Thématique = $request->input( 'Thématique' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'rapports.rapport' )->with( [
            'message' => 'Rapport added successfully!',
            'status' => 'success'
        ] );
    }

}
