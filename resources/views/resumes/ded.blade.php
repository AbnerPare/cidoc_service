@extends('layout')
@section('titre')
    Actions DED
@endsection

@section('contenu')
    <div class="text-center gradient-background ">
        <h1 class="text-white">Les actions DED</h1>
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
    </div>
    <div class="container-fluid">
        <div class="row" style="border-radius: 20px">
            @foreach ($users as $user)
                <div class="col-12 m-1">
                    <div class="p-3" style="border: 2px solid #ccc; border-radius: 20px; background-color:#ccc  ">
                        {{-- <div class="statut-cell">
                            <h6>
                                <span
                                    class="text-white p-1 {{ $user->Etat === 'En cours' ? 'bg-danger' : ($user->Etat === 'Exécuté' ? 'bg-success' : '') }}"
                                    style="border-radius: 20px">
                                    {{ $user->Etat }}
                                </span>
                            </h6>
                        </div> --}}
                        <a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank"
                            class="btn btn-success btn-sm">Ouvrir</a>
                        {{ $user['Description'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
