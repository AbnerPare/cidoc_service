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




    <!-- Carousel Start -->
    <div class="gradient-background  text-white col-12">

        <div class="text-center">
            <h1 class="text-white">A la une</h1>
        </div>
        <div id="carousel" class="carousel slide mb-4" data-ride="carousel" style="width: 60%">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/u1.jpeg" alt="Carousel Image">
                    <div class="carousel-caption d-flex justify-content-end align-items-end">
                        <p class="bg-info mb-0 animated fadeInLeft d-sm-block">Le Cidoc est présent à la rencontre mensuelle du cadre de concertation entre le Haut-Commissariat des droits de l'homme et les OSC</p>
                    </div>
                </div>
        
                <div class="carousel-item">
                    <img src="img/u2.jpeg" alt="Carousel Image">
                    <div class="carousel-caption d-flex justify-content-end align-items-end">
                        <p class="bg-info mb-0 animated fadeInLeft d-sm-block">La mission de l'équipe de Fada a pris fin aujourd'hui. L'hélico va bientôt décoller pour Ouaga. A bientôt</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/u3.jpeg" alt="Carousel Image">
                    <div class="carousel-caption d-flex justify-content-end align-items-end">
                        <p class="bg-info mb-0 animated fadeInLeft d-sm-block">Hello Chers Collègues. Recevez notre bonsoir depuis le bureau Cidoc de Dori.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 

    <div class="container" style="width:80%">
        <div class="row bg-success">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="filter" class="text-white">
                        <h5> Filtrer par Thématique :</h5>
                    </label>
                    <select class="form-control" id="filter">
                        <option value="all">Toutes les thématiques</option>
                        <option value="Actions DED">Actions DED</option>
                        <option value="Actions DHC">Actions DHC</option>
                        <option value="Action Protection">Action Protection</option>
                        <option value="Actions administrative">Actions administrative</option>
                        <option value="Actions logistique">Actions logistique</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="filt" class="text-white">
                        <h5>Filtrer par Etat :</h5>
                    </label>
                    <select class="form-control" id="filt">
                        <option value="all">Tous les Etats</option>
                        <option value="En cours">En cours</option>
                        <option value="déjà exécutée">déjà exécutée</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid" id="filteredUsers">
        <div class="container-fluid">
            <div class="row" id="user-list">
                @foreach ($users as $user)
                    <div class="col-6 col-sm-2 mt-3 bg-success"
                        style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white; position: relative;">
                        <div style="border-top-right-radius: 50px">
                            <div class="card-body">
                                <h6 class=" text-black span-thematique"
                                    style="background: white; border-radius: 10px; text-align: center">
                                    {{ $user['Thématique'] }}
                                </h6>
                                <p class="span-etat"
                                    style="background: rgb(106, 4, 4); padding: 2px; border-radius: 20px; text-align: center; color: white">
                                    {{ $user['Etat'] }}
                                </p>
                                <img src="img/logo.png" alt="..." width="100" class="d-none d-sm-block">
                                <p style="color: white">
                                    {{ $user['Description'] }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank" class="btn btn-info pb-0"
                            style="position: absolute; top: 95%; left: 50%; transform: translate(-50%, -50%);">Ouvrir</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 --}}

    {{-- fin contenu --}}
@endsection
