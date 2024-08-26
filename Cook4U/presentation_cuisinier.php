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
    echo "Vous devez vous connecter pour accéder à cette page.<br>";
    // Redirection après 3 secondes
    header("Refresh: 3; URL=connexion.php");
    exit();
}

if (isset($_SESSION['id'])) {
    $id_utilisateur = $_SESSION['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Formulaire soumis.<br>";

        // Vérifiez les données reçues
        print_r($_POST);
        print_r($_FILES);

        // Dossier de destination pour les fichiers uploadés
        $uploadDir = 'uploads/';

        // Vérifiez si le dossier de destination existe, sinon, créez-le
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Vérifier si un fichier a été téléchargé sans erreur
        if (isset($_FILES['photo_cuisinier']) && $_FILES['photo_cuisinier']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['photo_cuisinier']['tmp_name'];
            $fileName = $_FILES['photo_cuisinier']['name'];
            $fileSize = $_FILES['photo_cuisinier']['size'];
            $fileType = $_FILES['photo_cuisinier']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // Vérifier les extensions autorisées
            $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
            if (in_array($fileExtension, $allowedfileExtensions)) {
                // Créez un nom unique pour le fichier uploadé
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                $dest_path = $uploadDir . $newFileName;

                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    echo "Le fichier a été téléversé avec succès.<br>";
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
            echo "Erreur de téléchargement : " . $_FILES['photo_cuisinier']['error'] . "<br>";
            exit();
        }

        // Traitez les autres données du formulaire
        if (isset($_POST['presentation_cuisinier'])) {
            $presentationCuisinier = $_POST['presentation_cuisinier'];
            echo "Présentation reçue : " . htmlspecialchars($presentationCuisinier) . "<br>";

            // Stocker les informations dans la base de données
            try {
                $req = $bdd->prepare("UPDATE utilisateurs SET presentation_cuisinier = :presentation, photo_cuisinier = :photo WHERE id = :id");
                $req->execute(array(
                    ':presentation' => $presentationCuisinier,
                    ':photo' => $newFileName, // le nom du fichier téléchargé
                    ':id' => $id_utilisateur // l'id de l'utilisateur connecté
                ));
                echo "Les informations ont été enregistrées avec succès.<br>";
                header("Refresh: 3; URL=connexion_espace.php");
                exit();
            } catch(PDOException $e) {
                echo "Erreur lors de la mise à jour de la base de données : " . $e->getMessage() . "<br>";
            }
        } else {
            echo "La présentation n'a pas été soumise.<br>";
        }
    } else {
        
    }
} else {
    echo "ID utilisateur non trouvé dans la session.<br>";
}

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
        <title>Cook4U</title>
    </head>
    <body>
        <header>
            <!--   En-Tête   (cf header.php + CSS à part :  header.css)     -->
            <?php require_once(__DIR__ . '/header.php'); ?>
        </header>
        <main>
            
                <!-- Téléchargement photo    -->
                <!-- Adresse cuisine    -->
            <div class="formulaire-contact">
                <div class="titre_présentation">
                    <h1>Remplissez votre présentation !</h1>
                    <h2>Elle sera lue par vos futurs clients!</h2>
                </div>
                <div class="form">
                    <form action=""  method="POST" enctype="multipart/form-data"s>
                        <!-- Présentation    -->
                        <div>
                            <textarea name ="presentation_cuisinier" placeholder="Présentez-vous(où avez-vous appris à cuisinier, vos influences, vos spécialités...)" cols="70" rows="10" id="case_contact2"></textarea>
                        </div>
                         <!-- Téléchargement photo -->
                        <div>
                            <h3>Télécharger votre photo</h3>
                        </div>
                        <div>
                            <input type="file" name="photo_cuisinier" accept="image/*">
                        </div>
                        <!--   Bouton d'envoi du formulaire   -->    
                        <div class="form_envoi">                             
                            <input type="submit" name="submit" class="contact_button" value="Valider">                                                          
                        </div>
                    </form>
                </div>
            </div>
        
        </main>
        <!--           Pied de PAGE         (CSS à part : footer.css)        -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
    </body>
</html>