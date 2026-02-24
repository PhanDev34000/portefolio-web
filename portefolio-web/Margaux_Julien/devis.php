<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icone/favicon.png" type="image/png">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Margaux Julien</title>
</head>
<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>
    <main>
        <div class="formulaire_devis">
            <div class="form2">
                    <div class="contact">
                        <h1>Devis</h1>
                    </div>
                    <div class="form3">
                        <form method="post" action="envoi_devis.php">
                            <input type="text" name="prenom" placeholder="Votre prénom" maxlength="20" minlength="2" id="case_contact">
                            <input type="text" name="nom" placeholder="Votre nom" maxlength="20" minlength="2" id="case_contact"><br>
                            <input type="text" name="entreprise" placeholder="Entreprise" maxlength="50" minlength="1" id="case_contact"><br>
                            <input type="email" name="email" placeholder="Votre email" id="case_contact">
                            <input type="tel" name="tel" placeholder="Votre téléphone" id="case_contact"><br><br>
                            
                            <legend>Objet du devis :</legend><br>
                            <div class="checkbox">
                                <input type="checkbox" name="objet_devis[]" value="Etudes réglementaires" id="etudes_reglementaires"/><label for="etudes_reglementaires">Etudes réglementaires</label><br>
                                <input type="checkbox" name="objet_devis[]" value="Génie écologique" id="genie_ecologique"/><label for="genie_ecologique">Génie écologique</label><br>
                                <input type="checkbox" name="objet_devis[]" value="Ecologie appliquée" id="ecologie_appliquee"/><label for="ecologie_appliquee">Ecologie appliquée</label><br>
                                <input type="checkbox" name="objet_devis[]" value="Biostatistiques" id="biostatistiques"/><label for="biostatistiques">Biostatistiques</label><br>
                            </div><br>

                            <label class="form-label" for="liste">Région de l'étude :</label>
                            <select name="region_etude" id="liste">
                                <option value="Occitanie" checked>Occitanie</option>
                                <option value="PACA">PACA</option>
                                <option value="Rhônes-Alpes">Rhônes-Alpes</option>
                                <option value="Corse">Corse</option>
                                <option value="Autre">Autre</option>
                            </select><br><br>
                            
                            <textarea name="message" placeholder="Votre message" cols="70" rows="10" id="case_contact2"></textarea><br><br>
                            <div class="captcha">
                                <div class="g-recaptcha" data-sitekey="6LcmBeUpAAAAAFA19qap6p7vlKmujiXpgDVXtNlw"></div>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Envoyer" class="cta_button5"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>
