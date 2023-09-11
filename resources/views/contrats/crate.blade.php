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
                <div class="card" style="border-radius: 20px ;  border: none">
                    <div class="card-header bg-success text-center" style="color:#f1f7fa; font-weight:bold">
                       <h4>Contrats</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3" action="{{ route('contrats.store') }}" method="post"
                            enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Description" placeholder="Description"
                                        @error('Description') is-invalid @enderror maxlength="70">
                                    @error('Description')
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
                                    <a href="{{ route('contrats.contrat') }}" class="btn btn-danger  float-end">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
