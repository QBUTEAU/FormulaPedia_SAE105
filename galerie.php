<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie | FormulaPedia</title>
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

<main id="main-galerie">
    <h1>GALERIE</h1>
    <form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image" />
        <input type="submit" value="TÉLÉCHARGER" />
    </form>

    <div class="container">
    <?php
            $dir = 'images/galerie';
            $files1 = scandir($dir);

            for ($i=2; $i < count($files1); $i++) { 
                echo '<img src="images/galerie/'.$files1[$i].'" alt="'. strstr($files1[$i], '.', true) .' picture">';
                }

                if(count($files1)%3 == 1){
                    echo '<div class="fantome"></div>';
            }
    ?>
    </div>
</main>

<?php
// Appel du Pied de Page
require "head-foot/footer.php";
?>

</body>
</html>