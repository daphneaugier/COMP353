<?php
  include_once "../config.inc.php";
  include_once "../functions.inc.php";
  include_once "job.inc.php";

  my_page_start("Web Career Portal - Jobs Maintenance Page");

  if (getUserConnection()){
    $page  = getRecruiterMenu("Recruiter Menu");
    if(isset($_POST['cmd'])){
        if($_POST['cmd']=='update'){
            $page .= jobPerformUpdate();
            $page .= jobsMaintenance();
        }
    } else if(isset($_GET['id'])){
        $page .= jobUpdate($_GET['id']);
    }else{
        $page .= jobsMaintenance();
    }
  }else{
    $page = prepareConnectionForm();
  }   

  displayPage($page);
?>