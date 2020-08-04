<?php



function showSelectPublisher(){
    global $con;
    
    $sql = "SELECT publisher_number, company_name FROM publisher ORDER BY company_name";
    $result = my_query($sql);
    if($result){
        echo '<div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Publisher</label>               
        </div>';
        echo '<select name="publisher" class="custom-select" id="inputGroupSelect01">';
        while(list($id, $name) = $result->fetch_array()){
            echo "<option value='$id'>$name</option>";
        }
        echo "</select>
        </div>
        ";
    }
}

function showSelectBranch(){
    global $con;
    $sql = "SELECT branch_id, branch_name FROM branch ORDER BY branch_name";
    $result = my_query($sql);
    if($result){
        echo '<div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Branch</label>               
        </div>
        <select name="branch" class="custom-select" id="inputGroupSelect01">';
        while(list($id, $name) = $result->fetch_array()){
            echo "<option value='$id'>$name</option>";
        }
        echo "</select></div>
        ";
    }
}

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
      <style>

  </style>
  </head>
  <body>
    <?php

}

function prepareConnectionForm(){

  return '<div class="alert alert-primary text-center" role="alert">
  <form class="form-signin" method="post">
    <img class="mb-4" src="logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputUser" class="sr-only">User name</label>
    <input type="text" id="inputUser" class="form-control" placeholder="User name" name="user_name" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="user_password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </form>
  </div>';
}

function getUserConnection(){
  global $messages;
  global $registered_user, $registered_user_category;

    if(isset($_COOKIE["career_user"])){
      $registered_user = $_COOKIE['career_user'];
      $registered_user_category = $_COOKIE['career_category'];
      if(isset($_POST['logout'])){
            // Discard cookies
            setcookie("career_user", "", time()-3600);
            setcookie("career_category", $registered_user_category, time()- 3600);
            $messages['INFO'] = "Good bye $registered_user";
            return false;
        }else{
            setcookie("career_user", $registered_user, time()+ 3600); // Relance le cookie pour 1h
            setcookie("career_category", $registered_user_category, time()+ 3600); // Crée le cookie
            $messages['INFO'] =  "Welcome back $registered_user";
            return true;
        }
    } else {
        if(isset($_POST['user_name'])){
            if (checkUserPassword($_POST['user_name'], $_POST['user_password']))
            {
                $messages['INFO'] =  "Welcome $registered_user";
                return true;
            }else{
              $messages['ERROR'] =  "I don't know you ".$_POST['user_name'];
                return false;
            }

        } else {
            return false;
        }
    }
    
}

function checkUserPassword($user, $password){
    global $registered_user, $registered_user_category;

    $sql = "SELECT user_password, user_status FROM users WHERE user_id = '$user' ";
    if($result = my_query($sql)){
        $return = $result->fetch();
        if ($password == $return[0])
        {
            $registered_user = $user;
            $registered_user_category = $return[1];

            setcookie("career_user", $registered_user, time()+ 3600); // Crée le cookie
            setcookie("career_category", $registered_user_category, time()+ 3600); // Crée le cookie

            return true;
        }else{
            return false;
        }
    }
}

function prepareUserMenu(){
    global $registered_user, $registered_user_category;
    global $messages;

    $page = "<header class='header black-bg'>
    <a href='index.php' class='logo'>Web Career Portal</a>
    </header>";

    $page .= '<div class="top-menu" role="alert">
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
          $page .= "this is the Gold Recruiter user menu";
        break;
        case 6:
          $page .= "this is the Prime Recruiter user menu";
        break;
        default:
        $messages['ERROR'] = "USER CATEGORY ERROR";
    }
    return $page;
}

function displayPage($page)
{
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