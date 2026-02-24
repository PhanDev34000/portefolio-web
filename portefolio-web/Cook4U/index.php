<?php
// Inclure votre fichier de configuration de la base de données et initialisation de la connexion
require_once('fonctions.php');
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cook";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit();
}

// Requête pour récupérer les informations des plats avec leurs photos
$sql = "SELECT id_plat, nom_plat, photo FROM plats";
$stmt = $bdd->query($sql);

// Récupérer les résultats sous forme de tableau associatif
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <link rel="stylesheet" href="carousel3D.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Cook4U</title>
    </head>
    <body>
        <header>
            <!--   En-Tête   (cf header.php + CSS à part :  header.css)     -->
            <?php require_once(__DIR__ . '/header.php'); ?>
        </header>
        <main>

             <!--       Bandeau de Présentation          -->             
            <div class="bandeau-presentation">
                <div class="left-content">
                    <h1><strong>Bienvenue !</strong></h1>
                    <h2>Dans la cuisine de COOK4U!</h2>                    
                    <p>Découvrez une nouvelle manière de savourer des plats faits maison tout en créant des liens avec vos voisins. COOK4U! connecte les cuisiniers amateurs passionnés avec les gourmets locaux à la recherche de repas authentiques. Commandez facilement vos plats préférés, rencontrez les cuisiniers près de chez vous, et savourez des moments de partage.</br> Bon appétit !</p> 
                    <!--       2e Bandeau  : pictogramme du process        -->
                    <div class="picto">
                        <h2>Accessible à tous !</h2>
                        </br>
                        <div class="icone_picto">
                            <img src="icone/faim.png" class="icone" alt="avoir faim"/>
                            <img src="icone/commande.png" class="icone" alt="commander à manger"/>
                            <img src="icone/chef.png" class="icone" alt="le cuisinier est prévenu"/>
                            <img src="icone/cuisiner.png" class="icone" alt="le cuisinier est en action"/>
                            <img src="icone/rdv.png" class="icone" alt="une heure de rdv est fixée"/>
                            <img src="icone/geoloc.png" class="icone" alt="une adresse géolocalisée est fournie"/>
                            <img src="icone/livraison.png" class="icone" alt="client récupére sa commande chez le cuisinier"/>
                            <img src="icone/deguster.png" class="icone" alt="le client déguste son plat commandé"/>
                        </div>
                    </div>

                </div>
                <div class="right-content">
                    <img src="image/cuis1.png" alt="personne en train de cuisiner"/> 
                </div>
            </div>           

            <!--       CAROUSEL          -->  
                   
            <div class="carousel3D">
                <h2>Nos Plats du jour</h2>             
                <div class="slider">
                    <?php foreach ($results as $row):
                        $photoPath = 'uploads/' . htmlspecialchars($row['photo']);
                        ?>
                        <div class="item">
                            <a href="fiche_produit_client.php?id_plat=<?php echo htmlspecialchars($row['id_plat']); ?>">
                                <h3 class="titre_plat"><?php echo htmlspecialchars($row['nom_plat']); ?></h3>
                                <img src="<?php echo $photoPath; ?>" alt="<?php echo htmlspecialchars($row['nom_plat']); ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                        <!-- Boutons de navigation -->                
                        <button id="next">></button>
                        <button id="prev"><</button>
                </div>
            </div>
    
            
            <!--       3e Bandeau   FAQ       -->
            <div class="faq">
                <h1>F.A.Q.</h1>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Question 1: Comment puis-je commander un plat ?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pour commander un plat, vous devez vous inscrire sur notre site, parcourir les options disponibles, ajouter les plats à votre panier et suivez les instructions pour finaliser votre commande.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Question 2: Comment puis-je devenir cuisinier ?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pour devenir cuisinier, vous devez vous inscrire en tant que cuisinier, remplir votre profil, ajouter vos recettes et les publier pour que les clients puissent les commander.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Question 3: Que faire si j'ai une allergie alimentaire ?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Consultez les fiches produits des plats pour connaître les ingrédients et les informations sur les allergènes. Vous pouvez également contacter directement le cuisinier pour plus de précisions.</div>
                        </div>
                    </div>
                </div>
                <div>                    
                    <a href="faq.php">
                        <button class="menu_button">Voir Plus</button>
                    </a>
                </div>
                
            </div>
            <script src="carousel3D.js"></script>
        </main>
        <!--           Pied de PAGE         (CSS à part : footer.css)        -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
         <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>