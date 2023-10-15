<?php

namespace App\Http\Controllers;

use App\Models\Resumé_ded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Resumé_dedController extends Controller {

    public function project() {
        return view( 'resumes.project' );
    }

    public function ded() {
        $users = Resumé_ded::query()->latest()->paginate( 10 );
        return view( 'resumes.ded', compact( 'users' ) );
    }

    public function dedcreate() {
        return view( 'resumes.dedcreate' );
    }

    public function storeded( Request $request ) {

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

        $user = new Resumé_ded;
        $user->Description = $request->input( 'Description' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.ded' )->with( [
            'message' => 'Resumé_ded added successfully!',
            'status' => 'success'
        ] );
    }

}
