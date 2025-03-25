<?php require_once('partial/_header.php'); ?>


<main>


	<h1><?php echo $firstProduct["title"]; ?></h1>
	<p>Prix : <?php echo $firstProduct["price"]; ?></p>
	<p>Prix promo : <?php echo $firstProduct["promotionPrice"]; ?></p>
	<img src=" <?php echo $firstProduct["image"]; ?>" alt="">

</main>

</body>

</html>