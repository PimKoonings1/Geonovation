<?php
    echo "Hello Geonovation!";
    header("Content-Type: image/PNG");
    header("Content-Length: " . filesize("download.PNG"));
    readfile("download.PNG");



?>