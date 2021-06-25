<!-- /Applications/MAMP/htdocs/PHP/esercitazione_4(hp-ajax-dischi)/php-ajax-dischi/SASS/Milestone_2 -->


<?php

if (str_contains($_SERVER["REQUEST_URI"], "Milestone_2")) : ?>

<!-- PRIMA VUE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<!-- POI LA CDN DI AJAX -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"
    integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<!-- MY SCRIPT  -->
<script src="../dist/js/app.js"></script>

<?php endif; ?>