<?php

function my_page_start($title){
  global $messages;
    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title><?php echo $title; ?></title>
  </head>
  <body class="bg-light">
    <?php

}

function prepareConnectionForm(){

  return '<div class="alert alert-primary text-center" role="alert">
  <form class="form-signin" method="post">
    <img class="mb-4" src="/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputUser" class="sr-only">User name</label>
    <input type="text" id="inputUser" class="form-control" placeholder="User name" name="user_name" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="user_password" >
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="cmd" value="sign-in">Sign in</button>
    <div class="mt-4">
          <div class="d-flex justify-content-center links">
            Dont have an account? <a href="User/signup.php" class="ml-2">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center links">
          <button class="btn btn-link" type="submit" name="cmd" value="forgot">Forgot your password?</button>
          </div>
        </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </form>
  </div>';
}

function getUserConnection(){
  global $messages;
  global $registered_user, $registered_user_category, $registered_user_type;

    if(isset($_SESSION["emp_id"])){
      // There is a cookie already set, user is comig back for 2 reasons :
      // - to continue to work
      // - to logout
      $registered_user = $_SESSION["emp_id"];
      $registered_user_category = $_SESSION["category"];
      $registered_user_type = $_SESSION["type"];

      if(isset($_POST['logout'])){
            // Discard session
            session_destroy();
            //session_start();
            
            $messages['INFO'] = "Good bye $registered_user";
            

            return false;
        }else{
            $_SESSION["type"]   = $registered_user_type;
            $_SESSION["emp_id"] = $registered_user;
            $_SESSION["category"] = $registered_user_category;

            $messages['INFO'] =  "You are connected as $registered_user";
            return true;
        }
    } else {
      // There is no cookie, first time user
        if(isset($_POST['cmd'])){
          switch($_POST['cmd']){
            case "sign-in":
              if (checkUserPassword($_POST['user_name'], $_POST['user_password'])){
               if($_SESSION["type"]=="employer"){

                $messages['INFO'] =  "Welcome employeee";
                //header("Location: /employer.php");
                return true;
               }
               else{
                      $messages['INFO'] =  "Welcome user";
                      return true;
               }
              }else{
                $messages['ERROR'] =  "I don't know you ".$_POST['user_name'];
                return false;
              }
            break;
            case "forgot":
              $registered_user = $_POST['user_name'];
              
              $user_mail = getUserMail($registered_user);
              $user_password = getUserPassword($registered_user);

              $mail_message = "Dear $registered_user,\n Your password is $user_password.\n\nBest wishes,\n\n\nWeb Career Portal Bot";

              mail($user_mail,"Web Career Portal - Password Request", $mail_message);
              $messages['INFO'] =  "Dear $registered_user, your password was sent to the email address provided at registration time.";
            break;
            default:
            $messages['ERROR'] =  "Unknown command ".$_POST['cmd'];
          }
        } else {
            return false;
        }
    }
}

function checkUserPassword($user, $password){
    global $registered_user, $registered_user_category, $registered_user_type;

    $sql = "SELECT user_password, user_category FROM users WHERE user_name = '$user' ";
    if($result = my_query($sql)){
        $return = $result->fetch();
        if ($password == $return[0])
        {
            $registered_user = $user;
            $registered_user_category = $return[1];


            setcookie("career_user", $registered_user, time()+ 3600); // Crée le cookie
            setcookie("career_category", $registered_user_category, time()+ 3600); // Crée le cookie
            $_SESSION["type"] = $registered_user_category;
            $_SESSION["emp_id"] = $registered_user;
            $_SESSION["category"] = $registered_user_category;

            return true;
        }
    }
    $sql2 = "SELECT PASSWORD, employer_category FROM employer WHERE EMPLOYER_NAME = '$user' ";
    if($result = my_query($sql2)){
        $return = $result->fetch();
        if ($password == $return[0])
        {
            $registered_user = $user;
            $registered_user_category = $return[1];



            setcookie("career_Employee", $registered_user, time()+ 3600); // Crée le cookie
            //setcookie("career_category", $registered_user_category, time()+ 3600); // Crée le cookie
            $_SESSION["type"] = $registered_user_category;
            $_SESSION["emp_id"] = $registered_user;
            $_SESSION["category"] = $registered_user_category;

            return true;
        }else{
            return false;
        }
    }

}

function numofappliposted(){
  $cux_id=$_SESSION["emp_id"];
  //$sql2 = "SELECT COUNT(JOB_ID) FROM OFFEREDJOBS WHERE EMPLOYER_ID = '$_SESSION["emp_id"]' ";
  $sql2 = "SELECT COUNT(JOB_ID) FROM offeredjobs WHERE EMPLOYER_ID = '$cux_id' ";
  $result = my_query($sql2);
  $return = $result->fetch();

 return $return[0];


}

function create_post($sql){

 my_query($sql);

}

function prepareUserMenu(){
    global $registered_user, $registered_user_category, $registered_user_type;
    global $messages;

    /*
    $page = "<header class='header black-bg'>
    <a href='index.php' class='logo'>Web Career Portal</a>
    </header>";
    */
    $page = '<div class="top-menu" role="alert">
    <ul class="nav pull-right top-menu">
  <form class="form-menu" method="post">
    <button class="logout btn btn-lg btn-primary btn-block" type="submit" name="logout">Sign out</button>
  </form>
  </ul>
  </div>';

    // Menu entries common to all user categories


    // Menu entries specific to a user category
    switch($registered_user_category)
    {
        case 1:
          $page .= "this is the admin menu";
        break;
        case 2:
          $page .= "this is the Gold Job Seeker user menu";
        break;
        case 3:
          $page .= "this is the Prime Job Seeker user menu";
        break;
        case 4:
          $page .= "this is the Basic Job Seeker user menu";
        break;
        case 5:
          $page .= getRecruiterMenu("Gold Recruiter user menu");
        break;
        case 6:
          $page .= getRecruiterMenu("Prime Recruiter user menu");
        break;
        default:
        $messages['ERROR'] = "USER CATEGORY ERROR";
    }
    return $page;
}

function getRecruiterMenu($msg){
  return "<h2>$msg</h2>
  <ul>
  <li><a href='/new-job.php'>Create Jobs</a></li>
  <li><a href='/update-job.php'>Jobs Maintenance</a></li>
  </ul>";
}

function displayPage($page){
  global $messages;
  
  if(!empty($messages))
  {
    foreach ($messages as $type => $message) {
      switch($type)
      {
        case 'ERROR':
          echo '<div class="alert alert-danger" role="alert">';
          echo $message;
          echo "</div>";
        break;
        case 'INFO':
          echo '<div class="alert alert-info" role="alert">';
          echo $message;
          echo "</div>";
        break;
        default:
          echo '<div class="alert alert-success" role="alert">';
          echo $message;
          echo "</div>";
        break;
      }
    }
  }
  echo $page;
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
  </body>
  </html>
  <?php
}

