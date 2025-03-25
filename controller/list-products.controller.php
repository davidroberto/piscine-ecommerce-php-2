<?php

// je récupère le repostory (le fichier qui gère l'accès aux données) avec des fonctions
// me permettant de récupérer / filtrer les données
require_once('../model/products.repository.php');


// soit c'est la première fois que la page est chargée et dans ce cas là
// la valeur de $sort est automatiquement "date"
// soit la page a été rechargée par le submit du formulaire de tri 
// et dans ce cas là, la valeur de $sort est ce qu'a choisi l'utilisateur dans le form
if (array_key_exists("sort", $_GET)) {
	$sort = $_GET["sort"];
} else {
	$sort = "date";
}


// j'utilise la fonction du repository qui me permet de récupérer les produits publiés
$publishedProducts = getPublishedProducts($sort);

// dans ma view, j'utiliserai le tableau de produits publiés
// au lieu du tableau de produit, pour ne pas avoir à faire de vérification dans la view
// je fais au max les vérifications dans le controleur
require_once("../view/list-products.view.php");