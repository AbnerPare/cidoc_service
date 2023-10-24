@extends('layout')



{{-- titre --}}
@section('titre')
    Gestion
@endsection



{{-- debut contenu --}}
@section('contenu')
    <!-- Carousel Start -->
    <br><br>
    <div class="container-fluid services mb-5">
        <div class="container-fluid">
            <div class="row services-inner">
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Le personnel</h6>
                        <a href="{{ route('personnels.creer') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiche de contrat</h6>
                        <a href="{{ route('contrats.crate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>rapport de projet</h6>
                        <a href="{{ route('rapports.ajout') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Resumé des actions DED</h6>
                        <a href="{{ route('resumes.dedcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Resumé des actions DHC</h6>
                        <a href="{{ route('resumes.dhccreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Resumé des actions protections</h6>
                        <a href="{{ route('resumes.protectioncreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Resumé des actions administrative</h6>
                        <a href="{{ route('resumes.administrativecreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Resumé des actions logistique</h6>
                        <a href="{{ route('resumes.logistiquecreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches de congé</h6>
                        <a href="{{ route('documentation.fiches_de_congécreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches de mission</h6>
                        <a href="{{ route('documentation.fiches_de_missioncreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches de contrat</h6>
                        <a href="{{ route('documentation.fiches_de_contratcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches DED</h6>
                        <a href="{{ route('documentation.fiches_dedcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches DHC</h6>
                        <a href="{{ route('documentation.fiches_dhccreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches d'action protection</h6>
                        <a href="{{ route('documentation.fiches_protectioncreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Fiches d'action administrative</h6>
                        <a href="{{ route('documentation.fiches_administrative') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- fin contenu --}}
@endsection
