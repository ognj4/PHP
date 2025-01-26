<?php

$ime = "Ognjen";

$ucenici = ["Toma", "Janko", "Marko", "Milica", "Petar", "Mirko"];

echo $ucenici[0];
echo $ucenici[2];

$ucenici[0] = "Ognjen";
echo $ucenici[0];

array_push($ucenici, "Darko", "Jovan");
echo $ucenici[7];
