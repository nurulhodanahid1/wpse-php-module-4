<?php

$month1 = "January";
$month2 = "February";

if($month1 === "June"){
    echo "First month of the yerar";
} else if ($month1 === "January" && $month2 === "February"){
    echo "First two months of the year";
} else if ($month1 === "January" && $month2 === "Decembar"){
    echo "First and last months of the year";
} else if ($month1 === "December" || $month2 === "November" ) {
    echo "Last two months of the year";
} else {
    echo "No conditions specified";
}

?>