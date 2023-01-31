<?php

$mysqli = new mysqli("localhost","root","","database_name");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// else
//  {
//  	echo "database connected Successfully";
// }
?>

