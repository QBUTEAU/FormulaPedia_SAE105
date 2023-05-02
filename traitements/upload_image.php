<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téléchargement d'image | FormulaPedia</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon-f1.png">
</head>

<?php
// Appel du bloc Header et du Menu>
require "../head-foot/header.php";
?>

<main id="main-upload">
    <div>
        <?php

            // Vérification de sélection d'un fichier
            // Récupération des attributs du fichier (nom,type,taille)
            if (!empty($_FILES)) {
            $image_nom=$_FILES['image']['name'];
            $image_type=$_FILES['image']['type'];
            $image_taille=$_FILES['image']['size'];
            $image_temporaire=$_FILES['image']['tmp_name'];
            $image_error=$_FILES['image']['error'];
            } else {
            echo 'Vous devez sélectionner un fichier';
            }

            // Début Vérification de la conformité
            $affichage_erreurs='';
            $erreurs=0;

            // Test si pas d'erreur de sélection
            if ($image_error == 0) {
                    // Test format du fichier en fonction de l'extension
                if ($image_type != 'image/jpeg') {
                $affichage_erreurs .="Votre image doit être au format JPEG.<br>";
                $erreurs++;
                }

                // Test format du fichier avec la fonction exif_imagetype
                if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
                $affichage_erreurs .="Votre image doit être au format JPEG.<br>";
                $erreurs++;
                }

                if ($image_taille > 500000){
                $affichage_erreurs .="La taille de votre image ne doit pas excéder 500ko.<br>";
                $erreurs++;
                }

            } else {
            $affichage_erreurs='Impossible de télécharger le fichier, erreur de sélection<br>';
            }

            // On affiche les erreurs
            if ($erreurs != 0) {
            echo $affichage_erreurs;
            } else {
            echo "Votre image a bien été téléchargé.<br>";
            }

            if ($erreurs == 0) {
                        
                $nbFichiers=-2;                        
                $dossier= opendir("../images/galerie");
                while ($fichier = readdir($dossier)) {
                $nbFichiers++;
                }

                // On renomme le fichier - imageN.jpg
                $image_num=$nbFichiers+1;
                $image_nom='image'.$image_num.'.jpg';

                // On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
                $destination="../images/galerie/".$image_nom;

                // On déplace le fichier dans son emplacement définitif
                if (move_uploaded_file($image_temporaire, $destination)) {
                $erreurs=0;
                } else {
                $affichage_erreurs='Erreur de téléchargement.<br>';
                $erreurs++;
                }
                }
        ?>
        <div id=retour>
            <a href="../galerie.php">RETOUR</a>
        </div>
    </div>
</main>

<?php
// Appel du Pied de Page
require "../head-foot/footer.php";
?>
</body>
</html>