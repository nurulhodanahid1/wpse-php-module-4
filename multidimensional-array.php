<?php

    $myArry = [
        "full_name" => "Md. Nurul Hoda Nahid",
        "age" => 23,
        "address" => [
            "country" => "Bangladesh",
            "city" => "Dhaka",
            "phone_number" => [
                "country_perfix" => "+880",
                "national_number" => "1322356764",
            ],
        ],
    ];

    echo $myArry["full_name"];
    echo '<br />';
    echo $myArry["address"]["phone_number"]["national_number"];

?>