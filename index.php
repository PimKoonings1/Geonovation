<?php
    echo "Hello Geonovation!";
    $content = file_get_contents('Images/download.jpg');
    header('Content-Type: image/jpg');
    echo $content;


?>