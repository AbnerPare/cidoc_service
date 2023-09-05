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
                    <div class="card-body" >
                        <form class="w-px-500 p-3 p-md-3" action="{{ route('missions.store1') }}" method="post"
                            enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">date d'aujoud'hui</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date" placeholder="date d'aujoud'hui"
                                        @error('date') is-invalid @enderror >
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">numéro1</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="numéro1" placeholder="numéro1"
                                        @error('numéro1') is-invalid @enderror>
                                    @error('numéro1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">numéro2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="numéro2" placeholder="numéro2"
                                        @error('numéro2') is-invalid @enderror>
                                    @error('numéro2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">numéro3</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="numéro3" placeholder="numéro3"
                                        @error('numéro3') is-invalid @enderror>
                                    @error('numéro3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Project</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="project" placeholder="Description du project"
                                        @error('project') is-invalid @enderror>
                                    @error('project')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Objet</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="objet" placeholder="Objet"
                                        @error('objet') is-invalid @enderror>
                                    @error('objet')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">lieu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lieu" placeholder="lieu"
                                        @error('lieu') is-invalid @enderror>
                                    @error('lieu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">La région</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="région" placeholder="La région"
                                        @error('région') is-invalid @enderror>
                                    @error('région')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Première personne</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="personne1" placeholder=" Nom et prénom de la première personne"
                                        @error('personne1') is-invalid @enderror>
                                    @error('personne1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Deuxième personne</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="personne2" placeholder="Nom et prénom de la deuxième personne"
                                        @error('personne2') is-invalid @enderror>
                                    @error('personne2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Troixième personne</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="personne3" placeholder="Nom et prénom de la troixième personne"
                                        @error('personne3') is-invalid @enderror>
                                    @error('personne3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Le conducteur</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="conducteur" placeholder="Nom et prénom du conducteur"
                                        @error('conducteur') is-invalid @enderror>
                                    @error('conducteur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">télépone du conducteur</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="tel_cond" placeholder="télépone du conducteur"
                                        @error('tel_cond') is-invalid @enderror>
                                    @error('tel_cond')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Véhicule</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="véhicule" placeholder="Véhicule"
                                        @error('véhicule') is-invalid @enderror>
                                    @error('véhicule')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Immatriculation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="immatriculation" placeholder="Immatriculation"
                                        @error('immatriculation') is-invalid @enderror>
                                    @error('immatriculation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date du départ</label>
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
