@extends('layout')



{{-- titre --}}
@section('titre')
    Accueil
@endsection



{{-- debut contenu --}}
@section('contenu')
    <!-- Carousel Start -->

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ci.png" alt="Carousel Image">
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Citizen’s information and documentation center</h1>
                    <a class="btn animated fadeInUp" href="http://www.centrecitoyen.org/">En savoir plus</a>
                </div>
            </div>

            {{-- <div class="carousel-item">
                <img src="img/lo.avif" alt="Carousel Image">
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Centre d’information et de documentation citoyennes</h1>
                    <a class="btn animated fadeInUp" href="http://www.centrecitoyen.org/">En savoir plus</a>
                </div>
            </div> --}}
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
@endsection
