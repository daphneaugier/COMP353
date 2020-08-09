<?php


function jobCreation(){
    global $registered_user, $registered_user_category;
    global $messages;
  
    $page = "<h3>Job Creation</h3>";

    if (isset($_POST['cmd'])){
        $TITLE       = $_POST['TITLE'];  
        $LOCATION    = $_POST['LOCATION'];  
        $ORG_NAME    = $_POST['ORGANISATION_NAME'];  
        $DESCRIPTION = $_POST['DESCRIPTION'];  
        $VACANCY     = $_POST['VACANCY'];  
        $EXPERIENCE  = $_POST['EXPERIENCE'];  
        $POSTED_BY   = $registered_user;  
        $POSTED_DATE = date("Y-m-d");   
        $EXPIRY_DATE = date("Y-m-d", mktime(0, 0, 0, date("m")+1, date("d"),   date("Y")));

        $sql = "INSERT INTO jobs ( `TITLE`, `LOCATION`, `ORGANISATION_NAME`, `DESCRIPTION`, `VACANCY`, `EXPERIENCE`, `POSTED_BY`, `POSTED_DATE`, `EXPIRY_DATE` )  VALUES ( '$TITLE', '$LOCATION', '$ORG_NAME', '$DESCRIPTION', '$VACANCY', '$EXPERIENCE', '$POSTED_BY', '$POSTED_DATE', '$EXPIRY_DATE' ) "; 
        $result = my_query($sql); 
       
        if( $result )
        {
            $messages['INFO'] .= '<br>Job Created Successfully';
        }
        else
        {
            $messages['ERROR'] =  'Query Failed for <br>'.$sql;
        }
    }

    $page .= '
    <div class="container">

    <form method="post">
        <div class="form-group">
            <label for="TITLE" class="input-group-text">Title</label>
            <input  class="form-control" type="text" name="TITLE" id="TITLE" />
        </div> 
        <div class="form-group">
            <label for="LOCATION" class="input-group-text">Location</label>
            <input  class="form-control" type="text" name="LOCATION" id="LOCATION" />
        </div> 
        <div class="form-group">
            <label for="ORGANISATION_NAME" class="input-group-text">Organisation Name</label>
            <input  class="form-control" type="text" name="ORGANISATION_NAME" id="ORGANISATION_NAME" />
        </div> 
        <div class="form-group">
            <label for="DESCRIPTION" class="input-group-text">Description</label>
            <textarea  class="form-control" name="DESCRIPTION" id="DESCRIPTION" cols="45" rows="5"></textarea>
        </div> 
        <div class="form-group">
            <label for="VACANCY" class="input-group-text">Vacancy</label>
            <input  class="form-control" type="text" name="VACANCY" id="VACANCY" />
        </div> 
        <div class="form-group">
            <label for="EXPERIENCE" class="input-group-text">Experience</label>
            <input  class="form-control" type="text" name="EXPERIENCE" id="EXPERIENCE" />
        </div>    
        <div class="input-group-append" id="button-addon4">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="cmd" value="create">Create</button>
        </div>
    </form>
    
    </div>';
  

    return $page;
}

function jobsMaintenance(){
  global $registered_user, $registered_user_category;
  global $messages;

  $page = "<h3>Jobs Maintenance</h3>";
  
  $sql = "SELECT J.* FROM jobs J WHERE POSTED_BY='$registered_user'";
  $result = my_query($sql);

  $first_line = true;
  $page = '<table class="table  table-striped">';
  $line1 = "";
  $lines = "";

  while($job = $result->fetch(PDO::FETCH_ASSOC)){
    $lines .= "<tr>";
    foreach ($job as $key => $value) {
        if ($first_line){
            $line1 .= "<th>$key</th>";
        }
        $lines .= "<td>$value</td>";
        if($key=='JOB_ID'){
            $id = $value;
        }
    }
    if ($first_line){
        $first_line = false;
        $line1 = "<thead class='thead-dark'><tr>$line1<th></th><th></th></tr></thead>";
    }
    $trash_icon = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
  </svg>';
    $pencil_icon = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg>';

    $lines .= "<td><a href='delete-job.php?id=$id'>$trash_icon</a></td><td><a href='update-job.php?id=$id'>$pencil_icon</a></td></tr>";
  }

  $page .= $line1.$lines."<table>";

  return $page;
}

