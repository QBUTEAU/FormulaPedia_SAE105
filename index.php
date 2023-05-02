<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | FormulaPedia</title>
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
    
    <main>
        <div id="fond-f1">
            <div id="titre">
                <strong id="index-titre1">L'HISTOIRE DE LA</strong><br>
                <strong id="index-titre2">FORMULE 1</strong>
            </div>
        </div>


        <h1>LA PLUS GRANDE DES DISCIPLINES</h1>
        <div id="histoire-f1">
            <div id=histoire-f1_texte>
                <p>Depuis sa création en 1950, la Formule 1 est considérée comme
                    la "catégorie reine" du sport automobile. Faisant défier les 20
                    meilleurs pilotes du monde aux quatre coins de la planète et régie
                    par la Fédération Internationale de l'Automobile, elle fait rêver
                    beaucoup de pilotes et constructeurs automobiles. Après 1079 Grands Prix
                    et 72 ans de championnat, c'est la Scuderia Ferrari qui est le constructeur
                    le plus titré de l'histoire, avec 16 réalisations. Quant au championnat
                    des pilotes, après avoir dominer les deux dernières décennies, il s'agit
                    de Michael Schumacher et Lewis Hamilton avec 7 titres.
                </p>
            </div>
            <div id=histoire-f1_image></div>
        </div>


        <h1>LA FORMULE 1 DE NOS JOURS</h1>
        <div id="f1-today">
            <div id="f1-today_image"></div>
            <div id="f1-today_texte">
                <p>Lors de ces deux dernières années, les records en Formule 1 ne cessent d'être battus,
                comme le nombre de victoires par Lewis Hamilton (103), le nombre de victoires
                en une seule saison par Max Verstappen (15), ou encore le nombre de départs pris
                en Formule 1 par Fernando Alonso (356). L'année 2021 a été pour la Formule 1 une
                saison qui a marqué les esprits et l'histoire, avec cette fameuse bataille entre
                Lewis Hamilton et Max Verstappen, dont la victoire au championnat s'est décidé lors
                du dernier tour de la dernière course de la saison, à l'avantage du pilote Red Bull, qui
                réitérera en 2022 lors d'une saison dominée de bout en bout.</p>
            </div>
        </div>
    </main>

    <?php
    // Appel du Pied de Page
    require "head-foot/footer.php";
    ?>
    </body>
</html>