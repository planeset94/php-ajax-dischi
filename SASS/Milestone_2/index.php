<!-- esercitazione_4(hp-ajax-dischi)/php-ajax-dischi/SASS/Milestone_2 -->

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

            <div class="container">

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









        <!-- /SITE MAIN -->

    </div>

    <!-- LINK CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- LINK CDN VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <!-- MY SCRIPT  -->
    <script src="../dist/js/app.js"></script>



</body>

</html>