<?php

//namespace database;

/**
 * 
 */
class Database 
{
	
	


	public static function dbConnect(){
	  $serverName = 'localhost';
	  $dbName = 'phpcrud';
	  $password = 'toor';
	  $user = 'root';

		$connection = new mysqli($serverName, $user, $password, $dbName);

		if($connection->connect_error){
			die("Database connection failed" . $connection->connect_error);
		}
	}


	public static function query($sql = ""){
		$con = self::dbConnect();

		$result = $con->query($sql);
		if(!$result){
			throw new Exception("Error Processing Request", 1);
			
		}

		$row = $result->fetch_assoc();

		print_r($row);
	}

}

Database::query('SELECT * FROM client');