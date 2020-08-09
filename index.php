<?php
session_start();
include_once "config.inc.php";
include_once "functions.inc.php";
include_once "users.inc.php";

my_page_start("Web Career Portal");

if (getUserConnection()){
    $page = prepareUserMenu();
    	    if( $_SESSION["type"] == "employer"){
    	    	$emp_name=$_SESSION['emp_id'];
		   		echo "<h6>Emplyer ID: "; print_r ($_SESSION["emp_id"]);echo "</h6><br> ";
		   		$num_of_post=numofappliposted();
		   		echo "<label> You have posted $num_of_post jobs </label>";
		   		  $sql = "INSERT INTO JOBS (JOB_ID, TITLE) VALUES (4, 'Doe')";
		   		 // $sql2 = "INSERT INTO OFFEREDJOBS (JOB_ID, USER_ID, EMPLOYER_ID) VALUES (4,'admin' ,$emp_name )";
		   		create_post($sql);
		   		//create_post($sql2);
	   		}else{

	   			echo "<h6>user ID: "; print_r ($_SESSION["emp_id"]); echo "</h6><br> ";
	   			   		}

}else{
    $page = prepareConnectionForm();
}

displayPage($page);