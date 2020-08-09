<?php
  include_once "../config.inc.php";
  include_once "../functions.inc.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

my_page_start("Web Career Portal - Sign Up Page");

if(isset($_POST['user_type']) && ($_POST['user_type']) == "User"){

    header("Location: signup.php"); 

 }

if(isset($_POST['user_type']) && ($_POST['user_type']) == "Employer"){

    header("Location: employee_signup.php"); 

 }

?>
    <div class="container">
 <div class="py-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="0">
  </div>
  <div class="signup-form row justify-content-center">
    <div class="col-md-6 order-md-2 mb-4">
      <h2>Sign Up Page </h2>
      <form action="" method="POST" class="needs-validation" novalidate>
        <h4 class="mb-3">Are you an employer or a user?</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="user" name="user_type" value="User" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="user">User</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="employer" name="user_type" value="Employer" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="employer">Employer</label>
          </div>
        </div>
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="Submit" value="Submit">
      </form>
      <div class="text-center">
        Already have an account? 
      <a href="../index.php">Sign in</a>
    </div>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020</p>
  </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>
