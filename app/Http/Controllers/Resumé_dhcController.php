<?php

namespace App\Http\Controllers;

use App\Models\Resumé_dhc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Resumé_dhcController extends Controller {

    public function dhc() {
        $users = Resumé_dhc::query()->latest()->paginate( 10 );
        return view( 'resumes.dhc', compact( 'users' ) );
    }

    public function dhccreate() {
        return view( 'resumes.dhccreate' );
    }

    public function storedhc( Request $request ) {

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

        $user = new Resumé_dhc;
        $user->Description = $request->input( 'Description' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.dhc' )->with( [
            'message' => 'Resumé_dhc added successfully!',
            'status' => 'success'
        ] );
    }

}
