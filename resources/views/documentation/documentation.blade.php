@extends('layout')

@section('titre')
    Les documents
@endsection

@section('contenu')
    <div class="text-center gradient-background">
        <h1 class="text-gradient"> <u> Les documents</u></h1>
        <div class="container-fluid" style="height: 100%  ">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_de_congé') }}"
                        style="background-color: black; display: block; border-radius: 50%;">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Fiches de <br> congé</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4  mt-1" id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_de_mission') }}"
                        style="background-color: black; display: block; border-radius: 50%;">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Fiches de <br> mission</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_de_contrat') }}"
                        style="background-color: black; display: block; border-radius: 50%;">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Fiches de <br> contrat</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1" id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/rapport_de_project') }}"
                        style="background-color: black; display: block; border-radius: 50%;">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Rapport de project</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br>
    </div>
@endsection
