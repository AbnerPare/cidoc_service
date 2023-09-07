@extends('layout')



{{-- titre --}}
@section('titre')
    Ajouter
@endsection




{{-- debut contenu --}}
@section('contenu')
    <div class="container "><br>
        <div class="row justify-content-center ">
            <div class="col-md-8 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px " >
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                       <h4> Ajouter le resumé D'une action en cours</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" style="background-color: rgb(206, 206, 195)">
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
                                        @error('Prénom') is-invalid @enderror>
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
                                <label class="col-sm-3 col-form-label">Téléphone</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="Téléphone" placeholder="Téléphone"
                                        @error('Téléphone') is-invalid @enderror maxlength="8">
                                    @error('Téléphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Département</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Département" placeholder="Département"
                                        @error('Département') is-invalid @enderror>
                                    @error('Département')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Statut de présence</label>
                                <div class="col-sm-9 text-center">
                                    <select class="form-control" name="Statut_de_présence">
                                        <option value="" aria-placeholder="Sélectionnez un statut"></option>
                                        <option value="Disponiple" >Disponiple</option>
                                        <option value="En mission" >En mission</option>
                                        <option value="En congé">En congé</option>
                                        <option value="Non disponible">Non disponible</option>
                                    </select>
                                    @error('Département')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Plus de precision</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Precision" placeholder="Plus de precision"
                                        @error('Precision') is-invalid @enderror>
                                    @error('Precision')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
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
