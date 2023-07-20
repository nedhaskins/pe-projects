<?php include('functions.php');

if( isset($_GET['page']) ) {
	$page = $_GET['page']; 
} else {
	$page = 'home';
}

if( isset($_GET['slug']) ) {
	$slug = $_GET['slug'];
}

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php	fetchStylesheet($page); ?>
	<title>Ned Haskins - Web Designer - Richmond, VA</title>
</head>

<?php fetchBodyContent($page); ?>

</html>