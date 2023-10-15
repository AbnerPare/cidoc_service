@extends('layout')
@section('titre')
    Formulaire DHC
@endsection

@section('contenu')
    <div class="container "><br>
        <div class="row justify-content-center ">
            <div class="col-md-8 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px ; border: none ">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                        <h4> Ajouter le résumé DHC</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body"style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('resumes.storedhc') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Description" placeholder="Description"
                                        @error('Description') is-invalid @enderror >
                                    @error('Description')
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
                                        <option value="Exécuté">Exécuté </option>
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

                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
