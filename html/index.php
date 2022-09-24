<?php

$PDO = new PDO("mysql:host=mysql",'root','root');
$state = "SHOW TABLES";
$state= $PDO->prepare($state);
var_dump($state->execute());
var_dump($state->errorInfo());
