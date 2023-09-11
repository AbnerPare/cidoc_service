@extends('layout')

{{-- titre --}}
@section('titre')
    Validation
@endsection

{{-- début contenu --}}
@section('contenu')
@if (session("message"))
 <div class="alert-success">{{$messages}}</div>
    
@endif
    <br>
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
            <br>
            <h6>
                <u> Lieu :</u> {{ $user->Lieu }} (Region du {{ $user->Région }})
            </h6><br>
            <h6><u>Equipe de mission:</u></h6>
            <p class="ml-5"> - {{ $user->Prémière }} </p>
            <p class="ml-5"> - {{ $user->Deuxième }} </p>
            <p class="ml-5"> - {{ $user->Troisième }} </p>
            <p class="ml-5"> - {{ $user->Conducteur }} ( Conducteur), Tel : {{ $user->Tel_cond }} </p>

            <br>
            <div class="d-flex ">
                <h6> <u> Moyen de transport</u>:</h6>
                <p class="ml-4">Véhicule {{ $user->Véhicule }}</p>
                <p class="ml-4"> Immatriculé {{ $user->Immatriculation }}</p>

            </div>
            <div class="d-flex ">
                <h6>DEPART:</h6>
                <p class="ml-4">{{ $user->Départ }}</p>
            </div>

            <div class="d-flex">
                <h6>RETOUR : </h6>
                <p class="ml-4">{{ $user->Départ }}</p>
            </div>

            <p style="text-align: center">09 BP 753 Ouagadougou 09, Burkina faso.</p>
            <p style="text-align: center">Téléphone : +226 25505443. E-mail: <a
                    href="mailto:infocidoc@yahoo.fr ">infocidoc@yahoo.fr</a>-<a
                    href="mailto:infocidoc@centrecitoyen.org">infocidoc@centrecitoyen.org</a>
            </p>
            <p style="text-align: center">Récépissé N°00000527501 du 26 Mars 2019 - IFU N° 00073032Y</p>
            <p style="text-align: center">Site Web : <a href="www.centrecitoyen.org">www.centrecitoyen.org</a> </p>
        <h4 style="text-align: right" class="mr-5">Le coordonnateur</h4><br>
        <h4 style="text-align: right">Kounkinè Augustin SOME</h4><br>
        <a href="" class="btn btn-success">Valider</a>
        <a href="" class="btn btn-danger">Regeter</a>
        
        </div><br>
    @endforeach
    {{-- fin contenu --}}
@endsection
