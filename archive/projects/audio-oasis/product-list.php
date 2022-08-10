<?php

$json = file_get_contents("data.json");
//this pulls the data from the file and assigns the whole object to a variable.  This can be printed out as a string with echo.

$audiophileData = json_decode($json, true);
//now this new variable is in associative array format!



$products = $audiophileData['products'];

?>

<?php foreach ($products as $product) { //This bracket remains open for now because everything that follows is related to what happens in the loop.
	$name = $product['name'];
	$image = $product['image'];
	$brand = $product['brand'];
	$tagline = $product['tagline'];
	$description = $product['description'];
	$features = $product['features'];
	$price = $product['price'];
	$stock = $product['stock'];

//Assign each key in the array to a variable that can be called in the HTML. The associated value will then be printed out. 

?>

<div class='product-module'>

		<picture>
			<img src='<?=$image?>'>
		</picture>

		<div class='product-text'>
			<h2><?=$name?></h2>
			<h3><?=$tagline?></h3>

			<p><?=$description?></p>

			<ul>
				<?php foreach ($features as $feature) {
					echo "<li>" . " $feature ". "</li>";
				} ?>

			<div class='price'>
				<p>$<?=$price?></p>

				<?php if ( is_numeric($product['stock']) ) { ?>

					<p class='inventorystatus' style='font-weight: 700; color: green;'>In Stock</p>


				<?php } elseif ($product['stock'] == "Low") { ?>

					<p class='inventorystatus' style='font-weight: 700; color: yellow;'>Low stock!</p>


				<?php } elseif ($product['stock'] == "Sold Out") { ?>
					<p class='inventorystatus' style='font-weight: 700; color: red;'>Sold out!</p>


				<?php } else { ?>
					<p class='inventorystatus' style='font-weight: 700; color: green;'>In Stock</p>
				<?php } ?>

			</div>


		</div>

</div> <!--product-module-->

<?php } ?>
