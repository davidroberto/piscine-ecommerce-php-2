<?php

// je récupère le repostory (le fichier qui gère l'accès aux données) avec des fonctions
// me permettant de récupérer / filtrer les données
require_once('../model/products.repository.php');

// dans ma view, j'utiliserai le tableau de produits publiés
// au lieu du tableau de produit, pour ne pas avoir à faire de vérification dans la view
// je fais au max les vérifications dans le controleur
require_once("../view/list-products.view.php");