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
        <meta name="description" content="Margaux JULIEN a réalisé sa thèse sur les translocations végétales réalisées dans un contexte réglementaire. Elle a plusieurs années d’expérience en bureau d’études en environnement et propose maintenant ses services en tant qu’écologue et chercheuse indépendante. "/>       
    </head>
    <body>
        <!--   En-Tête  -->
        <header>
            <?php require_once(__DIR__ . '/header.php'); ?>
        </header>
        <main>
            <!--   1ere Photo  -->
            <div class="photo">
                <div class="image">
                    <img src="image/img3.jpg" alt="">                   
                </div>
            </div>  
            <!--   Bandeau de Présentation  -->         
            <div class="bandeau-presentation3">
                <div class="container5">
                    <div class="left-content">
                        <h1>Margaux JULIEN</h1>
                        <h2>Ecologue & Chercheuse Indépendante</h2>                    
                        <p id="texte_presentation">Docteure en écologie et spécialisée en translocations végétales réglementaires, je travaille depuis 4 ans sur des problématiques liées à la conservation de la biodiversité et à l'aménagement du territoire. Je vous propose un accompagnement personnalisé sur vos projets d'aménagement, que ce soit pour le volet réglementaire ou pour la mise en place des mesures.</p>
                    </div>               
                    <div class="right-content">
                        <img src="image/Marg2.png" alt="" />
                    </div>
                </div>
            </div>

            <!--   Bandeau 1 : Mon profil de recherche    -->            
            <div class="container4">
                <div class="right-content2">
                    <img src="image/img8.jpg" alt="Margaux en train d'observer sur le terrain" id="margaux" /> 
                </div>
                <div class="left-content1">                         
                    <h2>Mon profil de recherche</h2>                    
                    <p id="text-summary">Conserver les populations d’espèces protégées dans les projets d’aménagement : de l’amélioration des connaissances à l’expérimentation dans la séquence ERC
                        Mes recherches s’inscrivent dans le cadre législatif de la prise en compte des impacts sur la biodiversité dans les projets d’aménagement.</br> Dans de nombreux pays, comme en France, lors d’un projet d’aménagement, il est nécessaire de proposer des mesures permettant : 1) d’éviter     2) de réduire     3) de compenser,  les impacts des travaux d’aménagement sur les populations impactées d’espèces protégées.</br> C’est la séquence ERC, qui est une déclinaison opérationnelle de la législation française. Cette séquence apparaît dans la législation française pour la première fois en 1976, et est consolidée en 2016, dans la loi pour la reconquête de la biodiversité (Loi n°2016-1087). Le contexte est donc récent.
                    </br><span id="more">Lire plus</span></br>
                        <span id="more-text" style="display: none;"> Dans la pratique, ce sont les bureaux d’études en environnement qui proposent des mesures suivant la séquence ERC, et se positionnent en tant qu’experts auprès des aménageurs.</br> La problématique principale réside dans le fait que les retours d’expériences de ces mesures sont peu mis en valeur, et qu’on constate un certain nombre d’échecs en fonction du type de mesures. 
                        J’ai commencé à travailler sur ce thème avec la translocation végétale, qui est une mesure consistant à déplacer des individus d’espèces végétales face à un risque de destruction imminent. J’ai pu constater le manque de préparation et de connaissances des espèces transloquées par les aménageurs et les bureaux d’études.</br> Par l’étude des espèces protégées souvent présentes sur les projets d’aménagement, et par l’expérimentation de différentes méthodes, mes recherches visent à améliorer les mesures proposées dans la séquence ERC, dans un objectif d’améliorer la viabilité des populations menacées par les activités humaines.</br> Je me place dans une posture de recherche-action, en étant directement en lien avec les bureaux d’études et les aménageurs, pour travailler sur des cas concrets. Je m’intéresse à la fois à la faune et à la flore. 
                        </br></br>Je cherche à répondre à ces problématiques en me concentrant sur les trois axes suivants :</br> 
                        </br> 
                    
                        - Améliorer la pratique de la translocation végétale : J’ai commencé à travailler sur cette thématique lors de ma thèse. A travers mes recherches, j’ai fait le constat que les translocations végétales mènent souvent à un échec, et n’apportent donc aucune plus-value à la population. Par une approche en recherche-action, j’améliore les protocoles de translocation sur des cas concrets et j’apporte des connaissances nouvelles autour des espèces à transloquer et sur la pratique en général. 
                        </br></br>
                        - Conserver les chiroptères en contexte méditerranéen : Les chiroptères sont sensibles aux fortes chaleurs, et les changements climatiques pourraient être un facteur de mortalité dans les ouvrages proposés en leur faveur dans le cadre de la séquence ERC. J’étudie ces variations de température et l’effet sur les chiroptères.
                        </br></br>
                        - Favoriser les pollinisateurs dans la séquence ERC : Peu de pollinisateurs sont protégés, mais ils font l’objet d’un Plan National d’Actions. Ainsi, des mesures peuvent être proposées en accompagnement de la séquence ERC, afin de diminuer les impacts sur ces espèces.
                        </span>
                    </p>                    
                    <!--   Fonctionnalité Lire Plus  (JavaScript) -->            
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var moreText = document.getElementById("more");
                            var text = document.getElementById("more-text");

                            moreText.addEventListener("click", function() {
                                if (text.style.display === "none") {
                                    text.style.display = "inline";
                                    moreText.innerHTML = "Lire moins";
                                } else {
                                    text.style.display = "none";
                                    moreText.innerHTML = "Lire plus";
                                }
                            });
                        });
                    </script>
                    <!--   Bouton contact -->   
                    <div class="butonC">                
                        <a href="contact.php">
                            <button class="cta_button3">Contact</button> 
                        </a>
                    </div>
                </div>
            </div>
            

            <!--   Bandeau 2 : Mes enseignements -->            
            <div class="container6">
                <div class="right-content">
                    <h2>Mes enseignements</h2>                    
                    <p id="text-summary">Thématiques d’enseignement : Aménagement du territoire, séquence ERC, espaces naturels, biodiversité urbaine, reconnaissance d’espèces, écologie des populations, acteurs de l’environnement, écologie générale.</br>
                    </p>                      
                    <div class="butonC">                
                        <a href="contact.php">
                            <button class="cta_button">Contact</button> 
                        </a>
                    </div>
                </div>
                <div class="left-content2">
                    <img src="image/cours.PNG" alt="Tableau regroupant les différents enseignements donnés par Margaux Julien" id="tab"/> 
                    <span class="tooltip" id="tooltip-text" style="display:none;">Double-Clique pour agrandir</span>
                </div> 
            </div>
            

                    <!-- Pour agrandir le planning des cours (JavaScript) -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            var cours = document.querySelector("#tab");
                            var tooltipText = document.querySelector("#tooltip-text");

                            // Ajouter un gestionnaire d'événements de survol de la souris à l'image
                            cours.addEventListener("mouseover", function () {
                                tooltipText.style.display = "block";
                            });

                            // Ajouter un gestionnaire d'événements de clic à l'image
                            cours.addEventListener("dblclick", function () {
                                // Agrandir l'image en modifiant sa transformation
                                this.style.transform = "translate(-60%, 0%) scale(2.3)"; 
                                this.style.transition = "transform 0.7s ease";
                                tooltipText.style.display = "none";
                            });

                            // Ajoutez un gestionnaire d'événements pour réinitialiser la taille lorsqu'on clique à nouveau
                            cours.addEventListener("click", function () {
                                this.style.transform = "scale(1)";
                                tooltipText.style.display = "block";
                            });

                            // Ajouter un gestionnaire d'événements de sortie de la souris à l'image
                            cours.addEventListener("mouseleave", function () {
                                tooltipText.style.display = "none";
                            });
                        });
                    </script>   

            <!--   Bandeau 3 : Mon parcours Universitaire -->                            
            <div class="container8">                                       
                <h2>Mon parcours Universitaire</h2>
                <!--   1ere ligne : 2019 -->
                <div class="parcU">
                    <div class="parcoursU_left">
                        <img src="icone/montpellier.png" alt="logo de l'Université de Montpellier" id="icone_me"/>
                        <img src="icone/Ecotonia.png" alt="logo de l'entreprise Ecotonia" id="icone_me"/>
                    </div>    
                    <div class="parcoursU_right">                
                        <p class="parcours_text">• 2019-2022 : Doctorat d’écologie, Université de Montpellier. 
                            Sujet de thèse : Translocations végétales : bilan des connaissances, expérimentation et optimisation
                            </br>Directeurs de thèse : Bertrand SCHATZ, Bruno COLAS
                            Financement : Ecotonia</br>
                        </p>
                    </div>
                </div>
                <!--   2e ligne : 2017 -->
                <div class="parcU">
                    <div class="parcoursU_left2">
                        <div class="ligne2">                            
                            <img src="icone/saclay.png" alt="logo de l'Université de Saclay" id="iconeU"/>
                            <img src="icone/mnhn.png" alt="logo du Muséum National d'Histoire Naturelle" id="iconeM"/>                        
                            <img src="icone/Sorbonne.png" alt="logo de l'Université de la Sorbonne" id="iconeS"/>
                            <img src="icone/palacky.png" alt="logo de l'Université de Palacky" id="iconeP"/>
                        </div>
                    </div>
                    <div class="parcoursU_right">
                        <p class="parcours_text">• 2017-2019 – Master Biodiversité, Ecologie, Evolution, spécialisation en écologie de la conservation</br> Université Paris-Saclay
                        </br>M1 Erasmus à Olomouc, République tchèque</p>
                    </div>
                </div>
                <!--   3e ligne : 2016 - 2019 -->
                <div class="parcU">
                    <div class="parcoursU_left">                            
                        <img src="icone/saclay.png" alt="logo de l'Université de Saclay" id="iconeU"/>                                   
                    </div>
                    <div class="parcoursU_right">
                        <p class="parcours_text">• 2016-2019 : Magistère de biologie</br> Université Paris-Saclay</br></p></div>
                    </div>
                
                <!--   4e ligne : 2016 - 2017 -->   
                <div class="parcU">
                    <div class="parcoursU_left">
                        <img src="icone/saclay.png" alt="logo de l'Université de Saclay" id="iconeU"/></br>
                    </div>
                    <div class="parcoursU_right">
                        <p class="parcours_text">• 2016-2017 : Licence Biologie des Organismes et Ecologie</br> Université Paris-Saclay</br></p>
                    </div>                                                   
                </div>
                <!--   Bouton Contact -->   
                <div class="butonC">                
                    <a href="contact.php">
                        <button class="cta_button3">Contact</button> 
                    </a>
                </div>                
            </div>
            
            
            <!--   Bandeau 4 : CV & Autres liens -->            
            <div class="container7">
                <h2>Mon CV & autres liens : </h2>
                <!--   Petit Bandeau : CV  -->
                <div class="link">
                    <div>
                        <h3>CV</h3>
                    </div>
                    <div class="button2">
                        <div>
                            <a href="image/CV.pdf" target="_blank">
                                <button class="link_button2">Consulter & Télécharger</button>
                            </a>
                        </div>                                                    
                    </div>   
                </div>
                <!--   Petit Bandeau : LinkedIn  -->
                <div class="link">
                    <div>
                        <h3>LinkedIn</h3>
                    </div>
                    <div class="button2">
                        <div>
                            <a href="https://www.linkedin.com/in/margaux-julien-b656a211b/" target="_blank">
                                <button class="link_button">Visiter</button>
                            </a>
                        </div>                            
                    </div>   
                </div>
                <!--   Petit Bandeau : ResearchGate  -->
                <div class="link">
                    <div>
                        <h3>ResearchGate</h3>
                    </div>
                    <div class="button2">
                        <div>
                            <a href="https://www.researchgate.net/profile/Margaux-Julien-3" target="_blank">
                                <button class="link_button">Visiter</button>
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