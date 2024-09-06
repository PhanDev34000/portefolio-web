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

// Requête pour la catégorie 'Apéritifs'
$categorie = 'Apéritifs';
$sql = "SELECT id_plat, nom_plat, photo FROM plats WHERE categorie = :categorie"; // Sélectionnez 'id_plat' explicitement
$stmt = $bdd->prepare($sql);
$stmt->execute(['categorie' => $categorie]);
$apero_plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Requête pour la catégorie 'Entrée'
$categorieEntree = 'Entrée';
$sqlEntree = "SELECT id_plat, nom_plat, photo FROM plats WHERE categorie = :categorie";
$stmtEntree = $bdd->prepare($sqlEntree);
$stmtEntree->execute(['categorie' => $categorieEntree]);
$entree_plats = $stmtEntree->fetchAll(PDO::FETCH_ASSOC);

// Requête pour la catégorie 'Plat'
$categoriePlat = 'Plat';
$sqlPlat = "SELECT id_plat, nom_plat, photo FROM plats WHERE categorie = :categorie";
$stmtPlat = $bdd->prepare($sqlPlat);
$stmtPlat->execute(['categorie' => $categoriePlat]);
$plat_plats = $stmtPlat->fetchAll(PDO::FETCH_ASSOC);

// Requête pour la catégorie 'Dessert'
$categorieDessert = 'Dessert';
$sqlDessert = "SELECT id_plat, nom_plat, photo FROM plats WHERE categorie = :categorie";
$stmtDessert = $bdd->prepare($sqlDessert);
$stmtDessert->execute(['categorie' => $categorieDessert]);
$dessert_plats = $stmtDessert->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icone/favicon.png" type="image/png">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="carousel2.css">             
    <title>Cook4U</title>
</head>
<body>
    <header>
        <!--   En-Tête   (cf header.php + CSS à part :  header.css)     -->
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>
    <main>
    <div class="cuisine">
        <div class="cuisine_bg">
            <img src="image/bg_cuisine.jpg" alt="" class="bg-image">
            <h1>La Cuisine</h1>
        </div>
        <div class="fond_transparent">
            <h2>Apéritifs</h2>
            <div class="carrousel-container" id="carrousel-apero">
                <button class="carrousel-button carrousel-button-left" data-carrousel="apero">&lt;</button>
                <div class="carrousel">
                    <?php foreach ($apero_plats as $plat): ?>
                        <div class="carrousel-slide">
                            <a href="fiche_produit_client.php?id_plat=<?php echo htmlspecialchars($plat['id_plat']); ?>">
                                <img src="uploads/<?php echo htmlspecialchars($plat['photo']); ?>" alt="<?php echo htmlspecialchars($plat['nom_plat']); ?>" id="img_cuisine">
                            </a>
                            <h3><?php echo htmlspecialchars($plat['nom_plat']); ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carrousel-button carrousel-button-right" data-carrousel="apero">&gt;</button>
            </div>
        </div>

        <div class="fond_transparent">
            <h2>Entrées</h2>
            <div class="carrousel-container" id="carrousel-entree">
                <button class="carrousel-button carrousel-button-left" data-carrousel="entree">&lt;</button>
                <div class="carrousel">
                    <?php foreach ($entree_plats as $plat): ?>
                        <div class="carrousel-slide">
                            <a href="fiche_produit_client.php?id_plat=<?php echo htmlspecialchars($plat['id_plat']); ?>">
                                <img src="uploads/<?php echo htmlspecialchars($plat['photo']); ?>" alt="<?php echo htmlspecialchars($plat['nom_plat']); ?>" id="img_cuisine">
                            </a>
                            <h3><?php echo htmlspecialchars($plat['nom_plat']); ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carrousel-button carrousel-button-right" data-carrousel="entree">&gt;</button>
            </div>
        </div>
        
        <div class="fond_transparent">
            <h2>Plats</h2>
            <div class="carrousel-container" id="carrousel-plat">
                <button class="carrousel-button carrousel-button-left" data-carrousel="plat">&lt;</button>
                <div class="carrousel">
                    <?php foreach ($plat_plats as $plat): ?>
                        <div class="carrousel-slide">
                            <a href="fiche_produit_client.php?id_plat=<?php echo htmlspecialchars($plat['id_plat']); ?>">
                                <img src="uploads/<?php echo htmlspecialchars($plat['photo']); ?>" alt="<?php echo htmlspecialchars($plat['nom_plat']); ?>" id="img_cuisine">
                            </a>
                            <h3><?php echo htmlspecialchars($plat['nom_plat']); ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carrousel-button carrousel-button-right" data-carrousel="plat">&gt;</button>
            </div>
        </div>

        <div class="fond_transparent">                
            <h2>Desserts</h2>
            <div class="carrousel-container" id="carrousel-dessert">
                <button class="carrousel-button carrousel-button-left" data-carrousel="dessert">&lt;</button>
                <div class="carrousel">
                    <?php foreach ($dessert_plats as $plat): ?>
                        <div class="carrousel-slide">
                            <a href="fiche_produit_client.php?id_plat=<?php echo htmlspecialchars($plat['id_plat']); ?>">
                                <img src="uploads/<?php echo htmlspecialchars($plat['photo']); ?>" alt="<?php echo htmlspecialchars($plat['nom_plat']); ?>" id="img_cuisine">
                            </a>
                            <h3><?php echo htmlspecialchars($plat['nom_plat']); ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carrousel-button carrousel-button-right" data-carrousel="dessert">&gt;</button>
            </div>
        </div>


    </div>

    <script src="carousel2.js"></script>
    </main>
    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>
