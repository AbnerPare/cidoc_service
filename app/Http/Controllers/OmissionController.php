<?php

namespace App\Http\Controllers;

use App\Models\Omission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OmissionController extends Controller {

    public function omission() {
        $users = Omission::query()->latest()->paginate( 10 );

        return view( 'omissions.omission', compact( 'users' ) );
    }

    public function create() {
        return view( 'omissions.create' );
    }

    public function store( Request $request ) {

        $request->validate( [
            'Lieu' => 'required',
            'Région' => 'required',
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

        $user = new Omission;
        $user->Lieu = $request->input( 'Lieu' );
        $user->Région = $request->input( 'Région' );
        $user->Date = $request->input( 'Date' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'omissions.omission' )->with( [
            'message' => 'Rapport added successfully!',
            'status' => 'success'
        ] );
    }

}
