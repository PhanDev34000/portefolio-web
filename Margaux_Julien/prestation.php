<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="icone/favicon.png" type="image/png">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="footer.css">
        <title>Margaux Julien</title>
        <!--   Metadescription   -->
        <meta name="description" content="Différentes prestations sont proposées : études règlementaires dont VNEI, Natura 2000, application de la séquence ERC, translocations végétales, plan de gestion, biostatistiques"/>       

    </head>
    <body>
        <!--   En-Tête   -->
        <header>
            <?php require_once(__DIR__ . '/header.php'); ?>
        </header>
        <main>
            <!--   1ere Photo   -->
            <div class="photo">
                <div class="image">
                <p class="image-text">Gagée des champs(<em>Gagea villosa</em>)</p>
                    <img src="image/img2.jpg" alt="">                          
                </div>
            </div>

            <!--   Bandeau de présentation   -->
            <div class="titre1">
                <div>
                    <h1>Mes prestations : </h1>  
                </div>                
            </div>

            <!--   Bandeau 1 : Etudes Réglementaires -->
            <div class="titre2">
                <div class="container3">
                    <div class="left-content">
                        <h2>Etudes Réglementaires : </h2>                
                        <div>                    
                            <p>Réalisation de diagnostics écologiques, dossiers Natura 2000, VNEI, CNPN, mesures ERC. Accompagnement de l'aménageur dans les différentes étapes des dossiers réglementaires pour le volet biodiversité. Expertise de terrain habitats/flore.</p>                    
                        </div>    
                        <div>               
                            <a href="devis.php">
                                <button class="cta_button3">Devis</button> 
                            </a>                            
                        </div>
                    </div>
                    <div class="right-content"> 
                        <img src="icone/etude.png" alt="" /> 
                    </div>
                </div>
            </div>

            <!--   Bandeau 2 : Génie Ecologique  -->
            <div class="titre3">
                <div class="container2">
                    <div class="left-content">
                        <img src="icone/nrj.png" alt="" />
                        
                    </div>
                    <div class="right-content"> 
                        <h2>Génie Ecologique : </h2>                
                        <div>                    
                            <p>Expertise sur les translocations végétales réglementaires depuis la rédaction d'un protocole expérimental jusqu'à la réalisation de la translocation avec suivi scientifique associé. Possibilité de travailler sur d'autres mesures avec réflexion expérimentale pour l'amélioration des mesures ERC.</p>                    
                        </div>    
                        <div>               
                            <a href="devis.php">
                                <button class="cta_button">Devis</button> 
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>

            <!--   Bandeau 3 : Ecologie Appliquée -->            
            <div class="container3">
                <div class="left-content">
                    <h2>Ecologie Appliquée : </h2>                
                    <div>                    
                        <p>Rédaction de plans de gestions, réalisation de palettes végétales, et autres projets à l'interface de la biodiversité et de l'humain.</p>                    
                    </div>    
                    <div>               
                        <a href="devis.php">
                            <button class="cta_button3">Devis</button> 
                        </a>                            
                    </div>
                </div>
                <div class="right-content"> 
                    <img src="icone/terre.png" alt="" /> 
                </div>
            </div>
            

            <!--   Bandeau 4 : Biostatistique -->            
            <div class="container2">
                <div class="left-content">
                    <img src="icone/stat.png" alt="" />                        
                </div>
                <div class="right-content"> 
                    <h2>Biostatistique : </h2>                
                        <div>                    
                            <p>Réalisation de traitement de données et d'analyses statistiques environnementales à l'aide de R</p>                    
                        </div>    
                        <div>               
                            <a href="devis.php">
                                <button class="cta_button">Devis</button> 
                            </a>                            
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