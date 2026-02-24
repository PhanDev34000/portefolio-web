<?php
require_once('fonctions.php'); // Inclure le fichier contenant la fonction isUserLoggedIn()

if (!isUserLoggedIn()) {
    header("Location: connexion.php");
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
            <!--   En-Tête   (cf header.php + CSS à part :  header.css)     -->
            <?php require_once(__DIR__ . '/header.php'); ?>
        </header>
        <main>
            
            <div class="espace">
            <h1>Dans quel espace souhaitez-vous entrer ?</h1>
                <div class="conn_client">
                    <a href="connexion_client.php">
                        <button class="espace_button">espace commande</button>
                    </a>
                </div>
                <div class="conn_cuisine">
                    <a href="connexion_cuisine.php">
                        <button class="espace_button">espace cuisine</button>
                    </a>          
                </div>
                <div class="image_connexion">
                    <img src="image/cuis8" alt="" id="img_connexion">
                    <img src="image/cuis7" alt="" id="img_connexion">
                    
                </div>
        </main>
        <!--           Pied de PAGE         (CSS à part : footer.css)        -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
    </body>
</html>