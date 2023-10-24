<?php

namespace App\Http\Controllers;

use App\Models\Resumé_administrative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Resumé_administrativeController extends Controller {

    public function administrative() {
        $users = Resumé_administrative::query()->latest()->paginate( 10 );
        return view( 'resumes.administrative', compact( 'users' ) );
    }

    public function administrativecreate() {
        return view( 'resumes.administrativecreate' );
    }

    public function storeadministrative( Request $request ) {

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

        $user = new Resumé_administrative;
        $user->Description = $request->input( 'Description' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.administrative' )->with( [
            'message' => 'Resumé_administrative added successfully!',
            'status' => 'success'
        ] );
    }

}
