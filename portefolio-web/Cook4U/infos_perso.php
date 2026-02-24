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
}

if (isUserLoggedIn()) {
    $req = $bdd->prepare("SELECT id FROM utilisateurs WHERE mail = :mail");
    $req->execute(array(
        ':mail' => $_COOKIE['mail']
    ));
    $id_utilisateur = $req->fetchColumn();
    $_SESSION['id'] = $id_utilisateur;
} else {
    echo "Vous devez vous connecter pour accéder à cette page.";
    // Redirection après 3 secondes
    header("Refresh: 3; URL=connexion_espace.php");
    exit();
}


if (isset($_SESSION['id'])) {
    $id_utilisateur = $_SESSION['id'];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        // Récupération de l'id de l'utilisateur connecté 
        $id_utilisateur = $_SESSION['id']; 
        // Récupération des données du formulaire 
        $tel = $_POST['tel'];
        $num = $_POST['num']; 
        $rue = $_POST['rue']; 
        $cp = $_POST['cp']; 
        $ville = $_POST['ville']; 
        $complement = $_POST['complement']; 
        // Connexion à la base de données 
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "cook"; 
        try { 
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            // Préparation de la requête SQL de mise à jour des informations personnelles 
            $sql = "UPDATE utilisateurs SET tel= :tel, num = :num, rue = :rue, cp = :cp, ville = :ville, complement = :complement WHERE id = :id_utilisateur"; 
            $stmt = $conn->prepare($sql); 
            // Liaison des paramètres 
            $stmt->bindParam(':tel', $tel); 
            $stmt->bindParam(':num', $num); 
            $stmt->bindParam(':rue', $rue); 
            $stmt->bindParam(':cp', $cp); 
            $stmt->bindParam(':ville', $ville); 
            $stmt->bindParam(':complement', $complement); 
            $stmt->bindParam(':id_utilisateur', $id_utilisateur); 
            // Exécution de la requête SQL 
            $stmt->execute(); 
            echo "Les informations personnelles ont bien été enregistrées !"; 
            header("Refresh: 3; URL=connexion_espace.php");
            exit();
            } catch (PDOException $e) { 
                echo "Erreur : " .$e->getMessage(); 
            } 
            $conn = null; 
        } 
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
        <div class="formulaire-contact">                
                <!-- Formulaire de contact  -->
                <div class="form">
                    <div class="contact">
                        <h2>Veuillez remplir le formulaire</h2>                                                
                    </div>

                    <!-- Formulaire  -->  

                    <div class="form_perso"> 
                        <form action=""  method="POST">                           
                            <input type="tel" name="tel" placeholder="Votre téléphone" id="case_perso">
                            <input type="number" name="num" placeholder="N° de rue" id="case_perso">
                            <input type="text" name="rue" placeholder="rue" id="case_perso">
                            <input type="text" name="cp" placeholder="Code Postal" id="case_perso">
                            <input type="text" name="ville" placeholder="Ville" id="case_perso"> </br>
                            <textarea name ="complement" placeholder="Compléments d'adresse" cols="40" rows="2" id="case_perso2"></textarea>
                                                    
                        <!--   Bouton d'envoi du formulaire   -->    
                            <div class="form_envoi">                             
                                <input type="submit" name="submit" class="contact_button" value="Valider">                                                          
                            </div>
                        </form>                        
                    </div>  
                                            
                </div>                     
            </div>            
        </main>
        <!--           Pied de PAGE         (CSS à part : footer.css)        -->
        <footer>
            <?php require_once(__DIR__ . '/footer.php'); ?>
        </footer>
    </body>
</html>