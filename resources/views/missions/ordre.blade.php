@extends('layout')

{{-- Titre --}}
@section('titre')
    Formulaire d'ordre de mission
@endsection

{{-- Contenu --}}
@section('contenu')
<div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-md-10 bg-success" style="border-radius: 20px; border:solid 10px rgb(64, 170, 64)">
            <div class="card" style="border-radius: 20px; border: none">
                <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                    <h4> Formulaire d'ordre de mission</h4>
                </div>
                @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                <div class="card-body" style="background-color: rgb(206, 206, 195)">
                    <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('missions.store1') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Date du remplissage</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="Date_du_remplissage"
                                    placeholder="Date du remplissage" value="{{ old('Date_du_remplissage') }}">
                                @error('Date_du_remplissage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">N°1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="N°1" placeholder="N° 202......"
                                    value="{{ old('N°1') }}">
                                @error('N°1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">N°2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="N°2" placeholder="/....../"
                                    value="{{ old('N°2') }}">
                                @error('N°2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">N°3</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="N°3" placeholder="Cidoc/DAOL/......"
                                    value="{{ old('N°3') }}">
                                @error('N°3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Partenaire</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Partenaire" placeholder="Partenaire"
                                    value="{{ old('Partenaire') }}">
                                @error('Partenaire')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Project</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Project" placeholder="Project"
                                    value="{{ old('Project') }}">
                                @error('Project')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Objet</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Objet" placeholder="Objet"
                                    value="{{ old('Objet') }}">
                                @error('Objet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Lieu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Lieu" placeholder="Lieu"
                                    value="{{ old('Lieu') }}">
                                @error('Lieu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Région</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Région" placeholder="Région"
                                    value="{{ old('Région') }}">
                                @error('Région')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">1ère personne</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Prémière"
                                    placeholder="Nom et prénom de la première personne" value="{{ old('Prémière') }}">
                                @error('Prémière')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">2ème personne</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Deuxième"
                                    placeholder="Nom et prénom de la deuxième personne" value="{{ old('Deuxième') }}">
                                @error('Deuxième')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">3ème personne</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Troisième"
                                    placeholder="Nom et prénom de la troisième personne" value="{{ old('Troisième') }}">
                                @error('Troisième')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Conducteur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Conducteur"
                                    placeholder="Nom et prénom du conducteur" value="{{ old('Conducteur') }}">
                                @error('Conducteur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Télépone du conducteur</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="Tel_cond"
                                    placeholder="Télépone du conducteur" value="{{ old('Tel_cond') }}">
                                @error('Tel_cond')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Véhicule</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Véhicule" placeholder="Véhicule"
                                    value="{{ old('Véhicule') }}">
                                @error('Véhicule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Immatriculation</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Immatriculation"
                                    placeholder="Immatriculation" value="{{ old('Immatriculation') }}">
                                @error('Immatriculation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Date de départ</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="Départ" placeholder="Date du départ"
                                    value="{{ old('Départ') }}">
                                @error('Départ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Date de rétour</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="Rétour" placeholder="Date de rétour"
                                    value="{{ old('Rétour') }}">
                                @error('Rétour')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success text-white">Soumettre</button>
                                <a href="{{ route('missions.mission') }}" class="btn btn-danger float-end">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
