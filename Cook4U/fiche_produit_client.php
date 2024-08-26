<?php
require_once('fonctions.php'); // Assurez-vous d'inclure votre fichier de fonctions pour la connexion à la base de données

session_start(); // Démarrage de la session si nécessaire

// Vérification si l'utilisateur est connecté (si nécessaire pour accéder à cette page)
// Code à adapter selon vos besoins d'authentification

// Connexion à la base de données
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



// Vérifiez si un identifiant de produit est passé via GET (par exemple)
if (isset($_GET['id_plat'])) {
    $id_produit = $_GET['id_plat'];  //*id_produit

    // Sélection des données du produit depuis la base de données
    $stmt = $bdd->prepare("SELECT * FROM plats WHERE id_plat = :id_plat");
    $stmt->bindParam(':id_plat', $id_produit);
    $stmt->execute();
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$produit) {
        echo "Produit non trouvé.";
        exit();
    }
} else {
    echo "Identifiant de produit non spécifié.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Produit - <?php echo htmlspecialchars($produit['nom_plat'] ?? 'Nom non disponible'); ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>
    <main>
        <div class="fiche_produit_client">
            <div class="carte_produit">
                <h1><?php echo htmlspecialchars($produit['nom_plat'] ?? 'Nom non disponible'); ?></h1>
                <div>
                    <?php if (!empty($produit['photo'])): ?>
                        <img src="uploads/<?php echo htmlspecialchars($produit['photo']); ?>" alt="<?php echo htmlspecialchars($produit['nom_plat'] ?? 'Photo du plat'); ?>" id="photo_produit">
                    <?php else: ?>
                        <p>Aucune photo disponible.</p>
                    <?php endif; ?>
                </div>
                <div>
                    <p><strong>Description : </strong><?php echo nl2br(htmlspecialchars($produit['description'] ?? 'Aucune description disponible')); ?></p>
                    <p><strong>Commentaire : </strong><?php echo nl2br(htmlspecialchars($produit['commentaire'] ?? 'Aucun commentaire disponible')); ?></p>
                    <p><strong>Prix : </strong><?php echo htmlspecialchars($produit['prix'] ?? 'Non disponible'); ?> €</p>
                    <p><strong>Quantité disponible : </strong><?php echo htmlspecialchars($produit['quantite'] ?? 'Non disponible'); ?></p>
                    <p><strong>Nom du cuisinier : </strong><?php echo htmlspecialchars($produit['nom_cuisinier'] ?? 'Non disponible'); ?></p></br>
                </div>
                <div>
                    <label class="form-label" for="liste">Quantité souhaitée :</label>
                        <select name="region_etude" id="liste">
                            <option value="qte1" checked>1</option>
                            <option value="qte2">2</option>
                            <option value="qte3">3</option>
                            <option value="qte4">4</option>
                            <option value="qte5">5</option>
                        </select>
                </div>
                <div>
                    <a href="connexion.php">
                        <button class="cta_button">Commander</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>
