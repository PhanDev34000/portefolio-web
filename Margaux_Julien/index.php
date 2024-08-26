<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="icone/favicon.png" type="image/png">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="style.css">
        <!--  Roboto Font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!--  Lato Font   -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <title>Margaux Julien</title> 
        <!--  Metadescription   -->
        <meta name="description" content="Réalisation d’études écologiques et réglementaires par Margaux JULIEN, écologue et chercheuse indépendante."/>       
    </head>
    <body>
        <header>
            <!--   En-Tête   (cf header.php + CSS à part :  header.css)     -->
            <?php require_once(__DIR__ . '/header.php'); ?>
        </header>
        <main>

            <!--       1ere Photo (CSS : excépté pour header & footer qui ont leur propre CSS, tout le reste du CSS est sur "style.css")        -->
            <div class="photo">
                <div class="image">
                    <p class="image-text">Ophrys de Provence (<em>Ophrys provincialis</em>)</p> 
                    <img src="image/img1.jpg" alt="photo d'une Ophrys de Provence">                                    
                </div>
            </div>

            <!--       Bandeau de Présentation          -->
            <div class="titre1">
                <h1>Présentation</h1>
            </div>
            <div class="bandeau-presentation">
                <div class="left-content">
                    <h1>Margaux JULIEN</h1>
                    <h2>Ecologue & Chercheuse Indépendante</h2>                    
                    <p id="texte_presentation">Docteure en écologie et spécialisée en translocations végétales réglementaires, je travaille depuis 4 ans sur des problématiques liées à la conservation de la biodiversité et à l'aménagement du territoire. Je vous propose un accompagnement personnalisé sur vos projets d'aménagement, que ce soit pour le volet réglementaire ou pour la mise en place des mesures.</p>                    
                </div>
                <div class="right-content">
                    <img src="image/Marg1.png" alt="portrait de Margaux Julien" /> 
                </div>
            </div>

            <!--   Bandeau : Sur Le Terrain - ...    -->
            <div class="titre1">
                <h1>Sur le terrain !</h1>
            </div>

            <!-- Bandeau de la vidéo -->
            <div class="bandeau-video">
                <div class="photo1">
                    <img src="image/img6.jpg" alt="photo d'une famille de cerfs en pleine nature" />                
                    <div class="video-container">                    
                        <video controls>
                            <source src="video/video1.mp4" type="video/mp4">    
                        </video>
                    </div>
                </div>
            </div>

            <!-- Bandeau : Ils m'ont fait confiance -->
            <div class="titre1">
                <h1>Ils m'ont fait confiance :</h1>
            </div>
            <div>
                <div class="bandeau-confiance">  
                    <div>
                        <img src="icone/Blue.png" class="icone" alt="icone de l'entreprise Blue" />                          
                        <img src="icone/Diderot.png" class="icone" alt="icone de l'ecole Diderot" />
                        <img src="icone/Castel.png" class="icone" alt="icone de l'entreprise Castel" />
                        <img src="icone/watt.png" class="icone" alt="icone de l'entreprise watt" />
                        <img src="icone/egpn.png" class="icone" alt="icone de l'entreprise egpn" />
                        <img src="icone/CBNM.png" class="icone" alt="icone de l'entreprise cbnm" />
                        <img src="icone/CEFE.png" class="icone1" alt="icone de l'entreprise CEFE" />
                        <img src="icone/sablière.png" class="icone" alt="icone de l'entreprise Sablières de la Salanque" />
                        <img src="icone/Ecotonia.png" class="icone" alt="icone de l'entreprise Ecotonia" />
                        <img src="icone/segic.png" class="icone" alt="icone de l'entreprise Segic" />                        
                    </div>
                </div>                
            </div>

            <!--   Bandeau Exemples d'Etudes   -->
            <div class="titre1">
                <h1>Exemples d'études réalisées :</h1>
            </div>
            <div class="etude">
                <!--   Bandeau Etude 1   -->
                <div class="etude_bandeau">
                    <h2 id="etude_titre">Etude 1</h2>
                        <h3 id="etude_titre2">Thèse de doctorat – Translocations végétales : bilan des connaissances, expérimentation et optimisation</h3>
                            <p id="etude_p">La translocation végétale, déplacement stratégique de végétaux pour des raisons de conservation ou réglementaires, est de plus en plus courante. Cette pratique, encadrée par la législation, vise à atténuer les impacts des projets d'aménagement sur la biodiversité. Pourtant, son efficacité et sa perception par les acteurs de l'environnement restent mitigées.
                                Dans une thèse financée par le bureau d'études Ecotonia, et au sein du Centre d’Ecologie Fonctionnelle et Evolutive (CEFE, CNRS), j’ai exploré les lacunes des protocoles actuels de translocation et proposé des améliorations. En se concentrant sur deux études de cas, l'objectif est double : mieux comprendre les défis soulevés par la pratique et optimiser les protocoles de translocation.
                                Les conclusions soulignent le besoin crucial d'améliorer la pratique de la translocation en France. Des recommandations sont avancées, allant de l'anticipation des impacts à la mutualisation des efforts, en passant par le partage d'expériences et la création de listes d'espèces prioritaires.
                            </p>
                        <div class="lien_these">
                            <a href="https://www.researchgate.net/publication/366019706_These_de_doctorat_-_Translocations_vegetales_bilan_des_connaissances_experimentation_et_optimisation " target="_blank">
                                <button class="cta_button2">Voir la Thèse</button>
                            </a>
                        </div>
                </div>
                <!--   Bandeau Etude 2   -->
                <div class="etude_bandeau">
                    <h2 id="etude_titre">Etude 2</h2>
                        <h3 id="etude_titre2">Translocation du Sérapias négligé - Ecotonia</h3>
                            <p id="etude_p">Au sein de la base aérienne de Solenzara, je réalise depuis 2020 des études sur le Sérapias négligé (Serapias neglecta) afin de mieux connaître cette espèce et déterminer comment la transloquer. Les premières études ont été réalisées dans le cadre de ma thèse. En 2024, en tant qu’indépendante, je continue de suivre ce projet en réalisant le suivi annuel des translocations en cours, et en préparant une nouvelle opération par la rédaction d’un dossier DEP et piquetage des individus à déplacer.</p>
                </div>
                <!--   Bandeau Etude 3   -->
                <div class="etude_bandeau">
                    <h2 id="etude_titre">Etude 3</h2>
                        <h3 id="etude_titre2">Pré-diagnostic écologique pour la réalisation d’une piscine d’un hôtel – Castel Bay</h3>
                            <p id="etude_p">La réalisation d’un passage de terrain et l’étude de la localisation de l’hôtel et des zonages alentours permettent la réalisation d’un pré-diagnostic écologique. L’objectif ici est de déclassé une partie du terrain non favorable à la biodiversité, actuellement en Espace Boisé Classé (EBC), et de proposer une autre zone en compensation de la perte de surface de l’EBC.</p>
                </div>
                <!--   Bandeau Etude 4   -->
                <div class="etude_bandeau">
                    <h2 id="etude_titre">Etude 4</h2>
                        <h3 id="etude_titre2">Suivi des orchidées – Segic ingénierie</h3>
                            <p id="etude_p">J’ai réalisé en mai 2024 un suivi des orchidées présentes sur une parcelle compensatoire située sur la parcelle de Peynier. [A compléter avec les résultats]</p>
                </div>
                <!--   Pour un nouveau bandeau, coller ici   -->
                

                <!--   Bandeau Etude SUPPLEMENTAIRE   

                <div class="etude_bandeau">
                    <h2 id="etude_titre">* A MODIFIER : Etude 4 *</h2>
                        <h3 id="etude_titre2">* A MODIFIER(titre) Suivi des orchidées – Segic ingénierie *</h3>
                            <p id="etude_p">* A MODIFIER(contenu)J’ai réalisé en mai 2024 un suivi des orchidées présentes sur une parcelle compensatoire située sur la parcelle de Peynier. [A compléter avec les résultats] *</p>
                </div>    

                -->
            </div>
            
            <!--   Cartogarphie   -->
            <div class="carte">
                <h1>Cartographies des <span class="green">zones d'interventions</span> et <span class="yellow">missions réalisées</span> : </h1>
                <div>
                    <img src="image/carto.png" id="carto" alt="carte de France montrant les zones d'interventions et les missions effectuées" /> 
                </div>
            </div>

            <!--  Partie du bas : N'hésitez pas à me contacter  -->
            <div class="accueil_bouton">
                <h2 id="titre_bouton">N'hésitez pas à me contacter !</h2>
            </div>
            <div class="button">
                <div>
                    <a href="devis.php">
                        <button class="cta_button">Devis</button>
                    </a>
                </div>
                <div>
                    <a href="contact.php">
                        <button class="cta_button">Contact</button>
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
