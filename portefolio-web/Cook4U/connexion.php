<?php
require_once('fonctions.php');

if (isUserLoggedIn()) {
    header("Location: connexion_espace.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icone/favicon.png" type="image/png">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="style.css">
    <title>Cook4U</title>
</head>
<body>
    <header>
        <!-- En-Tête (cf header.php + CSS à part : header.css) -->
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>
    <main>
        <?php 
        // Affichage des erreurs PHP
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cook";

        try {
            $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Base de données non fournie (projet pédagogique)" 
        }

        $error_msg = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mail = $_POST['mail'];
            $motdepasse = $_POST['motdepasse'];
            if ($mail != "" && $motdepasse != "") {
                $token = bin2hex(random_bytes(32));

                // Requête préparée pour éviter les injections SQL
                $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE mail = :mail AND motdepasse = :motdepasse");
                $req->execute(array(
                    ':mail' => $mail,
                    ':motdepasse' => $motdepasse
                ));
                $rep = $req->fetch();
                if ($rep) {
                   $bdd->exec("UPDATE utilisateurs SET token = '$token' WHERE mail = '$mail' AND motdepasse = '$motdepasse'");
                    setcookie("token", $token, time() + 3600);
                    setcookie("mail", $mail, time() + 3600);
                    header("Location: client.php");
                    exit();
                } else {
                    $error_msg = "Email ou mot de passe incorrect";
                }
            } else {
                $error_msg = "Veuillez remplir tous les champs";
            }
        }
        ?>

        <?php if ($error_msg != "") { echo "<p>$error_msg</p>"; } ?>

        <div class="ecranconnexion">
            
            <div class="form_connexion">
                <h1>Connectez-vous !</h1>
                <form method="POST" action="">
                    <label for="mail" id="intitulé">Mail</label>
                        <input type="email" placeholder="" id="mail" name="mail" required>
                    <label for="motdepasse" id="intitulé">Mot de passe</label>
                        <input type="password" placeholder="" id="motdepasse" name="motdepasse" required></br>
                    <input type="submit" value="Se connecter" name="ok" class="cta_button">
                </form>                
            </div>
            <div>
                    <a href="inscription.php">
                        <button class="cta_button1">Je n'ai pas de compte</button>
                    </a>
            </div>
            <div class="image_connexion">
                <img src="image/Rond1" alt="" id="rond1">
                <img src="image/Rond2" alt="" id="rond">
                <img src="image/Rond3" alt="" id="rond">
            </div>
        </div>
    </main>
    <!-- Pied de PAGE (CSS à part : footer.css) -->
    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>
