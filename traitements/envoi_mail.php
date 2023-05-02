<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accusé de réception | FormulaPedia</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon-f1.png">
</head>

<body>
    <?php require '../head-foot/header.php';?>
    <main id="main-envoi">
        <div>
            <?php
                ini_set('display_errors', 1);
                error_reporting(E_ALL);

                $erreurs = 0;
                $affichage_retour = "";

                if (count($_POST) == 0) {
                    header('location: ../contact.php');
                }


                //Initialisations des variables pour la demande de contact

                // Nom
                if (!empty($_POST['nom'])){
                    $nom = strtoupper($_POST['nom']);
                }
                else{
                    $erreurs++;
                    $affichage_retour .= "Nom<br>";
                }

                // Prenom
                if (!empty($_POST['prenom'])){
                    $prenom = ucfirst(strtolower($_POST['prenom']));
                }
                else{
                    $erreurs++;
                    $affichage_retour .= "Prénom<br>";
                }

                //Adresse mail
                if (!empty($_POST['email'])){
                    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                        $from = $_POST['email']; 
                    }
                    else{
                        $erreurs++;
                        $affichage_retour .= "Votre adresse mail est invalide.<br>";
                    }
                }
                else{
                    $erreurs++;
                    $affichage_retour .= "Adresse mail<br>";
                }

                // Message
                if (!empty($_POST['message'])){
                    $message = $_POST['message'];
                }
                else{
                    $erreurs++;
                    $affichage_retour .= "Message<br>";
                }

                //Cas ou aucune erreur n'est présente dans les variables
                if($erreurs == 0){
                    $to = "mmi22c03@mmi-troyes.fr";
                    $demande = $_POST['demande'];
                    $subject = "FormulaPedia Contact - $demande de $prenom $nom";
                    $headers = "From: $from" . "\r\n" .
                            "Reply-To: $from" . "\r\n" .
                            'X-Mailer: PHP/' . phpversion() . "\r\n" .
                            'MIME-Version: 1.0' . "\r\n" .
                            'content-type: text/html; charset=utf-8';

                    $contact = mail($to, $subject, $message, $headers);
                    //Cas ou la fonction mail a bien fonctionné, on peut donc enchainer avec l'envoi de la confirmation
                    if($contact){
                        echo "Votre $demande a été envoyée avec succès.<br>\n";
                        
                        //Initialisation des variables pour la confirmation de demande de contact

                        $subject = "FormulaPedia - Accusé de réception";
                        $message = "Bonjour $prenom,\nVotre message a bel et bien été transmis.
                                    \nMerci de ne pas répondre à ce mail.";
                        $headers = "From: $to" . "\r\n" .
                                "Reply-To: no-reply@mmi-troyes.fr" . "\r\n" .
                                "X-Mailer: PHP/" . phpversion();

                        $retour = mail($from, $subject, $message, $headers);

                        if($retour){
                            echo "Un mail de confirmation vous a été envoyé.";
                        }
                        else{
                            $erreurs++;
                            echo "Echec de l'envoi de votre message.<br>\nMerci de réessayer plus tard.<br>";
                        }
                    }
                    else{
                        $erreurs++;
                        echo "Echec de l'envoi de votre message.<br>\nMerci de réessayer plus tard.<br>";
                    }
                }
                else{
                    echo "Echec de l'envoi de votre message.<br>\nMerci de remplir le(s) champ(s) suivant(s) :<br><br>";
                    echo $affichage_retour;
                }
            ?>
            <div id=retour>
                <a href="../contact.php">RETOUR</a>
            </div>
        </div>
    </main>
    <?php require '../head-foot/footer.php';?>
</body>
</html>