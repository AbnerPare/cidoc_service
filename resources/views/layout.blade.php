<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title> @yield('titre') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">
    <style>

    </style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="color: black">


    <div class="wrapper">
        <!-- Nav Bar Start -->
        <div class="nav-bar ">
            <div class="container-fluid ">
                <nav  class="navbar navbar-expand-lg  navbar-dark ">

                    <a href="{{ URL::to('/') }}" class="mr-5">
                        <img src="img/logo.png" alt="Logo" width="80px" height="auto">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ URL::to('/') }}" class="nav-item nav-link active">Accueil</a>
                            <a href="#Projects" class="nav-item nav-link ">Projects</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Le
                                    personnel</a>
                                <div class="dropdown-menu">
                                    <a href="{{ URL::to('/mission') }}" class="dropdown-item"> Ordres de missions</a>
                                    <a href="{{ URL::to('/conge') }}" class="dropdown-item"> Demandes de congés</a>
                                    <a href="{{ URL::to('/attestation') }}" class="dropdown-item">Les attestations</a>
                                    <a href="{{ URL::to('/perso') }}" class="dropdown-item">Personnel disponible</a>
                                </div>
                            </div>


                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Finance </a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Demandes de fonds</a>
                                    <a href="single.html" class="dropdown-item">Fournisseur</a>
                                </div>
                            </div>



                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">Documentation</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item"> Fiche de congé</a>
                                    <a href="single.html" class="dropdown-item">Ordre de mission</a>
                                    <a href="blog.html" class="dropdown-item">Contrats</a>
                                    <a href="{{ URL::to('/rapport') }}" class="dropdown-item">Rapports de projets</a>
                                </div>
                            </div>



                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tâches </a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Demander une tâche</a>
                                    <a href="single.html" class="dropdown-item">Attribuer une tâche</a>
                                </div>
                            </div>
                            <a href="{{ URL::to('/forum') }}" class="nav-item nav-link">Forum</a>
                            <a href="{{ URL::to('/admin') }}" class="nav-item nav-link">admin</a>
                            {{-- bouton de recherche --}}
                            <form class="d-flex justify-content-end" role="search">
                                <input class="form-control me-3" type="search" placeholder="Rechercher ici"
                                    required>
                                <button class="me-2  btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Nav Bar End -->



    {{-- debut du contenu   --}}





    @yield('contenu')





    {{-- fin du contenu            --}}
    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container">
            <div class="section" style="text-align: center">
                <h1>Bulletin</h1>
            </div>
            <div class="form">
                <input class="form-control" placeholder="Envoyez un courriel ici">
                <button class="btn">Envoyer</button>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>Qui sommes-nous</h2>
                        <p style="text-align: justify">
                            Le « Centre d’Information et de Documentation Citoyennes – (Cidoc) » est une association
                            jouissant, aux termes du Récépissé N°2003-473/MATD/SG/DGLPAP/DOASOC du 9 septembre 2003,
                            de la reconnaissance officielle. Cette reconnaissance a été renouvelée en 2011 aux
                            termes du Récépissé N°2011-883/MATDS/SG/DGLPAP/DOASOC du 08 juillet 2011, puis en 2019
                            aux termes du Récépissé N° : N00000527501 du 26 mars 2019 conformément à la Loi
                            n°064-2015/CNT du 20 octobre 2015 portant liberté d’association au Burkina Faso.

                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="footer-link">
                                <h2>Domaines d'intervention</h2>
                                <a href="#">Education / Formation</a>
                                <a href="#">Développement de capacités</a>
                                <a href="#">Recherches et publications</a>
                                <a href="#">Education</a>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Notre objectif</h2>
                                <a href="">Vision</a>
                                <a href="">Mission</a>
                                <a href="">Valeurs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Contactez-nous</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Cité SOCOGIB Ouaga 2000, Villa N°157

                                    09 BP 753 Ouagadougou 09 Burkina Faso</p>
                                <p><i class="fa fa-phone-alt"></i>+226 25 50 54 43</p>
                                <p><i class="fa fa-envelope"></i>contact@centrecitoyen.org</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <p> <a href=""> &copy; Copyright 2023 Cidoc | par </a><a href="#">Lawadoen</a> </p>
            </div>
        </div>

    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
   
{{-- script du filtre des thématiques--}}
<script>
    $(document).ready(function () {
        $('#filter').change(function () {
            var selectedThematique = $(this).val();

            // Sélectionnez ici les éléments que vous souhaitez filtrer en fonction de la thématique.
            var elements = $('.span-thematique');

            // Parcourez les éléments et appliquez votre logique de filtrage
            elements.each(function () {
                var element = $(this);
                var thematique = element.text().trim();

                // Comparez la thématique de l'élément avec la thématique sélectionnée
                if (selectedThematique === 'all' || selectedThematique === thematique) {
                    element.parents('.col-md-2').show(); // Affichez le parent (col-md-2) si le filtre correspond
                } else {
                    element.parents('.col-md-2').hide(); // Masquez le parent sinon
                }
            });
        });
    });
</script>

{{-- script du filtre des états--}}

<script>
    $(document).ready(function () {
        $('#filt').change(function () {
            var selectedEtat = $(this).val();

            // Sélectionnez ici les éléments que vous souhaitez filtrer en fonction de l'état.
            var elements = $('.span-etat');

            // Parcourez les éléments et appliquez votre logique de filtrage
            elements.each(function () {
                var element = $(this);
                var etat = element.text().trim();

                // Comparez l'état de l'élément avec l'état sélectionné
                if (selectedEtat === 'all' || selectedEtat === etat) {
                    element.parents('.col-md-2').show(); // Affichez le parent (col-md-2) si le filtre correspond
                } else {
                    element.parents('.col-md-2').hide(); // Masquez le parent sinon
                }
            });
        });
    });
</script>





{{-- script du filtre du statu de presence--}}

<script>
    $(document).ready(function () {
    $('input[name="statut-filter"]').change(function () {
        var selectedStatut = $(this).val();
        var rows = $('.table tbody tr');

        rows.each(function () {
            var row = $(this);
            var statutCell = row.find('.statut-cell');
            var statutText = statutCell.text().trim();

            if (selectedStatut === 'all' || selectedStatut === statutText) {
                row.show(); // Affichez la ligne si le filtre correspond
            } else {
                row.hide(); // Masquez la ligne sinon
            }
        });
    });
});

</script>




    



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
