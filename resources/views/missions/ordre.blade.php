@extends('layout')



{{-- titre --}}
@section('titre')
    Formulaire d'ordre de mission
@endsection




{{-- debut contenu --}}
@section('contenu')
    <div class="container "><br>
        <div class="row justify-content-center ">
            <div class="col-md-10 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px ">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                       <h4> Formulaire d'ordre de mission</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3" action="{{ route('missions.store1') }}" method="post"
                            enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date du remplissage</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date_du_remplissage" placeholder="Date du remplissage"
                                        @error('Date_du_remplissage') is-invalid @enderror >
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
                                        @error('N°1') is-invalid @enderror>
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
                                        @error('N°2') is-invalid @enderror>
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
                                        @error('N°3') is-invalid @enderror>
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
                                        @error('Partenaire') is-invalid @enderror>
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
                                        @error('Project') is-invalid @enderror>
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
                                        @error('Objet') is-invalid @enderror>
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
                                        @error('Lieu') is-invalid @enderror>
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
                                        @error('Région') is-invalid @enderror>
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
                                    <input type="text" class="form-control" name="Prémière" placeholder=" Nom et prénom de la première personne"
                                        @error('Prémière') is-invalid @enderror>
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
                                    <input type="text" class="form-control" name="Deuxième" placeholder="Nom et prénom de la deuxième personne"
                                        @error('Deuxième') is-invalid @enderror>
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
                                    <input type="text" class="form-control" name="Troisième" placeholder="Nom et prénom de la troixième personne"
                                        @error('Troisième') is-invalid @enderror>
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
                                    <input type="text" class="form-control" name="Conducteur" placeholder="Nom et prénom du conducteur"
                                        @error('Conducteur') is-invalid @enderror>
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
                                    <input type="tel" class="form-control" name="Tel_cond" placeholder="Télépone du conducteur"
                                        @error('Tel_cond') is-invalid @enderror>
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
                                        @error('Véhicule') is-invalid @enderror>
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
                                    <input type="text" class="form-control" name="Immatriculation" placeholder="Immatriculation"
                                        @error('Immatriculation') is-invalid @enderror>
                                    @error('Immatriculation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">mission_id</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="mission_id" placeholder="mission_id"
                                        @error('mission_id') is-invalid @enderror>
                                    @error('mission_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">etat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="etat" placeholder="etat"
                                        @error('etat') is-invalid @enderror>
                                    @error('etat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Commentaire</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Commentaire" placeholder="Commentaire"
                                        @error('Commentaire') is-invalid @enderror>
                                    @error('Commentaire')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">directeur_id</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="directeur_id" placeholder="directeur_id"
                                        @error('directeur_id') is-invalid @enderror>
                                    @error('directeur_id')
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
                                        @error('Départ') is-invalid @enderror>
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
                                        @error('Rétour') is-invalid @enderror>
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
                                    <button type="submit" class="btn btn-success text-white">Envoyer</button>
                                    <a href="{{ route('missions.mission') }}" class="btn btn-danger  float-end">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
