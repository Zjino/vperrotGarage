<?php

require("config/commandes.php");

$Produits = afficher();

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garage V.Perrot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/filtre.css">
    <link rel="stylesheet" href="assets/css/modale.css">
    <link rel="stylesheet" href="stylehoraire.css">

</head>

<body>
    <!-- en tête -->
    <header class="header-section">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#hero-desktop-section">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#listeProduits">Véhicules d'occasion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#listservice">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#listequip">À Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#listcontact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/login.php">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- section hero desktop -->
    <section class="hero-desktop-section d-none d-sm-block p-5 vh-100">
        <div class="container">
            <h1 class="display-1 fw-semibold text-white">Quand la mécanique <br>
                rencontre <span class="text-danger">la performances </span> <br> l'excellence prend vie.</h1>
            <p class="mt-5 text-white w-50">Le garage automobile, lieu dédié à l'entretien de vos véhicules,
                offre l'espace idéal pour réaliser vos besoins mécaniques. Que votre voiture nécessite
                une réparation, une mise au point ou simplement un entretien régulier, vous trouverez
                ici tous les services nécessaires pour répondre à vos exigences.</p>
            <p class="mt-5"><a class="btn btn-danger btn-lg" href="#">Demande Devis</a></p>
        </div>
    </section>
    <!-- section hero mobile -->
    <section class="hero-mobile-section d-sm-none py-5 px-3 vh-100">
        <div class="container">
            <h1 class="display-5 fw-semibold text-white">Quand la mécanique<br>
                lrencontre <span class="text-danger">la performances</span> l'excellence prend vie.<br> </h1>
            <p class="mt-5 text-white">Le garage automobile, lieu dédié à l'entretien de vos véhicules,
                offre l'espace idéal pour réaliser vos besoins mécaniques. Que votre voiture nécessite
                une réparation, une mise au point ou simplement un entretien régulier, vous trouverez
                ici tous les services nécessaires pour répondre à vos exigences..</p>
            <p class="mt-5"><a class="btn btn-danger btn-lg" href="#">Demande Devis</a></p>
        </div>
    </section>

    <!-- Section de filtres -->
    <section class="filters-section with-margin-top">
        <div class="container">
            <div class="row flex-md-row-reverse">
                <div class="col-lg-4">
                    <div class="filtre-range-slider">
                        <label for="anneeRange">Filtrer par année :</label>
                        <input id="anneeRange" type="range" min="1960" max="1990" class="form-range">
                        <span id="anneeRangeLabel"></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="filtre-range-slider">
                        <label for="kmMax">Filtrer par kilométrage max (km) :</label>
                        <input id="kmMax" type="range" min="40000" max="200000" class="form-range">
                        <span id="kmMaxLabel"></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="filtre-range-slider">
                        <label for="prixRange">Filtrer par prix (€) :</label>
                        <input id="prixRange" type="range" min="50000" max="1000000" class="form-range">
                        <span id="prixRangeLabel"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section de produits -->
    <section>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5" id="listeProduits">
                <?php foreach ($Produits as $produit) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?= $produit->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><?= $produit->nom ?></h3>
                                <p class="annee">Année : <?= $produit->annee ?></p>
                                <p class="km">Kilométrage : <?= $produit->km ?> km</p>
                                <p class="prix">prix : <?= $produit->prix ?> €</p>
                                <div class="details-container">
                                    <a href="#" class="details btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $produit->id ?>">Voir les détails</a>
                                    <div class="modal fade" id="exampleModal<?= $produit->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Explorez notre garage - Réservez votre essai!</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="error-message"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <!-- Détails du produit -->
                                                            <p class="descr"><?= substr($produit->description, 0.300); ?></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!-- Formulaire d'inscription -->
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Nom</label>
                                                                    <input type="text" class="form-control" id="name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input type="email" class="form-control" id="email">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="productName" class="form-label">Nom du véhicule</label>
                                                                    <input type="text" class="form-control" id="productName" name="productName">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="dateVisite" class="form-label">Date de visite au garage</label>
                                                                    <input type="date" class="form-control" id="dateVisite" name="dateVisite">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="comment" class="form-label">Commentaire</label>
                                                                    <textarea class="form-control" id="comment" rows="3"></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Soumettre</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- section "pourquoi nous choisir ?" -->
    <section class="choose-section mb-4 py-4">
        <div class="container" id="listservice">
            <h2 class="fs-1 fw-semibold text-center text-white">Pourquoi nous choisir ?</h2>
            <p class="text-white">Le garage automobile propose une gamme complète d'équipements et de services pour
                l'entretien de votre voiture, allant de la mécanique générale à la maintenance spécifique. Notre
                équipe de techniciens qualifiés est là pour vous conseiller et vous accompagner dans chaque étape,
                garantissant ainsi que votre véhicule reste en parfait état de fonctionnement. L'atmosphère
                conviviale du garage vous assure une expérience positive à chaque visite, tout en vous aidant
                à maintenir votre véhicule sur la bonne voie pour une performance optimale.</p>
            <div class="row gy-3">
                <div class="col-md-4 position-relative">
                    <img class="img-fluid w-100" src="assets/images/a3.jpg" alt="vperrot_m1">
                    <div class="texte-sur-image">
                        <h3 class="text-white">Expert carrosserie vintage</h3>

                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <img class="img-fluid w-100" src="assets/images/a2.jpg" alt="vperrot_m2">
                    <div class="texte-sur-image">
                        <h3 class="text-white"> Expert mécanique vintage</h3>

                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <img class="img-fluid w-100" src="assets/images/a4.jpg" alt="vperrot_m3">
                    <div class="texte-sur-image">
                        <h3 class="text-white">Entretien véhicule</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section équipements -->
    <section class="py-5 text-secondary">
        <div class="container" id="listequip">
            <div class="row gx-5 gy-3">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-lg" src="assets/images/a1.jpg" alt="salle garage">
                </div>
                <div class="col-md-6">
                    <h2 class="fs-1 fw-semibold text-center text-danger">Nos équipements</h2>
                    <p>Donec viverra tortor sed nulla. Phasellus nec magna. Aenean vehicula, turpis in congue
                        eleifend,
                        mauris lorem aliquam sem, eu eleifend est odio et pede. Mauris vitae mauris sit amet est
                        rhoncus
                        laoreet. Curabitur facilisis, urna vel egestas vulputate, tellus purus accumsan ante, quis
                        facilisis dui nisl a nunc.</p>
                    <p>Nulla vestibulum eleifend nulla. Suspendisse potenti. Aliquam turpis nisi, venenatis non,
                        accumsan nec, imperdiet laoreet, lacus. In purus est, mattis eget, imperdiet nec, fermentum
                        congue, tortor. Aenean ut nibh. Nullam hendrerit viverra dolor. Vestibulum fringilla, lectus
                        id
                        viverra malesuada, enim mi adipiscing ligula, et bibendum lacus lectus id sem. Cras risus
                        turpis, varius ac, feugiat id, faucibus vitae, massa. Nunc gravida nonummy felis. Etiam
                        suscipit, est sit amet suscipit sodales, est neque suscipit erat, nec suscipit sem enim eget
                        leo. In porttitor rutrum leo. Ut eget leo.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section témoignages -->
    <section class="testimonials-section bg-dark  py-4">
        <div class="container">
            <h2 class="fs-1 fw-semibold mb-4 mt-2 text-center text-white">Nos clients témoignent</h2>
            <div class="row gy-3">
                <div class="col-md-3 text-center">
                    <img class="border border-3 border-white img-fluid rounded-circle w-50" src="assets/images/ava1.jpg" alt="">
                    <h3 class="mt-3 text-white">Idor Storm</h3>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </p>
                    <p class="small text-start text-white">J'ai été impressionné par le professionnalisme de V.Perrot. Leur équipe
                        compétente a résolu rapidement le problème de ma voiture. Je recommande vivement leurs services !
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="border border-3 border-white img-fluid rounded-circle w-50" src="assets/images/ava2.jpg" alt="">
                    <h3 class="mt-3 text-white">Luna Silver</h3>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-secondary"></i>
                    </p>
                    <p class="small text-start text-white">V.Perrot a pris soin de ma voiture avec une attention
                        exceptionnelle. Leur expertise en mécanique
                        et en carrosserie a surpassé mes attentes. Je suis très satisfait de leur service</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="border border-3 border-white img-fluid rounded-circle w-50" src="assets/images/ava3.jpg" alt="">
                    <h3 class="mt-3 text-white">Max Blackwood</h3>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </p>
                    <p class="small text-start text-white">Je suis un client fidèle de V.Perrot depuis des années.
                        Leur qualité de service est inégalée. Que ce soit pour un entretien régulier ou une réparation,
                        je sais que je peux compter sur eux</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="border border-3 border-white img-fluid rounded-circle w-50" src="assets/images/ava4.jpg" alt="">
                    <h3 class="mt-3 text-white">Ludo Everhart</h3>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </p>
                    <p class="small text-start text-white">V.Perrot a été recommandé par un ami
                        et je suis ravi d'avoir suivi son conseil. Leur équipe
                        compétente et leur service client impeccable font toute
                        la différence. Je suis très satisfait de leur travail</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section contacts -->
    <section class="contacts-section py-4">
        <div class="container" id="listcontact">
            <h2 class="fs-1 fw-semibold text-center text-white">Des questions ? Parlons-en !</h2>
            <div class="form-container">
                <form id="contactForm" class="w-75 mx-auto d-md-flex align-items-md-start justify-content-md-center mt-4" action="">
                    <div class="mb-3 me-md-3">
                        <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom" required>
                    </div>
                    <div class="mb-3 me-md-3">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3 me-md-3">
                        <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-dark text-primerie" type="submit" required>Envoyer</button>
                </form>
            </div>
            <div id="successMessage" class="success-message" style="display: none;">
                Votre message a été envoyé avec succès ! Merci de nous avoir contactés.
            </div>
        </div>
    </section>
    <!-- Pied de page -->
    <footer class="footer-section bg-dark pb-2 pt-5">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-3 text-center">
                    <img class="img-fluid" src="assets/images/logo-dark.png" alt="vpperrot_footer">
                </div>
                <div class="opening-hours col-md-3 text-center bg-dark">
                    <h3 class="text-white">Horaires d'ouverture</h3>
                    <ul class="text-white" style="list-style-type:none;">

                        <?php
                        // Lecture des horaires d'ouverture à partir du fichier opening_hours.txt
                        $horaire_content = file_get_contents("horaire.txt");
                        // Convertir le contenu en tableau associatif
                        $horaire = json_decode($horaire_content, true);
                        ?>
                        <li>Lundi: <span id="monday"><?php echo $horaire['monday']; ?></span></li>
                        <li>Mardi à Vendredi: <span id="tueToFri"><?php echo $horaire['tueToFri']; ?></span></li>
                        <li>Samedi: <span id="saturday"><?php echo $horaire['saturday']; ?></span></li>
                    </ul>
                </div>
                <div class="col-md-3 text-center">
                    <h3 class="text-white">Informations</h3>
                    <p class="mb-1"><a class="text-decoration-none small text-white" href="#">Mentions légales</a>
                    </p>
                    <p class="mb-1"><a class="text-decoration-none small text-white" href="#">Conditions de ventes</a>
                </div>
                <div class="col-md-3 text-center">
                    <h3 class="text-white">Nous suivre</h3>
                    <p class="fs-1 text-center">
                        <a class="text-secondary" href="#"><i class="bi bi-instagram"></i></a>
                        <a class="text-secondary" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="text-secondary" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="text-secondary" href="#"><i class="bi bi-youtube"></i></a>
                    </p>
                </div>
            </div>
            <hr class="border border-secondary">
            <p class="text-center small text-secondary">&copy; 2024 - <a href="https://www.seb-code.fr" class="text-white text-decoration-none">Zjino Code</a> - Tous les droits réservés</p>
        </div>
    </footer>


    <script src="adminhoraire.js"></script>
    <script src="horaire.js"></script>
    <script src="assets/js/filtre.js"></script>
    <script src="assets/js/modale.js"></script>
    <script src="assets/js/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>