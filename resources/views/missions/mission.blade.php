@extends('layout')

{{-- titre --}}
@section('titre')
    Mission
@endsection

{{-- début contenu --}}
@section('contenu') <br>
    @foreach ($users as $user)
        <div class="container" style="width: 800px; background-color: rgb(206, 206, 195)"><br>
            <div class="row">
                <div class="col-md-5 text-right">
                    <p class="text-right">Centre d’information et de documentation citoyennes</p>
                    <p class="text-right">Connaissances, aptitudes et outils pour agir!</p>
                </div>
                <div class="col-md-2 d-flex align-items-start justify-content-center">
                    <img src="img/logo.png" alt="Image en Haut">
                </div>
                <div class="col-md-5 text-left">
                    <p class="text-left">Citizen’s information and documentation center</p>
                    <p class="text-left">Knowledge, skills and tools for action!</p>
                    <br>
                    <h6>Ouagadougou, le {{ $user->Date_du_remplissage }}</h6>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>ORDRE DE MISSION N° 202{{ $user->N°1 }}/{{ $user->N°2 }}/Cidoc/DAOL/{{ $user->N°3 }}</h6>
                    <br>
                    <h6 style="letter-spacing: 20px"> <u>
                            P r o j e t C i d o c - {{ $user->Partenaire }}</u>
                    </h6>
                    <p>:{{ $user->Project }}</p>
                    <h6 class="w-100" style="letter-spacing: 50px">
                        <u>
                            Objet
                        </u>
                    </h6>
                    <p>:{{ $user->Objet }}</p>
                </div>
            </div>
        </div>

























        <br> <br> <br> <br> <br> <br> <br> <br> <br>

        <h2 style="text-align: center; font-size: 80px">Liste des missions</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date du remplissage</th>
                                    <th>Conducteur</th>
                                    <th>Prémière</th>
                                    <th>Deuxième</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 20px">
                                <tr>
                                    <td>{{ $user->Date_du_remplissage }}</td>
                                    <td>{{ $user->Conducteur }}</td>
                                    <td>{{ $user->Prémière }}</td>
                                    <td>{{ $user->Deuxième }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- fin contenu --}}
@endsection
