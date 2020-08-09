<?php
//just used for error checking
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$host = "192.168.64.2";
$user = "career";
$password = "topsecret";
$dbname = "career";
    

$conn = mysqli_connect($host, $user, $password, "career");

//initialize values to empty string
$user_id = "";
$user_status = "";
$user_name = "";
$password = "";
$email = "";
$create_date = "";
$modified_date = "";

$update=false;


$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if(isset($_POST['save'])){
	$user_id = $_POST['user_id'];
	$user_status = $_POST['user_status'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	$sql_insert="INSERT INTO users (user_id,user_status, user_name,user_password,EMAIL_ID,CONTACT_NUMBER,CREATE_DATE,MODIFIED_DATE) VALUES 
		('$user_id', '$user_status', '$user_name', '$password',null, null,null,null)";
	
	$result_insert = mysqli_query($conn, $sql_insert) or die(mysqli_error($conn));

	$_SESSION['message'] = "Record has been saved!";
	ECHO $_SESSION['message'];
	$_SESSION['msg_type'] = "success";

	header("location: admin_users.PHP");
}

if(isset($_GET['delete'])){
	$user_id = $_GET['delete'];
	$sql_delete = "DELETE FROM users WHERE user_id='$user_id'";
	$result_delete = mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: admin_users.PHP");
}

if(isset($_GET['edit'])){
	$user_id = $_GET['edit'];
	$update = true;
	$sql_edit = "SELECT * from users WHERE user_id='$user_id'";
	$result_edit = mysqli_query($conn,$sql_edit) or die(mysqli_error($conn));

	if($result_edit->num_rows){
		$row = $result_edit->fetch_array();
		$user_id = $row['user_id'];
		$user_status = $row['user_status'];
		$user_name = $row['user_name'];
		$password = $row['user_password'];
		$email = $row['EMAIL_ID'];
		$create_date = $row['CREATE_DATE'];
		$modified_date = $row['MODIFIED_DATE'];


	}

}

if(isset($_POST['update'])){

	echo "UPDATE";
	$user_id = $_POST['hidden_user_id'];
	$user_status = $_POST['user_status'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	$sql_update = "UPDATE users SET user_id='$user_id', user_status='$user_status',user_name='$user_name',user_password='$password' WHERE user_id = '$user_id'";
	$result_update = mysqli_query($conn,$sql_update) or die(mysqli_error($conn));

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header("location: admin_users.PHP");
}



?>