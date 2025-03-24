<?php


function validateProduct() {

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
	
		if (strlen($title < 10)) {
			$message = "Le titre doit faire 10 caractères min";
			return $message;
		}

		if ($price < 0) {
			$message = "Le prix doit être supérieur à 0";
			return $message;
		}

		if ($promoPrice > $price) {
			$message = "Le prix doit être supérieur au prix promo";
			return $message;
		}	
	
		$message = "L'article '" . $title . "' avec le prix " . $price . " a bien été envoyé.";
		return $message;
	}
}


$message = validateProduct();


require_once('../view/create-product.view.php');