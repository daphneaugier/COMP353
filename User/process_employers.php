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

//initialize values to empty string
$employer_id = "";
$name = "";
$password = "";
$email = "";
$phone_num ="";
$create_date = "";
$update_date = null;

$update=false;


$sql = "SELECT * FROM employer";
$result = mysqli_query($conn, $sql);

if(isset($_POST['save'])){
	$employer_id = $_POST['employer_id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$phone_num = $_POST['phone_num'];
	$email = $_POST['email'];
	$create_date = $_POST['create_date'];


	$sql_insert="INSERT INTO employer (EMPLOYER_ID,EMPLOYER_NAME, PASSWORD,CONTACT_NUMBER,EMAIL_ID,CREATE_DATE,UPDATE_DATE) VALUES 
		('$employer_id', '$name', '$password', '$phone_num','$email','$create_date',null)";
	
	$result_insert = mysqli_query($conn, $sql_insert) or die(mysqli_error($conn));

	$_SESSION['message'] = "Record has been saved!";
	ECHO $_SESSION['message'];
	$_SESSION['msg_type'] = "success";

	header("location: admin_employers.PHP");
}

if(isset($_GET['delete'])){
	echo "DELETE";
	$employer_id = $_GET['delete'];
	$sql_delete = "DELETE FROM employer WHERE EMPLOYER_ID='$employer_id'";
	$result_delete = mysqli_query($conn,$sql_delete) or die(mysqli_error($conn));

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: admin_employers.PHP");
}

if(isset($_GET['edit'])){
	$employer_id = $_GET['edit'];
	$update = true;
	$sql_edit = "SELECT * from employer WHERE employer_id='$employer_id'";
	$result_edit = mysqli_query($conn,$sql_edit) or die(mysqli_error($conn));

	if($result_edit->num_rows){
		$row = $result_edit->fetch_array();
		$employer_id = $row['EMPLOYER_ID'];
		$name = $row['EMPLOYER_NAME'];
		$password = $row['PASSWORD'];
		$phone_num = $row['CONTACT_NUMBER'];
		$email = $row['EMAIL_ID'];
		$create_date = $row['CREATE_DATE'];
		$update_date = $row['UPDATE_DATE'];

	}

}

if(isset($_POST['update'])){

	$employer_id = $_POST['hidden_employer_id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$phone_num = $_POST['phone_num'];
	$email = $_POST['email'];
	$create_date = $_POST['create_date'];
	$update_date = $_POST['update_date'];

	$sql_update = "UPDATE employer SET EMPLOYER_ID='$employer_id', EMPLOYER_NAME='$name', PASSWORD='$password',CONTACT_NUMBER='$phone_num', EMAIL_ID = '$email',CREATE_DATE='$create_date',UPDATE_DATE='$update_date' WHERE EMPLOYER_ID = '$employer_id'";
	$result_update = mysqli_query($conn,$sql_update) or die(mysqli_error($conn));

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header("location: admin_employers.PHP");
}



?>