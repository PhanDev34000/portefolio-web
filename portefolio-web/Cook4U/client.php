<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$mail = $_COOKIE['mail'];
$token = $_COOKIE['token'];

if($token) {
    $req = $bdd->query("SELECT * FROM utilisateurs WHERE mail = '$mail' AND token = '$token'");
    $rep = $req->fetch();

    if ($rep['prenom'] != false) {
        echo "<!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='refresh' content='3;url=connexion_espace.php'>
            <title>Redirection</title>
        </head>
        <body>
            <p>Vous êtes bien connecté " . $rep['prenom'] . " !</p></br>
            <p>Vous allez être redirigé(e) dans quelques secondes !</p>
        </body>
        </html>";
    } else {
        header("Location: connexion.php");
        exit();
    }
} else {
    header("Location: connexion.php");
    exit();
}
?>
