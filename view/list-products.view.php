<html>

<body>

<main>

<?php foreach($products as $product) { ?>

	<?php if ($product["isPublished"]) {?>
		<p><?php echo $product["title"]; ?></p>
		<p><?php echo $product["price"]; ?></p>
		<p><?php echo $product["promotionPrice"]; ?></p>
		<img src="<?php echo $product["image"]; ?>" />
		<p><?php echo $product["category"]; ?></p>
		<p><?php echo $product["publishedAt"]->format('Y-m-d'); ?></p>
	<?php } ?>

<?php } ?>

</main>

</body>
</html>