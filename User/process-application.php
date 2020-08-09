<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$conn = mysqli_connect("localhost", "root", "root", "career");
$sql = "SELECT jobs.JOB_ID, jobs.TITLE, jobs.LOCATION, jobs.ORGANISATION_NAME, jobs.DESCRIPTION, jobs.VACANCY, jobs.EXEPRIENCE, jobs.POSTED_BY, jobs.POSTED_DATE, jobs.EXPIRY_DATE, jobs.JOB_CATEGORY, offeredjobs.STATUS, offeredjobs.USER_ID, offeredjobs.EMPLOYER_ID
FROM jobs
INNER JOIN offeredjobs ON jobs.JOB_ID = offeredjobs.JOB_ID";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));;


//check if Apply button is pressed
//insert values into offeredjobs table
if (isset($_GET['job_id']) && isset($_GET['applied'])){

  if($result->num_rows){
          $row=$result->fetch_array();
          $job_id = $_GET['job_id'];
          //NEEDS TO CHANGE TO PASS USER_ID FROM previous page from cookie!!
          $user_id = "3";
          $employer_id =$row['EMPLOYER_ID'];
          $status ="applied";
          // $offered_package = 50000;
          // $joining_date ="2020-08-19";
          // $create_date ="2020-08-19";
          // $update_date ="2020-08-19";
    
    if($_GET['applied'] == 0){
    	$sql_apply = "UPDATE offeredjobs SET status = '$status'
      		WHERE USER_ID = '$user_id' AND JOB_ID = '$job_id' AND EMPLOYER_ID = '$employer_id'";
      	
      	mysqli_query($conn,$sql_apply) or die(mysqli_error($conn));
      	$_SESSION['message'] = "You have succesffully applied to a job!";
        
         
    }else{
      $status ="";
      $sql_apply = "UPDATE offeredjobs SET status = '$status'
      WHERE USER_ID = '$user_id' AND JOB_ID = '$job_id' AND EMPLOYER_ID='$employer_id'";
      mysqli_query($conn,$sql_apply) or die(mysqli_error($conn));
      $_SESSION['message'] = "You have succesffully withdrawn your application!";
    }
  }header("Location: user_search.php");
}
?>