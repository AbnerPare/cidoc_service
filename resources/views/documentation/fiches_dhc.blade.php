@extends('layout')
@section('titre')
Fiches DHC
@endsection

@section('contenu')
    <div class=" gradient-background ">
        <h1 class="text-center text-gradient"> <u>Fiches DHC</u> </h1>
        <div class="container-fluid">
            <div class="container text-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut-filter" id="all" value="all" checked>
                    <label class="form-check-label" for="all">Tous les états</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut-filter" id="encours" value="En cours">
                    <label class="form-check-label" for="encours">En cours</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut-filter" id="executee" value="Exécuté">
                    <label class="form-check-label" for="execute">Exécuté</label>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-3  mb-5">
            <div class="row" style="border-radius: 20px">
                @foreach ($fiches as $fiche)
                    <div class="col-12 m-1">
                        <div  style="border: 2px solid #b1bdd7; border-radius: 20px; background-color:#9aadd6;">
                            <div class="d-flex align-items-center">
                                <div class="statut-cell mr-2">
                                    <h6>
                                        <span
                                            class="text-white p-1 {{ $fiche->Etat === 'En cours' ? 'bg-danger d-inline-block text-center' : ($fiche->Etat === 'Exécuté' ? 'bg-success d-inline-block text-center' : '') }}"
                                            style="border-radius: 20px">
                                            {{ $fiche->Etat }}
                                        </span>
                                    </h6>
                                </div>
                                <p>{{ $fiche['Description'] }}</p>
                                <a href="{{ asset('storage/' . $fiche->pdf_path) }}" target="_blank"
                                    class="btn btn-success btn-sm ml-2">Ouvrir</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
