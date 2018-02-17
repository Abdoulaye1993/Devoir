<?php

$server="localhost";
$login="root";
$passwd="rootaliou";
$dbname="school";
//Creation d'un objet de connection a la base 
$com=new POD('mysql:host='.$server.';dbname=school;charnet=utf8';$login,$passwd);
?>