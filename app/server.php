<?php

require_once __DIR__ . "/../database/database.php";
header('Content-Type: application/json');
$json = json_encode($dischi);
echo $json;

// 2nd milestone:
// farà il json encode del mio database. => require_once
// ricordatevi dell'header (vedi le slide)
