const page = location.pathname;

if (page == ""){
    var onglet = document.querySelector(".onglet-accueil");
}
if (page == "/donnees.php"){
    var onglet = document.querySelector(".onglet-donnees");
}
if (page == "/galerie.php"){
    var onglet = document.querySelector(".onglet-galerie");
}
if (page == "/contact.php"){
    var onglet = document.querySelector(".onglet-contact");
}
if (page == "/partenaires.php"){
    var onglet = document.querySelector(".onglet-partenaires");
}

onglet.style.color = "#ED1D24";