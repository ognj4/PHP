<?php

require_once "Models/User.php";

$korisnikOgnjen = new User("ognjen@gmail.com", "123123");
echo $korisnikOgnjen->save();


$korisnikJeca = new User("jeca@gmail.com", "123123");
echo $korisnikJeca->save();
