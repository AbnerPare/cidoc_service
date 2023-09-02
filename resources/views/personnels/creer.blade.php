@extends('layout')



{{-- titre --}}
@section('titre')
    Ajouter
@endsection




{{-- debut contenu --}}
@section('contenu')
    <div class="container "><br>
        <div class="row justify-content-center ">
            <div class="col-md-10 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px ">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                       <h4> Ajouter le resumé D'une action en cours</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" >
                        <form class="w-px-500 p-3 p-md-3" action="{{ route('personnels.tore') }}" method="post"
                            enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Nom" placeholder="Nom"
                                        @error('Nom') is-invalid @enderror >
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
                                        @error('LocaPrénomlité') is-invalid @enderror>
                                    @error('Prénom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="Email" placeholder="Email"
                                        @error('Email') is-invalid @enderror>
                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">téléphone</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="téléphone" placeholder="téléphone"
                                        @error('téléphone') is-invalid @enderror maxlength="8">
                                    @error('téléphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">département</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="département" placeholder="département"
                                        @error('département') is-invalid @enderror>
                                    @error('département')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Statut de présence</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Statut_de_présence">
                                        <option value="" aria-placeholder="Sélectionnez un statut"></option>
                                        <option value="Disponiple" >Disponiple</option>
                                        <option value="En mission" >En mission</option>
                                        <option value="En congé">En congé</option>
                                        <option value="Autres raisons d'indisponibilité">Autres raisons d'indisponibilité</option>
                                    </select>
                                    @error('Département')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" id="image" accept="image/*" required>                                        @error('département') is-invalid @enderror>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success text-white">Ajouter</button>
                                    <a href="{{ route('personnels.perso') }}" class="btn btn-danger  float-end">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
