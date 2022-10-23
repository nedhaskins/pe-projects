<?php require('router.php'); ?>
<?php include('functions.php'); ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <h1>Highways of Virginia</h1>

    <?php include('navbar.php');

    if($page == 'home') {
    include('templates/pages/home.php');
    }

    if($page == 'create') {
        include('templates/pages/create.php');
    }

    if($page == 'route') {
        include('templates/pages/route.php');
    }

    if($page == 'routes') {
        include('templates/pages/routes.php');
    }

    if($page == 'update') {
        include('templates/pages/update.php');
    }

    if($page == 'delete') {
        include('templates/pages/delete.php');
    }

    if($page == 'success') {
        include('templates/pages/success.php');
    }
    
    ?>

</body>
</html>