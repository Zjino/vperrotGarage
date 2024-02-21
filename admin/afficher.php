<?php
// session_start();
require("../config/commandes.php");


$produits = afficher();


?>

<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Tous les produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Pour les petits écrans, les images seront plus grandes */
        @media (max-width: 768px) {
            .small-screen-image {
                width: 500%;
                /* Ajuste la largeur à 100% du conteneur parent */
                max-height: 500px;
                /* Limite la hauteur pour éviter que les images ne deviennent trop grandes */
            }
        }

        /* Pour les écrans de bureau uniquement */
        @media (min-width: 769px) {
            .large-screen-image {
                max-width: 80px;
                /* Ajustez la largeur maximale selon vos besoins */
                height: auto;
                /* Rétablissez la hauteur automatique pour maintenir les proportions */
            }
        }
    </style>
</head>

<body>
    <section>
        <?php include 'header.php'; ?>
        <div class="album py-5  mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">image</th>
                                        <th scope="col">nom</th>
                                        <th scope="col">annee</th>
                                        <th scope="col">km</th>
                                        <th scope="col">prix</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Editer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produits as $produit) : ?>
                                        <tr>
                                            <th scope="row"><?= $produit->id ?></th>
                                            <td>
                                                <img src="<?= $produit->image ?>" class="img-fluid rounded large-screen-image" alt="<?= $produit->nom ?>">
                                            </td>
                                            <td><?= $produit->nom ?></td>
                                            <td><?= $produit->annee ?></td>
                                            <td><?= $produit->km ?></td>
                                            <td style="font-weight: bold; color: green;"><?= $produit->prix ?>€</td>
                                            <td><?= substr($produit->description, 0, 100); ?>...</td>
                                            <td class="edit-cell"><a href="editer.php?id=<?= $produit->id ?>"><i class="fa fa-pencil-square bg-light " style="font-size: 25px;color:black ;"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </style>
    </section>

</body>

</html>