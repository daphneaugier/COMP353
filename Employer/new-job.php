<?php
  include_once "../config.inc.php";
  include_once "../functions.inc.php";
  include_once "job.inc.php";

  my_page_start("Web Career Portal - New Job Creation Page");

  if (getUserConnection()){
    $page  = getRecruiterMenu("Recruiter Menu");
    $page .= jobCreation();
  }else{
    $page = prepareConnectionForm();
  }

  displayPage($page);
?>

