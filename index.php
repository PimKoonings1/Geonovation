<?php
    echo "Hello Geonovation!";
    $content = file_get_contents('Images/download.png');
    header('Content-Type: image/png');
    echo $content;


?>