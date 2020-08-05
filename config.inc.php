<?php

/**
 * Some initialisation for Database connection
 * and related functions
*/

$host = "localhost";
$user = "root";
$password = "root";
$dbname = "career";
    
try {
  $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  $messages['ERROR'] = "Connection failed: " . $e->getMessage();
}
        
function my_query($sql){
    global $con;

    if($result = $con->query($sql)){
        return $result;
    } else {
        echo '<div class="alert alert-danger" role="alert">';
        echo "<h2>SQL ERROR</h2>";
        echo "<p style='color:red;'>".$con->error."</p>
        </div>";
        return false;    
    }
}    