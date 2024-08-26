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
            <div class="ecran_inscription">
                
                <div class="form_inscription">
                    <h1>Inscrivez-vous !</h1>
                    <form method="POST" action="traitement_inscription.php">
                        <div id="ecrit_form">                            
                            <input type="text" id="nom" name="nom" placeholder="Nom" required></br></br>                            
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required></br></br>                            
                            <input type="text" id="mail" name="mail" placeholder="Email" required></br></br>                            
                            <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required></br>
                        </div>
                        <input type="submit" value="M'inscrire" name="ok">
                    </form>
                </div>
                <div class="image_connexion">
                    <img src="image/rond4" alt="" id="rond1">
                    <img src="image/rond5" alt="" id="rond1">
                    <img src="image/rond6" alt="" id="rond1">
                </div>
            </div>
            
           
            
        </main>
        <!--           Pied de PAGE         (CSS à part : footer.css)        -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
    </body>
</html>