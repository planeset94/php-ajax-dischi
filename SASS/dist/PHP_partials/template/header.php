<header>
    <div class="container">
        <!-- Logo spotify -->
        <div>
            <img src="../dist/img/logo.png" alt="logo spotify">

        </div>



        <?php if($_SERVER["REQUEST_URI"]==="/PHP/esercitazione_4(hp-ajax-dischi)/php-ajax-dischi/SASS/Milestone_2/index.php") : ?>
        <!-- Creo il selector dei generi (JS) -->

        <select class="generi_musica" v-model="user_option" @change="cambio_genere">
            <option value="All" selected>All</option>
            <option v-for="gen in generi" :value="gen">{{gen}}</option>
        </select>

        <?php endif ?>

    </div>
</header>