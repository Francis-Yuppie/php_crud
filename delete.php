<?php

  if( isset($_GET["id"])){
  	$id = $_GET["id"];


   $serverName = 'localhost';
   $dbName = 'phpcrud';
   $password = 'toor';
   $user = 'root';

   $con = new mysqli($serverName, $user, $password, $dbName);

    if($con->connect_error){
      die('Connection to Database failed' . $con->connect_error);
    }

     $sql = "DELETE FROM client WHERE id = $id";
     $con->query($sql);
  }

  header("location: index.php");
  exit();