<?php
// die(__DIR__);
// /Applications/MAMP/htdocs/PHP
// /esercitazione_4(hp-ajax-dischi)/php-ajax-dischi/SASS/Milestone_1
require(__DIR__.'/../dist/PHP_partials/db.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/app.css">
    <title>PHP AJAX DISCHI</title>
</head>


<body>
    <div id="root">

        <!-- SITE HEADER -->
        <?=  require(__DIR__.'/../dist/PHP_partials/template/header.php'); ?>
        <!-- /SITE HEADER -->

        <!-- SITE MAIN -->
        <?=  require(__DIR__.'/../dist/PHP_partials/template/main.php'); ?>
        <!-- /SITE MAIN -->

    </div>

</body>

</html>