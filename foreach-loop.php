<?php

    $numbers = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];

    foreach ($numbers as $value) {
        echo $value . '<br />'; 
    }

    foreach ($numbers as $key => $value) {
        echo $key . ':' . $value . '<br />';
    }
    

?>