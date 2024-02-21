<?php
session_start();
require("../config/commandes.php");

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['email']) and !empty($_POST['motdepasse'])) {
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getAdmin($email, $motdepasse);

        if ($admin) {
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: admin/');
        } else {
            header('Location: afficher.php');
        }
    }
}

// // Redirection vers la même page après la suppression
// header("Location: " . $_SERVER['PHP_SELF']);
// exit(); // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - vperrot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- Image du logo -->
                    <img src="../assets/images/logo-dark.png" alt="Logo" class="img-fluid mb-4 mx-auto d-block" style="max-width: 300px;">
                    <!-- Texte "Connexion" -->
                    <div class="connexion-text">Connexion</div>
                    <!-- Formulaire de connexion -->
                    <div class="login-form">
                        <form method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="motdepasse" class="form-label">Mot de passe</label>
                                <input type="password" name="motdepasse" class="form-control">
                            </div>
                            <button type="submit" name="envoyer" class="btn btn-dark btn-block">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/login.js"></script>

</body>

</html>