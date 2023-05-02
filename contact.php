<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous | FormulaPedia</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-f1.png">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require "head-foot/header.php";
?>

<main id="main-contact">
    <h1 id="h1-contact">CONTACTEZ-NOUS</h1>
    <div id="contact">
        <form action="traitements/envoi_mail.php" method="post">
            <div id="en-tete">
                <div>
                    <label for="nom">Nom<span>*</span></label>
                    <input type="text" name="nom" id="nom" placeholder="Hamilton">
                </div>
                <div>
                    <label for="prenom">Prénom<span>*</span></label>
                    <input type="text" name="prenom" id="prenom" placeholder="Lewis">
                </div>
            </div>
            <div>
                <label for="email">Adresse Mail<span>*</span></label>
                <input type="email" name="email" id="email" placeholder="nom@domaine.fr">
            </div>

            <div class="radio-container">
                    <div>
                        <input type="radio" name="demande" id="informations" value="demande d'information" checked>
                        <label for="informations">Information</label>
                    </div>
                    <div>
                        <input type="radio" name="demande" id="devis" value="demande de devis">
                        <label for="devis">Devis</label>
                    </div>
                    <div>
                        <input type="radio" name="demande" id="reclamation" value="réclamation">
                        <label for="reclamation">Réclamation</label>
                    </div>
            </div>

            <div>
                <label for="message">Votre message<span>*</span></label>
                <textarea name="message" id="message" placeholder="Votre message"></textarea>
            </div>
            <input type="submit" id="envoyer" value="ENVOYER">
            <p id="champ-oblig"><I>*champs obligatoires</I></p>
        </form>
    </div>
</main>

<?php
// Appel du Pied de Page
require "head-foot/footer.php";
?>

</body>
</html>