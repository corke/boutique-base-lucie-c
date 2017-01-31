<?php

// Traitements
// Récupérer les données
// Ici: UN produit
include("inc/data.php");

// Il nous faut l'info "quel produit?"
// Pour récupérer cette info depuis une autre page, on passe l'index
// du produit qu'on veut afficher dans un parametre GET dans l'URL
$indexDuProduitQueJeVeuxAfficher = $_GET["index"];

// On récupère les infos du produit concerné dans le tableau $produits
$product = $products[$indexDuProduitQueJeVeuxAfficher];
 
// Présentation
// C'est une page "normale" de ma boutique cad elle a un header et un footer
// appeler le template qui présente le détail d'un produit
include("templates/header.php");
include("templates/product-single.php");
include("templates/footer.php");
?>
