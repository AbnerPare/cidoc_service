@extends('layout')



{{-- titre --}}
@section('titre')
    Accueil
@endsection

@push('style')
    <style type="text/css">
        .my-active span {
            background-color: #5cb85c !important;
            color: white !important;
            border-color: #5cb85c !important;
        }

        ul.pager>li {
            display: inline-flex;
            padding: 5px;
        }
    </style>
@endpush



{{-- debut contenu --}}
@section('contenu')
    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel-2.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Citizen’s information and documentation center</h1>
                    <a class="btn animated fadeInUp" href="http://www.centrecitoyen.org/">En savoir plus</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel-3.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Centre d’information et de documentation citoyennes</h1>
                    <a class="btn animated fadeInUp" href="http://www.centrecitoyen.org/">En savoir plus</a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->



    <h1 style="text-align: center">A propos</h1>
    <hr>
    <h2 class="action">Les Actions en cours</h2>

    <a href="{{ route('resumes.ajouter') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>


    <div class="container-fluid">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-2 mt-3 bg-success"
                    style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white">
                    <div class="card" style="border-top-right-radius: 50px; border:solid 5px rgb(64, 170, 64)">
                        <div class="card-body">
                            <h6 class="bg-success text-black p-2">{{ $user['Département'] }}</h6>
                            <img src="img/logo.png" class="card-img-top" alt="...">
                            <div>
                                <p style="color: black">Titre: {{ $user['Titre'] }} <br>
                                    Localité: {{ $user['Localité'] }}<br>
                                    Durabilité: {{ $user['Durabilité'] }}</p><br>
                                <a href="{{ asset('storage/' . $user->pdf_path) }}"target="_blank"
                                    class="btn btn-info">Ouvrir</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- fin contenu --}}
@endsection
