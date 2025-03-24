<?php

require_once('../model/products.repository.php');

//je créé un tableau vide qui contiendra les produits publiés
$publishedProducts = [];

// pour chaque article (publié ou non)
foreach($products as $product) {

    // je regarde s'il est publié
	if ($product["isPublished"]) {
        // s'il est publié, je l'ajoute dans le tableau des produits publiés
        array_push($publishedProducts, $product);
    } 
}


// dans ma view, j'utiliserai le tableau de produits publiés
// au lieu du tableau de produit, pour ne pas avoir à faire de vérification dans la view
// je fais au max les vérifications dans le controleur
require_once("../view/list-products.view.php");