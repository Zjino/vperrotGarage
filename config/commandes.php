<?php

function ajouter($image, $nom, $annee, $km, $prix, $desc)
{
  try {
    require("connexion.php");

    $req = $access->prepare("INSERT INTO produits (image, nom, annee, km, prix, description) VALUES (?, ?, ?, ?, ?, ?)");

    $req->execute([$image, $nom, $annee, $km, $prix, $desc]);

    return true;
  } catch (PDOException $e) {
    echo "Erreur lors de l'ajout du produit : " . $e->getMessage();
    return false;
  }
}

function afficher()
{
  try {
    require("connexion.php");

    $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");

    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;
  } catch (PDOException $e) {
    echo "Erreur lors de la récupération des produits : " . $e->getMessage();
    return [];
  }
}


function modifier($image, $nom, $annee, $km, $prix, $desc, $id)
{
  try {
    require("connexion.php");

    $req = $access->prepare("UPDATE produits SET `image` = ?, nom = ?,annee = ?,km = ?, prix = ?, `description` = ? WHERE id=?");

    $req->execute(array($image, $nom, $annee, $km, $prix, $desc, $id));

    $req->closeCursor();

    return true;
  } catch (PDOException $e) {
    echo "Erreur lors de la modification du produit : " . $e->getMessage();
    return false;
  }
}

function afficherUnProduit($id)
{
  if (require("connexion.php")) {
    $req = $access->prepare("SELECT * FROM produits WHERE id=?");

    $req->execute(array($id));

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
  }
}


function supprimer($id)
{
  try {
    require("connexion.php");

    $req = $access->prepare("DELETE FROM produits WHERE id = ?");

    $req->execute([$id]);
  } catch (PDOException $e) {
    echo "Erreur lors de la suppression du produit : " . $e->getMessage();
  }
}

function getAdmin($email, $password)
{

  if (require("connexion.php")) {

    $req = $access->prepare("SELECT * FROM admin WHERE id=77");

    $req->execute();

    if ($req->rowCount() == 1) {

      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach ($data as $i) {
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if ($mail == $email and $mdp == $password) {
        return $data;
      } else {
        return false;
      }
    }
  }
}
