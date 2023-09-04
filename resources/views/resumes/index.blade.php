@extends('layout')



{{-- titre --}}
@section('titre')
    Accueil
@endsection



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




    <!-- Carousel Start -->


    <h1 id="Projects" class="text-white">.<br></h1>
    <a href="{{ route('resumes.ajouter') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>
    <h2 class="action " id="Projects" style="padding: 10px; font-size:40px">Projects</h2>





    <div class="container" style="width: 800px">
        <div class="row bg-success">
            <div class="col">
                <div class="form-group">
                    <label for="filter" class="text-white"> <h5> Filtrer par Thématique :</h5></label>
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
            <div class="col">
                <div class="form-group">
                    <label for="filt" class="text-white"> <h5>Filtrer par Etat :</h5> </label>
                    <select class="form-control" id="filt">
                        <option value="all">Tous les Etats</option>
                        <option value="En cours">En cours</option>
                        <option value="déjà exécutée">déjà exécutée</option>
                    </select>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid" id="filteredUsers">
        <div class="container-fluid">
            <div class="row" id="user-list">
                @foreach ($users as $user)
                    <div class="col-md-2 mt-3 bg-success"
                        style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white">
                        <div style="border-top-right-radius: 50px">
                            <div class="card-body">
                                <h6 class=" text-black span-thematique"
                                    style="background: white; border-radius: 10px; text-align: center">
                                    {{ $user['Thématique'] }}
                                </h6>
                                <p class="span-etat"
                                    style="background: rgb(106, 4, 4); padding: 2px; border-radius: 20px; text-align: center; color: white">
                                    {{ $user['etat'] }}
                                </p>
                                <img src="img/logo.png" alt="..." width="100">
                                    <p style="color: white">
                                        {{ $user['Description'] }}
                                    </p>
                            </div>
                        </div>
                        <a href="{{ asset('storage/' . $user->pdf_path) }}"target="_blank"
                            class="btn btn-info pb-0">Ouvrir</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- fin contenu --}}
@endsection
