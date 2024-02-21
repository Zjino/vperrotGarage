<?php
require("../config/commandes.php");

if (isset($_POST['valider'])) {
  if (isset($_POST['idproduit'])) {
    if (!empty($_POST['idproduit'])) {

      $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

      try {
        supprimer($idproduit);
      } catch (Exception $e) {
        echo $e->getMessage(); // Affichage de l'éventuelle erreur
      }
    }
  }

  // Redirection vers la même page après la suppression
  header("Location: " . $_SERVER['PHP_SELF']);
  exit(); // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
}

$Produits = afficher();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin-form.css">
</head>

<body>
  <section>
    <?php include 'header.php'; ?>
    <div class="container mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4 py-5" id="listeProduits">
        <h1 class="mb-4"></h1>
        <div class="col-12">
          <form method="post" action="supprimer.php">
            <div class="mb-3 d-flex justify-content-start align-items-center">
              <label for="prix" class="form-label me-3"></label>
              <input type="number" class="form-control me-3" id="idproduit" name="idproduit" required>
              <button type="submit" name="valider" class="btn btn-dark">Supprimer</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 py-5" id="listeProduits">
        <?php foreach ($Produits as $produit) : ?>
          <div class="col">
            <div class="card position-relative">
              <img src="<?= $produit->image ?>" class="card-img-top" alt="...">
              <h6 class="card-title position-absolute top-0 start-0 bg-dark text-white px-2 py-1"><?= $produit->id ?></h6>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>