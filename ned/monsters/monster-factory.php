<?php

	function monsterGenerator($id, $name, $fav_food, $age, $adopted, $portrait) {
		$monster = [
			"id" => $id,
			"name" => $name,
			"fav_food" => $fav_food,
			"age" => $age,
			"adopted" => $adopted,
			"portrait" => $portrait,
		];
		return $monster;
	}

	$mrbanana = monsterGenerator(1066, "Fallout", "tomatoes", 10, false, 'portraits/mr-banana.jpg');
	$fragoo = monsterGenerator(3155, "Fragoo", "Twix bars", 8, false, "portraits/fragoo.jpg");
	$reads = monsterGenerator(3478, "Miss Reads-A-Lot", "Madeline cookies and tea", 9, true, "portraits/miss-reads-a-lot.jpg");
	$shadow = monsterGenerator(3155, "Shadow", "hot sauce", 4, false, "portraits/shadow.jpg");

	$monsters = [$mrbanana, $fragoo, $reads, $shadow]; //????

//There has to be some logic to assign these new arrays NAMES and to place them in another variable that acts as an array to hold

?>

<!--The answer you've been looking for.-->

<?php foreach ($monsters as $m) {

	$story = "My favorite food is " . $m["fav_food"] . " and I am " . $m["age"] . " years old.";
	$status = $m["adopted"];
	$statusMessage = "Needs a home.";


	if ($status == 1) { //if this is true:
		$statusMessage = "Adopted!";
	}

?>

	<li class='monster'>

		<monster-card>
			<h2 class='name'><?=$m["name"]?></h2>
			<picture class='portrait'>
			<img src='<?=$m["portrait"]?>'width='200'></picture>
			<p class='story'><?=$story?></p>
			<p class='status'><?=$statusMessage?></p>
		</monster-card>

	</li>

<?php } ?>