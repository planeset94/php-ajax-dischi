<?php
// die(__DIR__);
require( __DIR__ .'/db.php');

header ('Content-Type: application/json');
echo json_encode($albums);



?>