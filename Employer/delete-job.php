<?php
  include_once "../config.inc.php";
  include_once "../functions.inc.php";
  include_once "job.inc.php";
  
$sql = "DELETE FROM jobs WHERE JOB_ID = '".$_GET['id']."';";
$result = my_query($sql);
header('location:update-job.php');