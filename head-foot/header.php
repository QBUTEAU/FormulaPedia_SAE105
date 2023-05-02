<?php
    $link = basename($_SERVER['PHP_SELF']);
?>

<header>
        <div id="logo">
            <img src="../images/logo-f1.png" alt="logo-F1">
        </div>
        <nav id="pages">
            <ul id="liens">
                <li><a <?= $link === 'index.php' ? 'class="actif"' : 'class="non-actif"' ?> href="../index.php">ACCUEIL</a></li>
                <li><a <?= $link === 'donnees.php' ? 'class="actif"' : 'class="non-actif"' ?> href="../donnees.php">DONNÉES</a></li>
                <li><a <?= $link === 'galerie.php' ? 'class="actif"' : 'class="non-actif"' ?> href="../galerie.php">GALERIE</a></li>
                <li><a <?= $link === 'contact.php' ? 'class="actif"' : 'class="non-actif"' ?> href="../contact.php">CONTACT</a></li>
                <li><a <?= $link === 'partenaires.php' ? 'class="actif"' : 'class="non-actif"' ?> href="../partenaires.php">PARTENAIRES</a></li>
            </ul>
        </nav>
</header>