@extends('layout')



{{-- titre --}}
@section('titre')
    Formulaire de demande d'absence
@endsection




{{-- debut contenu --}}
@section('contenu')
    <div class="container "><br>
        <div class="row justify-content-center ">
            <div class="col-md-10 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px ; border: none">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                        <h4>Formulaire d'otaurisation d'absence</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('absences.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Nom" placeholder="Nom"
                                        @error('Nom') is-invalid @enderror>
                                    @error('Nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Prénom</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Prénom" placeholder="Prénom"
                                        @error('Prénom') is-invalid @enderror>
                                    @error('Prénom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Poste ou Fonction</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Fonction"
                                        placeholder="Poste ou Fonction" @error('Fonction') is-invalid @enderror>
                                    @error('Fonction')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Type de congé</label>
                                <div class="col-sm-9">
                                    <select class="form-control " name="Type_de_congé">
                                        <option value="" aria-placeholder="">Sélectionnez un type de congé</option>
                                        <option value="Congé annuel">Congé annuel</option>
                                        <option value="Congé de maternité">Congé de maternité</option>
                                        <option value="Congé pour décès">Congé pour décès</option>
                                        <option value="Congé maladie">Congé maladie</option>
                                        <option value="Congé pour visite medicale">Congé pour visite medicale</option>
                                        <option value="Congé de paternité">Congé de paternité</option>
                                        <option value="Autre congé">Autre congé</option>
                                    </select>
                                    @error('Type_de_congé')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Pour la période du</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Periode_du"
                                        placeholder="Pour la période du" @error('Periode_du') is-invalid @enderror>
                                    @error('Periode_du')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Au (Date de fin)</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date_de_fin"
                                        placeholder="Au (Date de fin)" @error('Date_de_fin') is-invalid @enderror>
                                    @error('Date_de_fin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nombre de jour ouvrés</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Nombre_de_jour"
                                        placeholder="Nombre de jour ouvrés" @error('Nombre_de_jour') is-invalid @enderror>
                                    @error('Nombre_de_jour')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Période d'absence</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Période_de_non_disponibilité"
                                        placeholder="Période d'absence"
                                        @error('Période_de_non_disponibilité') is-invalid @enderror>
                                    @error('Période_de_non_disponibilité')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Période d'absence</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Type_de_congé">
                                        <option value="" aria-placeholder="">Sélectionnez une période d'absence
                                        </option>
                                        <option value="A valoir sur congé annuel">A valoir sur congé annuel</option>
                                        <option value="A valoir sur repliquat congé annuel">A valoir sur repliquat congé
                                            annuel</option>
                                        <option value="Avec solde (aucune retenue sur le salaire) ">Avec solde (aucune
                                            retenue sur le salaire) </option>
                                        <option value="Sans solde (le nombre de jours pris est retenu sur le salaire)">Sans
                                            solde (le nombre de jours pris est retenu sur le salaire) </option>
                                    </select>
                                    @error('Type_de_congé')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Signature du demandeur</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Signature_du_demandeur"
                                        placeholder="Signature du demandeur"
                                        @error('Signature_du_demandeur') is-invalid @enderror>
                                    @error('Signature_du_demandeur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date du remplissage</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Date_du_remplissage"
                                        placeholder=" Date du remplissage"
                                        @error('Date_du_remplissage') is-invalid @enderror>
                                    @error('Date_du_remplissage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Etat_1</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Etat_1" placeholder="Etat_1"
                                        @error('Etat_1') is-invalid @enderror>
                                    @error('Etat_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date de l'avis du supérieur hiérarchique </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date de l'avis du supérieur hiérarchique"
                                        placeholder="Nom et prénom du conducteur"
                                        @error('Date_de_l_avis_du_sup') is-invalid @enderror>
                                    @error('Date_de_l_avis_du_sup')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Signature du sup</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Signature_du_sup"
                                        placeholder="Télépone du conducteur"
                                        @error('Signature_du_sup') is-invalid @enderror>
                                    @error('Signature_du_sup')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Etat_2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Etat_2" placeholder="Etat_2"
                                        @error('Etat_2') is-invalid @enderror>
                                    @error('Etat_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date de l'avis du coordonnateur</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date_de_l_avis_du_coordo"
                                        placeholder="Date_de_l_avis_du_coordo"
                                        @error('Date_de_l_avis_du_coordo') is-invalid @enderror>
                                    @error('Date_de_l_avis_du_coordo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Signature_du_coordo</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Signature_du_coordo"
                                        placeholder="Signature_du_coordo"
                                        @error('Signature_du_coordo') is-invalid @enderror>
                                    @error('Signature_du_coordo')
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
                                    <a href="{{ route('absences.absence') }}"
                                        class="btn btn-danger  float-end">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
