<?php

namespace App\Http\Controllers;

use App\Models\Oconge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OcongeController extends Controller {

    public function oconge() {
        $users = Oconge::query()->latest()->paginate( 10 );

        return view( 'oconges.oconge', compact( 'users' ) );
    }

    public function creat() {
        return view( 'oconges.creat' );
    }

    public function store( Request $request ) {

        $request->validate( [
            'Nom' => 'required',
            'Prénom' => 'required',
            'Date' => 'required',
            'pdf_file' => 'required|mimes:pdf,odt,txt,docx,ppt,pptx,doc|max:10240',
        ] );

        // Gestion du fichier PDF

        if ( $request->hasFile( 'pdf_file' ) ) {
            $pdfFile = $request->file( 'pdf_file' );
            $pdfFileName = time() . '_' . $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs( 'pdfs', $pdfFileName, 'public' );
            // Stockage du fichier PDF
        }

        $user = new Oconge;
        $user->Nom = $request->input( 'Nom' );
        $user->Prénom = $request->input( 'Prénom' );
        $user->Date = $request->input( 'Date' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'oconges.oconge' )->with( [
            'message' => 'Rapport added successfully!',
            'status' => 'success'
        ] );
    }

}
