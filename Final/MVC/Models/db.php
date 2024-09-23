<?php

  function con()
  {
  	$serverName="localhost";
  	$userName="root";
  	$pass="";
  	$dbName="library";
  	$conn=new mysqli($serverName,$userName,$pass,$dbName);
  	return $conn;
  }

?>