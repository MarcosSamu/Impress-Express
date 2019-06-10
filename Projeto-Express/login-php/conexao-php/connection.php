<?php
/**
 * Undocumented function
 *
 * @return \PDO
 */
function getConnection(){
	$dsn = 'mysql:host=localhost;dbname=express';
	$user = 'root';
	$pass = '';

	try{
		$pdo = new PDO($dsn, $user, $pass);
		return $pdo;
	}catch(PDOException $ex){
		echo 'erro ao connectar: '.$ex->getMessage();
	}
}
?>