<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title> @yield('titre') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">
    <style>
        .gradient1-background {
            background: linear-gradient(to bottom, rgba(113, 173, 237, 0.5), rgba(255, 255, 255, 0.5));

        }

        .gradient-background {
            padding: 20px;
            background: linear-gradient(to bottom, #666, #ffffff);
            /* Autres propriétés CSS au besoin */
            /* Couleur du texte pour une meilleure lisibilité */
        }

        #maCarte {
            transition: transform 0.2s ease-in-out;
        }

        #maCarte:hover {
            transform: translateY(-15px);
        }

        .background-image {
            background-image: url('img/fond.jpg');
            /* Remplacez 'votre-image.jpg' par le chemin de votre image */
            background-size: cover;
            /* Ajuste la taille de l'image pour couvrir tout l'élément */
            background-position: center;
            /* Centre l'image */
            background-repeat: no-repeat;
            /* Empêche la répétition de l'image */
            height: 100vh;
            /* Hauteur de l'image à 100% de la hauteur de la fenêtre */
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Hauteur minimale de la fenêtre visible */
            margin: 0;
            padding: 0;
        }

        .wrapper {
            flex: 1;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .text-gradient {
            background: linear-gradient(to bottom, #787777, #ffffff);
            -webkit-background-clip: text;
            /* Permet au dégradé de traverser le texte */
            color: transparent;
            /* Rend le texte transparent */
        }
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

<body class="background-image">
    <div class="tout wrapper">

        <div class="wrapper">
            <!-- Nav Bar Start -->
            <div class="nav-bar shadow ">
                <div class="container-fluid ">
                    <nav class="navbar navbar-expand-lg  navbar-dark">

                        <a href="{{ URL::to('/') }}" class="mr-5">
                            <img src="img/logo.png" alt="Logo" width="80px" height="auto">
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between  " id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{ URL::to('/') }}" class="nav-item nav-link active">Accueil</a>
                                <a href="{{ URL::to('/project') }}" class="nav-item nav-link ">Projects</a>

                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Le
                                        personnel</a>
                                    <div class="dropdown-menu">
                                        <a href="{{ URL::to('/ordre') }}" class="dropdown-item"> Ordres de missions</a>
                                        <a href="{{ URL::to('/conge') }}" class="dropdown-item"> Demandes de congés</a>
                                        <a href="{{ URL::to('/attestation') }}" class="dropdown-item">Les
                                            attestations</a>
                                        <a href="#" class="dropdown-item">Demande de fonds</a>
                                        <a href="{{ URL::to('/cre_ab') }}" class="dropdown-item">autorisation
                                            d'absence</a>
                                        <a href="{{ URL::to('/perso') }}" class="dropdown-item">Personnel disponible</a>
                                    </div>
                                </div>


                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Finance
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Demandes de fonds</a>
                                        <a href="single.html" class="dropdown-item">Fournisseur</a>
                                    </div>
                                </div>                 <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tâches
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Demander une tâche</a>
                                        <a href="single.html" class="dropdown-item">Attribuer une tâche</a>
                                    </div>
                                </div>
                                <a href="{{ URL::to('/forum') }}" class="nav-item nav-link">Forum</a>
                                <a href="{{ URL::to('/documentation') }}" class="nav-item nav-link">document</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Connexion</a>
                                    <div class="dropdown-menu">
                                        <a href="{{ URL::to('/validation') }}"
                                            class="nav-item nav-link">Coordonateur</a> </a>
                                        <a href="{{ URL::to('/gestion') }}" class="nav-item nav-link">Supérieur </a>
                                        <a href="{{ URL::to('/mission') }}" class="nav-item nav-link">Mes
                                            demandes</a>
                                        <a href="{{ URL::to('/gestion') }}"
                                            class="nav-item nav-link">Gestionnaire</a>
                                    </div>
                                </div>
                                {{-- bouton de recherche --}}
                                <form class="d-flex justify-content-end" role="search">
                                    <input class="form-control me-3" type="search" placeholder="tapez ici "
                                        required>
                                    <button class="me-2  btn-outline-success" type="submit">Recherchez</button>
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
    </div>
    {{-- fin du contenu            --}}
    <!-- Footer Start -->
    <footer class="footer text-white " style="background-color: #666;  ">
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
                                <p>
                                    <a class="fa fa-phone-alt text-white" href="tel:+22625505443"
                                        target="_blank">+226 25 50 54 43</a>
                                <p><a class="fa fa-envelope text-white" href="mailto:contact@centrecitoyen.org"
                                        target="_blank">contact@centrecitoyen.org</a></p>
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
                <a href=""> &copy; Copyright 2023 Cidoc </a>
            </div>
        </div>

    </footer>
    <!-- Footer End -->
    
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
    {{-- filtre des resumés --}}
    <script>
        $(document).ready(function() {
            $('input[name="statut-filter"]').change(function() {
                var selectedStatut = $(this).val();
                var cells = $('.statut-cell');

                cells.each(function() {
                    var cell = $(this);
                    var statutText = cell.text().trim();
                    if (selectedStatut === 'all' || selectedStatut === statutText) {
                        cell.closest('.col-12').show();
                    } else {
                        cell.closest('.col-12').hide();
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