function jobUpdate($id){
    global $registered_user, $registered_user_category;
    global $messages;
  
    $page = "<h3>Job Update</h3>";

    $sql = "SELECT J.* FROM jobs J WHERE JOB_ID='$id'";
    $result = my_query($sql);
  
    $job = $result->fetch(PDO::FETCH_ASSOC);

    $TITLE       = $job['TITLE'];  
    $LOCATION    = $job['LOCATION'];  
    $ORG_NAME    = $job['ORGANISATION_NAME'];  
    $DESCRIPTION = $job['DESCRIPTION'];  
    $VACANCY     = $job['VACANCY'];  
    $EXPERIENCE  = $job['EXPERIENCE'];  
    $POSTED_BY   = $job['POSTED_BY'];   
    $POSTED_DATE = $job['POSTED_DATE'];    
    $EXPIRY_DATE = $job['EXPIRY_DATE']; 

    $page .= '<form method="post">
    <input type="hidden" name="JOB_ID" value="'.$id.'">
    <label for="TITLE">Title</label><input type="text" name="TITLE" id="TITLE" value="'.$job['TITLE'].'" />
    <br> 
    <label for="LOCATION">Location</label><input type="text" name="LOCATION" id="LOCATION" value="'.$job['LOCATION'].'"/>
    <br> 
    <label for="ORGANISATION_NAME">Organisation Name</label><input type="text" name="ORGANISATION_NAME" id="ORGANISATION_NAME" value="'.$job['ORGANISATION_NAME'].'"/>
    <br> 
    <label for="DESCRIPTION">Description</label><textarea name="DESCRIPTION" id="DESCRIPTION" cols="45" rows="5">'.$job['DESCRIPTION'].'</textarea>
    <br> 
    <label for="VACANCY">Vacancy</label><input type="text" name="VACANCY" id="VACANCY" value="'.$job['VACANCY'].'"/>
    <br> 
    <label for="EXPERIENCE">Experience</label><input type="text" name="EXPERIENCE" id="EXPERIENCE" value="'.$job['EXPERIENCE'].'"/>
    <br> 
    <label for="POSTED_BY">POSTED_BY</label><input type="text" name="POSTED_BY" id="POSTED_BY" value="'.$job['POSTED_BY'].'"/>
    <br>    
    <label for="POSTED_DATE">POSTED_DATE</label><input type="text" name="POSTED_DATE" id="POSTED_DATE" value="'.$job['POSTED_DATE'].'"/>
    <br>    
    <label for="EXPIRY_DATE">EXPIRY_DATE</label><input type="text" name="EXPIRY_DATE" id="EXPIRY_DATE" value="'.$job['EXPIRY_DATE'].'"/>
    <br>    
    
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="cmd" value="update">Update</button>
    </form>';
  

    return $page;
}

function jobPerformUpdate(){
    global $registered_user, $registered_user_category;
    global $messages;

    $id          = $_POST['JOB_ID'];
    $TITLE       = $_POST['TITLE'];  
    $LOCATION    = $_POST['LOCATION'];  
    $ORG_NAME    = $_POST['ORGANISATION_NAME'];  
    $DESCRIPTION = $_POST['DESCRIPTION'];  
    $VACANCY     = $_POST['VACANCY'];  
    $EXPERIENCE  = $_POST['EXPERIENCE'];  
    $POSTED_BY   = $_POST['POSTED_BY']; 
    $POSTED_DATE = $_POST['POSTED_DATE'];   
    $EXPIRY_DATE = $_POST['EXPIRY_DATE'];

    $sql = "UPDATE jobs SET  `TITLE`='$TITLE', `LOCATION`='$LOCATION', `ORGANISATION_NAME`='$ORG_NAME', `DESCRIPTION`='$DESCRIPTION', `VACANCY`='$VACANCY', `EXPERIENCE`='$EXPERIENCE', `POSTED_BY`='$POSTED_BY', `POSTED_DATE`='$POSTED_DATE', `EXPIRY_DATE`='$EXPIRY_DATE' ".
               " WHERE JOB_ID='$id'"; 
    $result = my_query($sql); 
   
    if( $result )
    {
        $messages['INFO'] .= '<br>Job Updated Successfully';
    }
    else
    {
        $messages['ERROR'] =  'Query Failed for <br>'.$sql;
    }
    return "";
}

?>