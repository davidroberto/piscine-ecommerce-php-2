<?php require_once('partial/_header.php'); ?>

<main>

<form>

	<label>Trier les produits par :
		<select name="sort">
			<option value="date">Date</option>
			<option value="title">Titre</option>
			<option value="price">Prix</option>
		</select>
	</label>

	<input type="submit" />

</form>

<?php foreach($products as $index => $product) { ?>

	<?php if($product["isPublished"]) { ?>

		<p><?php echo $product["title"]; ?></p>
		<p><?php echo $product["price"]; ?></p>
		<p><?php echo $product["promotionPrice"]; ?></p>
		<img src="<?php echo $product["image"]; ?>" />
		<p><?php echo $product["category"]; ?></p>
		<p><?php echo $product["publishedAt"]->format('Y-m-d'); ?></p>
		<a href="http://localhost:8888/php-piscine-ecommerce/controller/show-product.controller.php?index=<?php echo $index; ?>">Voir le produit</a>

	<?php } ?>


<?php } ?>

</main>

</body>
</html>