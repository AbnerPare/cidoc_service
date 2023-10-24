@extends('layout')

@section('titre')
    Fiches de congé
@endsection

@section('contenu')
    <div class=" gradient-background">
        <h1 class="text-center text-gradient">Fiches de congé</h1>
<br>
        <div class="container-fluid mb-5">
            <div class="row" style="border-radius: 20px">
                @foreach ($fiches as $fiche)
                    <div class="col-6 col-md-2 col-sm-6 mb-4 wow fadeIn" id="maCarte">
                        <a href="{{ asset('storage/' . $fiche->pdf_path) }}" target="_blank" class="card"
                            style="background-color: rgb(136, 202, 202); text-align: center; color: black;">
                            <h6 class="text-danger">{{ $fiche->Date }}</h6>
                            <h6 style="text-transform: uppercase">{{ $fiche->Nom }}</h6>
                            <h6>{{ $fiche->Prénom }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
