<?php

require_once('../model/products.repository.php');

$index = $_GET["index"];

$firstProduct = $products[$index];

require_once('../view/show-product.view.php');