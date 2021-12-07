<?php
    header('Access-Control-Allow-Origin: *');
    $jsonstring = file_get_contents("question3.json");
    echo $jsonstring;
?>