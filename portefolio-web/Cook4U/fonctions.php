<?php
function isUserLoggedIn() {
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

    // Vérifier si le cookie token existe
    if (isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];
        $mail = $_COOKIE['mail'];

        // Requête pour vérifier si le token correspond à celui de l'utilisateur
        $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE mail = :mail AND token = :token");
        $req->execute(array(
            ':mail' => $mail,
            ':token' => $token
        ));
        $rep = $req->fetch();

        // Si l'utilisateur est trouvé, il est connecté
        if ($rep) {
            return true;
        }
    }

    // Si le cookie n'existe pas ou si le token ne correspond pas, l'utilisateur n'est pas connecté
    return false;
}

?>