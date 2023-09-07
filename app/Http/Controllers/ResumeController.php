<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller {

    public function index() {
        $users = Resume::query()->latest()->paginate( 10 );

        return view( 'resumes.index', compact( 'users' ) );
    }

    public function ajouter() {
        return view( 'resumes.ajouter' );
    }

    public function store( Request $request ) {

        $request->validate( [
            'Description' => 'required',
            'Thématique' => 'required',
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

        $user = new Resume;
        $user->Description = $request->input( 'Description' );
        $user->Thématique = $request->input( 'Thématique' );
        $user->Etat = $request->input( 'Etat' );
        $user->pdf_path = $pdfPath;
        // Utilisez la variable $pdfPath générée précédemment
        $user->save();

        return redirect()->route( 'resumes.index' )->with( [
            'message' => 'Resume added successfully!',
            'status' => 'success'
        ] );
    }

}
