<?php
require_once('fonctions.php');

if (!isUserLoggedIn()) {
    header("Location: connexion.php");
    exit();
}

$mail = $_COOKIE['mail'];

try {
    $bdd = new PDO("mysql:host=localhost;dbname=cook", 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $bdd->prepare("DELETE FROM utilisateurs WHERE mail = :mail");
    $req->execute(array(
        ':mail' => $mail
    ));

    setcookie("token", "", time() - 3600);
    setcookie("mail", "", time() - 3600);
    header("Location: connexion.php");
    exit();
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
