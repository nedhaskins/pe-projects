<?php include('functions.php');


$x = pageData();

print_r($x);


//Something is not connecting the index page to the page that is being called.  But -- the correct JSON file is being pulled.  So currentPage() is working.

//pageData() is also working.

//How is it being called right now?


// echo"<span style='color:red'>" . $json . "</span><br>";



// print_r("<span style='color:green'>" . $data . "</span><br>");

// $id = $data['id'];
// $title = $data['title'];
// $intro = $data['intro'];
// $sections = $data['sections'];
// $heading = $data['sections']['heading'];

// echo $sections;

// echo $title;

?>

<header class='site-header'>
	<p><?=queryString();?></p>
	<?php include('partials/site-menu.php');?>
</header>




<main class='page-content'>
	<?php renderPageTemplate(); ?>
</main>



