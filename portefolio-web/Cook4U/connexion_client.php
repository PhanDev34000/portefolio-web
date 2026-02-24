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
            <div class="esp_client">
                <h1>Epace Commande</h1>
                <div class="menu_client">
                    <a href="infos_perso.php">
                            <button class="menu_button">Infos Personnelles</button> 
                    </a>
                    <a href="historique.php">
                            <button class="menu_button">Historique de Commande</button> 
                    </a>
                    <a href="panier.php">
                            <button class="menu_button">Mon Panier</button> 
                    </a>
                    <a href="commande_client.php">
                            <button class="menu_button">Mes Commandes validées</button> 
                    </a>
                    <a href="commantaire_client.php">
                            <button class="menu_button">Mes Commentaires</button> 
                    </a>
                    <a href="supprimer_compte.php" onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?')">
                            <button class="menu_button">Supprimer mon compte</button> 
                    </a>
                    <a href="connexion_cuisine.php">
                            <button class="menu_button">Espace Cuisine</button> 
                    </a>
                </div>
            </div>
        </main>
        <!--           Pied de PAGE         (CSS à part : footer.css)        -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
    </body>
</html>