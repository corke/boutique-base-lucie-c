<?php
// traitements / données
/*
require : provoquera erreur php & pas d'affichage de la boutique
vs include : nous permet d'éxécuter / afficher tout de même la boutique
si on a pas d'articles / si on trouve pas le fichier qui contient les articles
_once : superflu car si on appelle 2 fois le script ça redéclare seulement la variable.
*/
include("inc/data.php");

// présentation
// inclusion des data => ici on a accès à la variable $products
// print_r($products);

include("templates/header.php"); ?>
<main>
    <p>Ici se tiendra la liste de mes articles</p>
    <!-- objectif de l'aprem: afficher la liste des articles ici! -->
    <!-- loupe = lien qui affiche le détail d'un produit -->
    <!-- bouton ajouter au panier pour plus tard -->
</main>
<?php include("templates/footer.php"); ?>
