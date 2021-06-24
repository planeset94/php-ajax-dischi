<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/app.css">
    <title>PHP AJAX DISCHI - 2 </title>
</head>


<body>
    <div id="root">

        <!-- SITE HEADER -->
        <?=  require(__DIR__.'/../dist/PHP_partials/template/header.php'); ?>
        <!-- /SITE HEADER -->

        <!-- SITE MAIN -->

        <main>

            <div class="container" v-show="albums.length > 9">

                <div class="square" v-for="el in albums">
                    <div class="photo">
                        <img :src="el.poster">
                    </div>
                    <h5>{{el.title}}</h5>
                    <p>{{el.author}}</p>
                    <p>{{el.year}}</p>

                </div>



            </div>


        </main>


    </div>

    <?= require(__DIR__.'/../dist/PHP_partials/template/footer.php')?>

</body>

</html>