<?php

$patike = ["Reebok", "Adidas", "Nike"];

sort($patike);

$patike[3] = "Puma";
sort($patike);

var_dump($patike);

unset($patike[0]);
var_dump($patike);
