<?php

session_start();

$host = "us-cdbr-iron-east-03.cleardb.net"; /* Host name */
$user = "b91118ec66dcf8"; /* User */
$password = "8ed6f6be"; /* Password */
$dbname = "heroku_87bfe723a0b6070"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
