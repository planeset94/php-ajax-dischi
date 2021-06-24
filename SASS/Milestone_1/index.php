<?php

require('../dist/PHP_partials/db.php');


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

        <header>
            <div class="container">
                <!-- Logo spotify -->
                <div>
                    <img src="../dist/img/logo.png" alt="logo spotify">

                </div>

                <!-- Creo il selector dei generi  -->
                <!-- <select >
                    <option>Genre</option>
                    <option ><span>{{gen}}</span>
                    </option>

                </select> -->


            </div>
        </header>

        <main>

            <div class="container">



                <?php foreach ($albums as $album) : ?>


                <div class="square">
                    <div class="photo">
                        <img src="<?=$album['poster'] ?>">
                    </div>
                    <h5><?=$album['title'] ?></h5>
                    <p><?=$album['author'] ?></p>
                    <p><?=$album['year'] ?></p>

                </div>
                <?php endforeach ?>


            </div>


        </main>

    </div>






</body>

</html>