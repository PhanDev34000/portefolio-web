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
            <div class="formulaire-contact">
               
                <!-- Formulaire de contact  -->
                <div class="form">
                    <div class="contact">
                        <h3>Besoin d'informations ?</h3>
                        <h3>Une question ?</h3>                        
                    </div>
                    <!-- Formulaire  -->
                    
                    <div class="field">                      
                        <h1 class="contact">Contactez-moi !</h1>
                            
                        <form action="envoi_contact.php" method="POST">
                        
                            <input type="text" name="prenom" placeholder="Votre prénom" maxlenght="20" minlenght="2" id="case_contact">
                        
                            <input type="text" name="nom" placeholder="Votre nom" maxlenght="20" minlenght="2" id="case_contact"><br>
                        
                            <input type="email" name="email" placeholder="Votre email" id="case_contact">
                        
                            <textarea name ="message" placeholder="Tapez votre message" cols="70" rows="10" id="case_contact2"></textarea><br>
                        <!--   Bouton d'envoi du formulaire   -->    
                            <div class="captcha">
                                <div class="g-recaptcha" data-sitekey="6LcmBeUpAAAAAFA19qap6p7vlKmujiXpgDVXtNlw"></div>
                            </div>
                            <div>                             
                                <input type="submit" name="submit" class="contact_button" value="Envoyer">                                                          
                            </div>
                        </form>
                    </div>  
                    <!--   Bouton du bas   -->
                    <div class="button2">
                        <div>
                            <h3>Pour une demande plus précise, préférez un devis !</h3>
                            <a href="devis.php">
                                <button class="contact_button2">Formulaire de Devis</button>
                            </a>
                        </div>                        
                    </div>                    
                </div>                     
            </div>            
        </main>
        <!--           Pied de PAGE                 -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
    </body>
</html>