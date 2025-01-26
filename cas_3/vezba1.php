<?php

$users = [
	"name" => "Ognjen",
	"lastName" => "Stepanovic",
	"age" => 22,
];

$users['age'] = [44];
var_dump($users);

$data = ["model" => "PC", "version" => 2.0, "price" => 999];

unset($data["model"]);
var_dump($data);
