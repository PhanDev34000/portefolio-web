<?php

require_once('fonctions.php');
session_start();

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

if (isUserLoggedIn()) {
    if (isset($_COOKIE['mail'])) {
        $req = $bdd->prepare("SELECT id FROM utilisateurs WHERE mail = :mail");
        $req->execute(array(':mail' => $_COOKIE['mail']));
        $id_utilisateur = $req->fetchColumn();

        if ($id_utilisateur) {
            $_SESSION['id'] = $id_utilisateur;
        } else {
            echo "Utilisateur non trouvé.<br>";
            exit();
        }
    } else {
        exit();
    }
} else {
    echo "Vous devez vous connecter pour accéder à cette page.";
    // Redirection après 3 secondes
    header("Refresh: 3; URL=connexion.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    // Vérification des données reçues
    print_r($_POST);
    print_r($_FILES);

    // Dossier de destination pour les fichiers uploadés
    $uploadDir = 'uploads/';

    // Vérifiez si le dossier de destination existe, sinon, créez-le
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Vérifier si un fichier a été téléchargé sans erreur
    if (isset($_FILES['photo_plat']) && $_FILES['photo_plat']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['photo_plat']['tmp_name'];
        $fileName = $_FILES['photo_plat']['name'];
        $fileSize = $_FILES['photo_plat']['size'];
        $fileType = $_FILES['photo_plat']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Vérifier les extensions autorisées
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Créez un nom unique pour le fichier uploadé
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $dest_path = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            } else {
                echo "Erreur lors du téléversement du fichier.<br>";
                exit();
            }
        } else {
            echo "Type de fichier non autorisé.<br>";
            exit();
        }
    } else {
        // Afficher le code d'erreur détaillé
        echo "Erreur de téléchargement : " . $_FILES['photo_plat']['error'] . "<br>";
        exit();
    }

    // Récupération des données du formulaire
    $id_utilisateur = $_SESSION['id']; // Utilisation de $_SESSION['id']
    $nom_plat = $_POST['nom_plat'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $commentaire = $_POST['commentaire'];
    $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : array();
    $quantite = $_POST['quantite'];
    $nom_cuisinier = $_POST['nom_cuisinier'];

    // Convertir le tableau de catégories en une chaîne séparée par des virgules
    $categorie_str = implode(',', $categorie);


    // Insertion des données dans la base de données
    try {
        // Préparation de la requête SQL
        $sql = "INSERT INTO plats (id_utilisateur, nom_plat, prix, description, commentaire, categorie, quantite, photo, nom_cuisinier) 
        VALUES (:id_utilisateur, :nom_plat, :prix, :description, :commentaire, :categorie, :quantite, :photo, :nom_cuisinier)";
        $stmt = $bdd->prepare($sql);
        // Liaison des paramètres
        $stmt->bindParam(':id_utilisateur', $id_utilisateur);
        $stmt->bindParam(':nom_plat', $nom_plat);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':commentaire', $commentaire);
        $stmt->bindParam(':categorie', $categorie_str);
        $stmt->bindParam(':quantite', $quantite);
        $stmt->bindParam(':photo', $newFileName); // Utilise le nom du fichier téléchargé
        $stmt->bindParam(':nom_cuisinier', $nom_cuisinier);

        // Exécution de la requête SQL
        $stmt->execute();

        header("Refresh: 0; URL=connexion_cuisine.php");
        exit();

    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cook4U - Créer votre Fiche Produit</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>
    <main>
        <div class="fiche_produit">
            <h1>Créer votre Fiche Produit</h1>
            <div class="form_produit">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <input type="text" name="nom_plat" placeholder="Nom de votre plat" maxlength="120" minlength="2" id="nom_plat" required>
                    </div>
                    <div>
                        <p>Télécharger la photo du plat</p>
                        <input type="file" name="photo_plat" accept="image/*" id="img_plat" required>
                    </div>
                    <div>
                        <input type="number" name="prix" placeholder="Prix de votre plat" id="prix_plat"  required>
                    </div>
                    <div>
                        <textarea name="description" placeholder="Présentez-votre plat (spécialité, ingrédients...)" cols="70" rows="10" required></textarea>
                    </div>
                    <div>
                        <textarea name="commentaire" placeholder="Vos conditions (ex: quantité min/max, temps de préparation ...)" cols="70" rows="10"></textarea>
                    </div>
                    <div class="checkbox">
                        <legend>Catégorie de votre plat :</legend><br>
                        <input type="checkbox" name="categorie[]" id="apéritifs" value="Apéritifs">
                        <label for="apéritifs">Apéritifs</label><br>
                        <input type="checkbox" name="categorie[]" id="entrée" value="Entrée">
                        <label for="entrée">Entrée</label><br>
                        <input type="checkbox" name="categorie[]" id="plat" value="Plat">
                        <label for="plat">Plat</label><br>
                        <input type="checkbox" name="categorie[]" id="dessert" value="Dessert">
                        <label for="dessert">Dessert</label><br>
                    </div>
                    <div>
                        <input type="text" name="quantite" placeholder="Quantité disponible" required>
                    </div>
                    <div>
                        <input type="text" name="nom_cuisinier" placeholder="Nom du cuisinier" required>
                    </div>
                    <div class="form_envoi">
                        <div>                             
                            <input type="submit" name="submit_produit" class="contact_button" value="Valider">                                                          
                        </div>
                        <div>                             
                            <input type="submit" name="reset_produit" class="contact_button" value="Supprimer">                                                          
                        </div>
                        <div>                             
                            <input type="submit" name="cache_produit" class="contact_button" value="Ne plus publier">                                                          
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>
