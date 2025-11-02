<?php
$people = [
    [
    "Taro", 25, "men"
    ],
    [
    "Jiro", 20, "men"
    ],
    [
    "Hanako", 20, "women"
    ],
    ];

foreach ($people as $peoples) {
    echo $peoples[0] . "(" . $peoples[1] . "歳". $peoples[2] . ")" . "<br />";
   
}


