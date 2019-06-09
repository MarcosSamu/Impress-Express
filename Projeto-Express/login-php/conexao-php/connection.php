<?php
/**
 * Undocumented function
 *
 * @return \PDO
 */
function getConnection(){
	$dsn = 'mysql:host=localhost;dbname=php_login_database';
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