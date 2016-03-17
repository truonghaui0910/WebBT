<?php

require 'rb.php';
$dsn = "localhost";
$username = "root";
$password = "";
R::setup('mysql:host=localhost;dbname=webbt','root','');
$stdA= R::dispense("web");
$stdA->image="image/4.jpg";
$stdA->name="mariaOza";
$stdA->title="so 1 viet nam";

//R::store($stdA);
echo "$stdA<br>";
$load = R::findAll("web", "order by name");
echo $load[0]->name;
?>

