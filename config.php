<?php

$host = "localhost"; /* Host name */
$user = "souvik"; /* User */
$password = "test1234"; /* Password */
$dbname = "jeca sign up"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

