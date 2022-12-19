<?php
include('../webIncludes/header.php');
include('../admin/config/dbcon.php'); 
if(isset($_SESSION['auth']))
{
  if(!isset($_SESSION['message'])){
    $_SESSION['message'] = "You are already logged in";
  }
  header("Location: ../index.php");
  exit(0);
}
?>
<!--navbar start-->
<!--navbar end-->
<div class="container">
  <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
              <?php include('../message.php'); ?>
              <div class="card">
                <div class="card-header">
                  <h4>Login</h4>
                </div>
                <div class="card-body">
                  <form action="logincode.php" method="POST">
                    <div class="form-group mb-3">
                      <label>Email ID</label>
                        <input type="text" required  name="email" placeholder="Enter Email Address"class="form-control">
                    </div>
                    <div class="form-group mb-3">
                      <label>Password</label>
                        <input type="password" required name="password" placeholder="Enter Password"class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" name="login_btn" class="btn btn-primary">Login now</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>
</div>