<?php
	function conexion(){

	$host = "post=dpg-cr6g05g8fa8c73e4buu0-a";
	$port = "port=5432";
	$dbname = "dbname=dbprueba_dgt9";
	$user = "user=dbprueba_dgt9_user";
	$password = "password4vtZGYXcuTnx7EexvBxemgIT6Jz7IZMg";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
