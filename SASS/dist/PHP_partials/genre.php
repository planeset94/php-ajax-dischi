<?php

$genres=['Rock', 'Pop', 'Jazz', 'Metal'];










header ('Content-Type: application/json');
echo json_encode($genres);



?>