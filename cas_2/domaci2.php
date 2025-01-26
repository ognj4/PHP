<?php

$products = ["pc", "monitor", "keyboard"];

$products[1] = "laptop";
var_dump($products);

$fruit = ["apple", "orange"];

$mergedArr = array_merge($products, $fruit);
var_dump($mergedArr);
