<?php

    function hellow_world() {
        echo "Hello, world!";
    }
    hellow_world();
    echo '<br />';

    function sum1($num1, $num2) {
        echo $num1 * $num2;
    }
    sum1 (10, 20);


    function sum2($num1, $num2) {
        return $num1 * $num2;
    }
    echo '<br />';
    echo sum2(10, 20) + 30;

?>