<?php

namespace App\Http\Controllers;

use App\Models\Protection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProtectionController extends Controller {

    public function protection() {
        $users = Protection::query()->latest()->paginate( 10 );
        return view( 'resumes.protection', compact( 'users' ) );
    }

    public function protectioncreate() {
        return view( 'resumes.protectioncreate' );
    }

    public function storeprotection( Request $request ) {

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

        $user = new Protection;
        $user->Description = $request->input( 'Description' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.protection' )->with( [
            'message' => 'Protection added successfully!',
            'status' => 'success'
        ] );
    }

}
