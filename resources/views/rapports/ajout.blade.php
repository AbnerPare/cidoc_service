@extends('layout')



{{-- titre --}}
@section('titre')
    Ajouter
@endsection




{{-- debut contenu --}}
@section('contenu')
    <div class="container "><br>
        <div class="row justify-content-center ">
            <div class="col-md-7 bg-success" style="border-radius: 20px ; border:solid 10px rgb(64, 170, 64)">
                <div class="card" style="border-radius: 20px ">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                       <h4>Rapports de project</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" >
                        <form class="w-px-500 p-3 p-md-3" action="{{ route('rapports.stor') }}" method="post"
                            enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Titre</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Titre" placeholder="Titre"
                                        @error('Titre') is-invalid @enderror>
                                    @error('Titre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Localité</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Localité" placeholder="Localité"
                                        @error('Localité') is-invalid @enderror>
                                    @error('Localité')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Durabilité</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Durabilité" placeholder="Durabilité"
                                        @error('Durabilité') is-invalid @enderror>
                                    @error('Durabilité')
                                        <span class="invalid-feedback" role="alert">
                                            <strong >{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Département</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Département">
                                        <option value="" aria-placeholder="">Sélectionnez un département</option>
                                        <option value="Actions DED">Actions DED</option>
                                        <option value="Actions DHC">Actions DHC</option>
                                        <option value="Action Protection">Action Protection</option>
                                        <option value="Actions administrative">Actions administrative</option>
                                        <option value="Actions logistique">Actions logistique</option>
                                    </select>
                                    @error('Département')
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
                                    <a href="{{ route('rapports.rapport') }}" class="btn btn-danger  float-end">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
