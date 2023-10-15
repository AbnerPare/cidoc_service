@extends('layout')

@section('titre')
    Ajouter
@endsection

@section('contenu')
<div class="container "><br>
    <div class="row justify-content-center ">
        <div class="col-md-7 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
            <div class="card" style="border-radius: 20px ; border: none ">
                <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                    <h4> Ajouter le résumé d'une action en cours</h4>
                </div>
                @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                <div class="card-body"style="background-color: rgb(206, 206, 195)">
                    <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('resumes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Description" placeholder="Description" @error('Description') is-invalid @enderror maxlength="50">
                                @error('Description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Thématique</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="Thématique">
                                    <option value="" aria-placeholder="">Sélectionnez une thématique</option>
                                    <option value="Actions DED">Actions DED</option>
                                    <option value="Actions DHC">Actions DHC</option>
                                    <option value="Action Protection">Action Protection</option>
                                    <option value="Actions administrative">Actions administrative</option>
                                    <option value="Actions logistique">Actions logistique</option>
                                </select>
                                @error('Thématique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Etat</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="Etat">
                                    <option value="" aria-placeholder="">Sélectionnez un état</option>
                                    <option value="En cours"> En cours </option>
                                    <option value="déjà exécutée"> déjà exécutée </option>
                                </select>
                                @error('Etat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Fichier PDF</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="pdf_file">
                                @error('pdf_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success text-white">Ajouter</button>
                                <a href="{{ route('resumes.index') }}" class="btn btn-danger float-end">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
