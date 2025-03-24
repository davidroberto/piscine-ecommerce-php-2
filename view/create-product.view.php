<html>

<body>


<h1>Créer un produit</h1>

<h3><?php echo $message; ?></h3>


<form method="post">

	<label>Titre
		<input type="text" name="title">
	</label>

	<label>Prix
		<input type="number" name="price">
	</label>

	<label>Prix promo
		<input type="number" name="promoPrice">
	</label>

	<label>Catégorie
		<input type="text" name="category">
	</label>

	<label>Image
		<input type="text" name="image">
	</label>

	<button type="submit">Valider</button>


</form>

</body>

</html>