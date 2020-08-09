<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "../config.inc.php";
//include_once "../functions.inc.php";

$user_id = "";
$user_name = $_POST['firstName'].' '.$_POST['lastName'];
$user_password = $_POST['password'];
$email_id = $_POST['email'];
$join_date = ""; //today's date;

//$sql = "INSERT INTO users (user_id, user_name, user_password, email_id) VALUES 
//('$user_id', '$user_name', '$user_password', '$email_id')";

$sql = "INSERT INTO users (user_id, user_status, user_name, user_password, EMAIL_ID,CONTACT_NUMBER,CREATE_DATE, MODIFIED_DATE) VALUES
        ('test','4', '$user_name', '$user_password', null, null, null, null)";

my_query($sql)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirmation Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="../index.php" role="button">Continue to homepage</a>
  </p>
</div>
</body>
</html>