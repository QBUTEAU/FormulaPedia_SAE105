<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données | FormulaPedia</title>
    <link rel="icon" type="image/png" href="images/favicon-f1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
    <?php
    // Déclaration du fichier et de son chemin dans une variable
        $fichier = "datas/f1.json";
        // Lecture du fichier - On stocke le contenu dans une autre variable
        $tabFilmsJSON = file_get_contents($fichier);
        // Décodage du contenu du fichier et transformation en tablEau php (array)
        $tabFilmsPHP = json_decode($tabFilmsJSON,true);
    ?>
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require "head-foot/header.php";
?>

<main id="main_donnees">
    <h1>PALMARÈS DU CHAMPIONNAT DU MONDE DES PILOTES (DEPUIS 1950)</h1>

    <table id="tableau" class="hover">
        <thead>
            <tr>
                <th>ANNÉE :</th>
                <th>PILOTE :</th>
                <th>NATIONALITÉ :</th>
                <th>ÉCURIE :</th>
                <th>CHASSIS :</th>
                <th>MOTEUR :</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tabFilmsPHP as $film){
            echo "<tr>";
            echo "<td>".$film['ANNÉE'].'<br>'."\n";
            echo "<td>".$film['PILOTE'].'<br>'."\n";
            echo "<td>".$film['NATIONALITÉ'].'<br>'."\n";
            echo "<td>".$film['ÉCURIE'].'<br>'."\n";
            echo "<td>".$film['CHASSIS'].'<br>'."\n";
            echo "<td>".$film['MOTEUR'].'<br>'."\n";
            }
    ?>
        </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <script>
            $(document).ready(function() {
                $('#tableau').DataTable( {
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'
                    }
                } );
            } );
    </script>
</main>

<?php
// Appel du Pied de Page
require "head-foot/footer.php";
?>

</body>
</html>