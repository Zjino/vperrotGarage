<?php

// session_start();
require("../config/commandes.php");

//securité
// if (!isset($_SESSION['xRttpHo0greL39'])) {
//   header("Location: login.php");
// }

// if (empty($_SESSION['xRttpHo0greL39'])) {
//   header("Location: login.php");
// }

if (isset($_POST['valider'])) {
  if (
    isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['annee']) and isset($_POST['km'])
    and isset($_POST['prix']) and isset($_POST['desc'])
  ) {
    if (
      !empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['annee'])
      and !empty($_POST['km']) and !empty($_POST['prix']) and !empty($_POST['desc'])
    ) {

      $image = htmlspecialchars(strip_tags($_POST['image']));
      $nom = htmlspecialchars(strip_tags($_POST['nom']));
      $annee = htmlspecialchars(strip_tags($_POST['annee']));
      $km = htmlspecialchars(strip_tags($_POST['km']));
      $prix = htmlspecialchars(strip_tags($_POST['prix']));
      $desc = htmlspecialchars(strip_tags($_POST['desc']));

      try {
        ajouter($image, $nom, $annee, $km, $prix, $desc);
      } catch (Exception $e) {
        $e->getMessage();
      }
    }
  }
  /// Redirection vers la même page après la suppression
  header("Location: " . $_SERVER['PHP_SELF']);
  exit(); // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index_form.css">
</head>

<body>
  <section>
    <?php include 'header.php'; ?>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h1 class="mb-4"></h1>
          <form method="post">
            <div class="mb-3">
              <label for="image" class="form-label">Image de la voiture</label>
              <input type="text" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
              <label for="nom" class="form-label">Nom de la voiture</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
              <label for="annee" class="form-label">Année de mise en circulation</label>
              <input type="text" class="form-control" id="annee" name="annee">
            </div>
            <div class="mb-3">
              <label for="kilometres" class="form-label">Kilomètres</label>
              <input type="number" class="form-control" id="km" name="km">
            </div>
            <div class="mb-3">
              <label for="prix" class="form-label">Prix</label>
              <input type="number" class="form-control" id="prix" name="prix">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
            </div>
            <button type="submit" name="valider" class="btn btn-dark">Publier</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>