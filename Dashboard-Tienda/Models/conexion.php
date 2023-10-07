<?php
 $mysqli = new mysqli("localhost", "root", "1023974256", "gpamotors");
 /* $mysqli->set_charset("utf8"); */
 
 if ($mysqli->connect_errno) {
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
 }
  echo $mysqli->host_info . "\n";

 $mysqli = new mysqli("127.0.0.1", "root", "1023974256", "gpamotors", 3306);
 if ($mysqli->connect_errno) {
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
 } 
?>