<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenaires | FormulaPedia</title>
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
        <div class="center-container">
            <h1>PARTENAIRES</h1>
            <p>
            Nous sommes un jeune groupe d’amis créatifs guidés par des idées
            ambitieuses, c’est pour cela que nous avons décidé d’allier nos forces
            et de s’entraider afin de donner vie à nos projets respectifs. En alliant
            les spécialités de chacun, nous avons pu obtenir des réalisations
            avec la meilleure qualité possible. Voici notre équipe et nos sites respectifs :
            </p>
        </div>

        <div class="cards-container">
            <a href="/">
                <div class="card-container">
                    <div class="card">
                        <h3>FormulaPedia</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="images/quentin.jpg" alt="quentin-buteau">
                                <h4>Quentin BUTEAU</h4>
                            </div>
                            <p>"Passionné de sport automobile depuis toujours,
                                j'ai choisi de faire un site sur la Formule 1
                                et son histoire, regroupant une présentation de
                                celles-ci ainsi que l'ensemble des champions du
                                monde de la discipline."</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour revenir à l'accueil</p>
                </div>
            </a>

            <a href="https://mmi22c10.sae105.ovh" target="_blank">
                <div class="card-container">
                    <div class="card">
                        <h3>UECVision</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="images/cassandre.jpg" alt="cassandre-lamaty">
                                <h4>Cassandre LAMATY</h4>
                            </div>
                            <p>"Partenaire de multiples animations de type Eurovision
                                sur Discord dont UECVision, j'ai pris la décision de
                                créer un site répertoriant les musiques passées lors
                                de chaque édition."</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour accéder au site</p>
                </div>
            </a>
            
            <a href="http://mmi22c07.sae105.ovh/" target="_blank">
                <div class="card-container">
                    <div class="card">
                        <h3>Galiph'rance</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="images/julien-gioffredi.jpg" alt="julien-gioffredi">
                                <h4>Julien GIOFFREDI</h4>
                            </div>
                            <p>"Fan de la série britannique <I>Doctor Who</I>, j'ai décidé
                                d'en faire un site pour les fans français."</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour accéder au site</p>
                </div>
            </a>

            <a href="https://mmi22c14.sae105.ovh/" target="_blank">
                <div class="card-container">
                    <div class="card">
                        <h3>OUTER WORLD</h3>
                        <div class="card-content">
                            <div class="img-container">
                                <img src="images/julien-marandat.jpg" alt="julien-marandat">
                                <h4>Julien MARANDAT</h4>
                            </div>
                            <p>"Bercé par la musique électronique depuis tout petit,
                                j’ai récemment eu l’idée d’organiser un festival avec
                                les plus gros noms de la scène underground
                                afin de rendre cette culture plus accessible pour tous."</p>
                        </div>
                    </div>
                    <div></div>
                    <p>Cliquez pour accéder au site</p>
                </div>
            </a>
        </div>

        <div id="livrables">
            <div id="charte-projet"><a href="sae106/SAE106-C-CHARTE-Buteau-Lamaty-Marandat-Gioffredi.pdf" target="_blank">CHARTE DE PROJET</a></div>
            <div id="planning"><a href="sae106/SAE106-C-PLAN-Buteau-Lamaty-Marandat-Gioffredi.pdf" target="_blank">PLAN DE PROJET</a></div>
        </div>
</main>

<?php
// Appel du Pied de Page
require "head-foot/footer.php";
?>

</body>
</html>