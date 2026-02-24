<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=cook", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if(isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $motdepasse = $_POST['motdepasse'];
    $token = bin2hex(random_bytes(32)); // Génération d'un token aléatoire

    // Requête SQL corrigée pour inclure le token
    $requete = $bdd->prepare("INSERT INTO utilisateurs (nom, prenom, mail, motdepasse, token) VALUES (:nom, :prenom, :mail, :motdepasse, :token)");
    $requete->execute(
        array(
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":mail" => $mail,
            ":motdepasse" => $motdepasse,
            ":token" => $token
        )
    );
    
    // Si l'insertion réussit, on définit les cookies et on redirige
    setcookie("token", $token, time() + 3600);
    setcookie("mail", $mail, time() + 3600);

    echo "Inscription réussie ! Redirection en cours...";

    // Redirection après 3 secondes
    header("Refresh: 3; URL=connexion_espace.php");
    exit();
}
?>
