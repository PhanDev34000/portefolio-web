<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])) {
        echo "<p>Veuillez remplir les champs</p>";
    } else {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        // Clé secrète reCAPTCHA
        $recaptchaSecret = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        // Vérification reCAPTCHA
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
        $responseKeys = json_decode($response, true);

        if(intval($responseKeys["success"]) !== 1) {
            echo '<p>reCAPTCHA validation failed. Please try again.</p>';
        } else {
            $mail = new PHPMailer(true);

            try {
                // Paramètres du serveur
                $mail->isSMTP();
                $mail->Host       = 'smtp.hostinger.com'; 
                $mail->SMTPAuth   = true;
                $mail->Username   = 'exemple@mpoursecurite.fr'; 
                $mail->Password   = 'xxxxxxxxxxxxx'; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                // Destinataires
                $mail->setFrom('exemple@mpoursecurite.fr', 'Contact');
                $mail->addAddress('exemple@mpoursecurite.fr', 'Margaux Julien');

                // Contenu de l'email
                $mail->isHTML(true);
                $mail->Subject = 'Envoyé du site';
                $mail->Body    = "Prenom : " . $prenom . "<br>Nom : " . $nom . "<br>Email : " . $email . "<br>Message : " . nl2br($message);
                $mail->AltBody = "Prenom : " . $prenom . "\nNom : " . $nom . "\nEmail : " . $email . "\nMessage : " . $message;

                $mail->send();
                echo "<p class='success'>Votre message a bien été envoyé</p>";
                echo "<script type='text/javascript'>
                        setTimeout(function(){
                            window.location.href = 'index.php';
                        }, 3000);
                      </script>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
}
?>
