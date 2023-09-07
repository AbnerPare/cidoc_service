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
                <nav class="navbar navbar-expand-lg  navbar-dark ">

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
                                    <a href="{{ URL::to('/ordre') }}" class="dropdown-item"> Ordres de missions</a>
                                    <a href="{{ URL::to('/conge') }}" class="dropdown-item"> Demandes de congés</a>
                                    <a href="{{ URL::to('/attestation') }}" class="dropdown-item">Les attestations</a>
                                    <a href="#" class="dropdown-item">Demande de fonds</a>
                                    <a href="#" class="dropdown-item">autorisation d'absence</a>
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
                                    <a href="{{ URL::to('/soumissions/create') }}" class="dropdown-item"> Fiche de congé *create</a>
                                    <a href="{{ URL::to('/soumissions/show') }}" class="dropdown-item">Ordre de mission *index</a>
                                    <a href="{{ URL::to('/soumissions/valider/{soumission}') }}" class="dropdown-item">Contrats *valider</a>
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
                            <a href="{{ URL::to('/mission') }}" class="nav-item nav-link">admin</a>
                            {{-- bouton de recherche --}}
                            <form class="d-flex justify-content-end" role="search">
                                <input class="form-control me-3" type="search" placeholder="Rechercher ici" required>
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
    <div class="footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>Trouvez-nous</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.081464266981!2d-1.5497756999999999!3d12.310300699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e971bf3dd14c3%3A0xd58f45de062c1865!2sCidoc%20-%20cit%C3%A9%20Socogib%20Ouaga2000%20Villa%20N%C2%B0348!5e0!3m2!1sfr!2sbf!4v1693947490694!5m2!1sfr!2sbf"
                            width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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

    {{-- script du filtre des thématiques --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sélectionnez les éléments de filtre
            var filterThematique = document.getElementById("filter");
            var filterEtat = document.getElementById("filt");
    
            // Sélectionnez la liste d'utilisateurs
            var userList = document.getElementById("user-list");
    
            // Écoutez les changements dans les filtres
            filterThematique.addEventListener("change", function() {
                var selectedThematique = filterThematique.value;
                var selectedEtat = filterEtat.value;
    
                // Parcourez les éléments de la liste d'utilisateurs
                var users = userList.getElementsByClassName("col-sm-2");
    
                for (var i = 0; i < users.length; i++) {
                    var user = users[i];
                    var thematique = user.querySelector(".span-thematique").textContent.trim();
                    var etat = user.querySelector(".span-etat").textContent.trim();
    
                    // Affichez ou masquez l'utilisateur en fonction des filtres sélectionnés
                    if ((selectedThematique === "all" || thematique === selectedThematique) &&
                        (selectedEtat === "all" || etat === selectedEtat)) {
                        user.style.display = "block";
                    } else {
                        user.style.display = "none";
                    }
                }
            });
    
            filterEtat.addEventListener("change", function() {
                var selectedThematique = filterThematique.value;
                var selectedEtat = filterEtat.value;
    
                var users = userList.getElementsByClassName("col-sm-2");
    
                for (var i = 0; i < users.length; i++) {
                    var user = users[i];
                    var thematique = user.querySelector(".span-thematique").textContent.trim();
                    var etat = user.querySelector(".span-etat").textContent.trim();
    
                    if ((selectedThematique === "all" || thematique === selectedThematique) &&
                        (selectedEtat === "all" || etat === selectedEtat)) {
                        user.style.display = "block";
                    } else {
                        user.style.display = "none";
                    }
                }
            });
        });
    </script>
    
    {{-- script du filtre du statu de presence --}}

    <script>
        $(document).ready(function() {
            $('input[name="statut-filter"]').change(function() {
                var selectedStatut = $(this).val();
                var rows = $('.table tbody tr');

                rows.each(function() {
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


    {{-- fitre du raport de projet --}}
    <script>
        $(document).ready(function() {
            $('input[name="thematique-filter"]').change(function() {
                var selectedThematique = $(this).val();

                // Affichez tous les éléments avec la classe .col-md-2
                $('.col-md-2').show();

                // Si une thématique est sélectionnée, masquez les éléments qui ne correspondent pas
                if (selectedThematique !== "") {
                    $('.col-md-2').filter(function() {
                        return $(this).data('thematique') !== selectedThematique;
                    }).hide();
                }
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
