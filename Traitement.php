<?php
$dsn='mydb';
$user ='';
$password ='';
try{
	$dbh =new PDO($dsn,$user,$password);

}cath (PDOException $e){

	echo 'Connexion échouée': ' . $e->getMessage();
}
?>