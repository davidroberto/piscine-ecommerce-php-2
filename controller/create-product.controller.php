<?php

$message = "";

if (array_key_exists('title', $_POST) &&
	array_key_exists('image', $_POST) &&
	array_key_exists('price', $_POST) &&
	array_key_exists('promoPrice', $_POST) &&
	array_key_exists('category', $_POST)

) {
	$title = $_POST["title"];
	$image = $_POST["image"];
	$price = $_POST["price"];
	$promoPrice = $_POST["promoPrice"];
	$category = $_POST["category"];


	$message = "L'article '" . $title . "' avec le prix " . $price . " a bien été envoyé.";
}




require_once('../view/create-product.view.php');