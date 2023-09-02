@extends('layout')



{{-- titre --}}
@section('titre')
    Administrateur
@endsection

{{-- debut contenu --}}
@section('contenu')
    <br>
    <div class="container-fluid mt-10px">
        <div class="row">
            <div class="col-sm-2 bg-dark" style="text-align: center; border-radius:20px; padding:5px ; color:white">
                <h4>Résumés des actions</h4><br>
                <a href="{{ route('resumes.ajouter') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>
            </div>

            <div class="col-sm-2 bg-dark" style="text-align: center; border-radius:20px; padding:5px ; color:white">
                <h4>Le personnel</h4><br>
                <a href="{{ route('personnels.creer') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>
            </div>

            <div class="col-sm-2 bg-dark" style="text-align: center; border-radius:20px; padding:5px ; color:white">
                <h4>Rapport de project</h4><br>
                <a href="{{ route('rapports.ajout') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>
            </div>
        </div>
    </div>
    </div>

    {{-- fin contenu --}}
@endsection


