<?php
session_start(); // Démarre la session

// Vide les variables de session
$_SESSION = array();

// Détruit la session
session_destroy();

header("Location: ../index.php");


// if (isset($_SESSION['xRttpHo0greL39'])) {

// $_SESSION['xRttpHo0greL39'] = array();

// session_destroy();

// header("Location: login.php");
// }