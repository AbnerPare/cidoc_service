@extends('layout')
@section('titre')
    Formulaire de Fiches de congé
@endsection

@section('contenu')
    <div class="container mb-5"><br> <br><br>
        <div class="row justify-content-center ">
            <div class="col-md-8 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px ; border: none ">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                        <h4> Ajouter un fichier de congé</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body"style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('documentaion.storefiches_de_congé') }}"
                            method="post" enctype="multipart/form-data">
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
                                <label class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="Date" placeholder="Date"
                                        @error('Date') is-invalid @enderror>
                                    @error('Date')
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
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection
