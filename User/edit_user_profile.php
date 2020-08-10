<?php 
//just used for error checking
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "career";
    

$conn = mysqli_connect($host, $user, $password, "career");

//hardcoded user_id NEED TO CHANGE TO USE SESSIONS!!!
$user_id = 2;

$sql = "SELECT * FROM users WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>