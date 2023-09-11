<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContratController extends Controller {

    public function contrat() {
        $users = Contrat::query()->latest()->paginate( 10 );

        return view( 'contrats.contrat', compact( 'users' ) );
    }

    public function crate() {
        return view( 'contrats.crate' );
    }

    public function store( Request $request ) {

        $request->validate( [
            'Description' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ] );

        // Gestion du fichier PDF

        if ( $request->hasFile( 'pdf_file' ) ) {
            $pdfFile = $request->file( 'pdf_file' );
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs( 'pdfs', $pdfFileName, 'public' );
            // Stockage du fichier PDF
        }

        $user = new Contrat;
        $user->Description = $request->input( 'Description' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'contrats.contrat' )->with( [
            'message' => 'Rapport added successfully!',
            'status' => 'success'
        ] );
    }

}
