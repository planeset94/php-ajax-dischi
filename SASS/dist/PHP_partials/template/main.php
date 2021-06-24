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